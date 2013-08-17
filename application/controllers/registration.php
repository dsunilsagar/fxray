<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Registration extends MY_Controller {

    public function index() {
        $post=$this->input->post();
        if(!empty($post)){
            
            $post['dob']=  dateFormat($this->input->post('dob'), 'Y-m-d h:i:s');
            
            $this->session->set_flashdata('reg_form_data',$post);
            
            /**
            *  START @@ Captcha Checking... 
            */
            // First, delete old captchas
            $expiration = time() - 7200;
            $this->db->query("DELETE FROM captcha WHERE captcha_time < " . $expiration);
            
            // Then see if a captcha exists:
            $sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
            $binds = array($this->input->post('captcha'), $this->input->ip_address(), $expiration);
            $query = $this->db->query($sql, $binds);
            $captchaRows = $query->row();
            
            /**
            *  END @@ Captcha Checking... 
            */
            if($captchaRows->count == 0){
                $this->session->set_flashdata('error_msg','Please enter the correct text from the image.');
                if($post['registration_type']=='demo')
                redirect('registration#Demo_Acc_Tab');
                else
                redirect('registration#Real_Acc_Tab');    
            }else if ($this->formtoken->validateToken($post)) {
                
                $post['varification_status']=1;
                
                // Save the registration form.
                $result = $this->users_model->save_registration($post);
                if($result){
                    
                    if(empty($post['id'])){
                        
                        $info=$this->mql_model->create_account_mql($result);
                        
                         if(!$info['error'])
                        {
                        $loginNum=$info['response'];
                        $sql = 'update users set login="'.$loginNum.'", varification_status = "1" where id = "'.$result.'" ';
                        $this->db->query($sql);
                        
                        $email_data['from'] = $this->config->item('from_mail');
                        $email_data['to'] = $this->db->escape_str($post['email']);
                        $email_data['subject'] = 'ForexRay Account Details';
                        $email_data['email_header']='ForexRay Account Details';
                        $email_data['name'] = ucfirst($post['firstname']);
                        $emailMessage='Login:'.$loginNum.'<br>Password:'.$post['password']; // urlencode($email_data['to'])
                        $email_data['message'] = $emailMessage;
                        // $email_data['content'] =  $this->load->view('email_templates/user_reg',$email_data,true);
                        $email_data['content'] =  $this->load->view('email_templates/template_2/email_verification',$email_data,true);
                        $result = $this->mail_model->send_mail($email_data);
                        
                        }else{
                             $sql = 'delete from users  where id = "'.$result.'" ';
                             $this->db->query($sql);
                             $this->session->set_flashdata('error_msg',$info['response']);
                            if($post['registration_type']=='demo')
                            redirect('registration#Demo_Acc_Tab');
                            else
                           redirect('registration#Real_Acc_Tab');
                        }
                    }
                    
                }
                /*
                $this->session->set_flashdata('success_msg','Thank you for registering. Please check your email for activation.');
                // $this->session->set_flashdata('info_msg','Please check your spam mail for activation mail in case you dont find in your inbox! ');
                $this->session->set_flashdata('info_msg','In case you did not receive the email, You can <a href="'.  site_url('login/resend_link').'">click here</a> to re-send the verification Email.');
                redirect('login');
                 * 
                 */
                $this->session->set_flashdata('registration_info',$post);
                redirect('registration/success');
            } else {
                $this->session->set_flashdata('error_msg','The form is not valid or has expired. Please try again.');
                redirect('registration'); // die('The form is not valid or has expired.');
            }
            
        }else{
            $data=array();
            
            /**
             * START @@ Captcha Image
             */
            $this->load->helper('captcha');
            
            $vals = array(
                'word' => '',
                'img_path' => './captcha/',
                'img_url' => base_url().'captcha/',
                'font_path' => '',
                'img_width' => '150',
                'img_height' => 30,
                'expiration' => 7200
            );
            
            $data['captcha'] = $captchaData = create_captcha($vals);
            
            $captchaDbData = array(
                'captcha_time' => $captchaData['time'],
                'ip_address' => $this->input->ip_address(),
                'word' => $captchaData['word']
            );

            $query = $this->db->insert_string('captcha', $captchaDbData);
            $this->db->query($query);
            /*
             * END @@ Captcha End
             */
            
            $this->load->view('registration/index', $data);
        }
    }
    
    function success(){
        $data['registration_info']=$registration_info=$this->session->flashdata('registration_info');
        if(empty($registration_info)){
            redirect('registration');
        }else{
            $this->load->view('registration/success', $data);
        }
    }
    
    
    public function activate($encID = '', $domain = '') {
        $user_id=0;
        if(!empty($encID)){
            $user_id=$this->my_encrypt->decode($encID);
        }
        if(!empty($user_id) && is_numeric($user_id)){
            $this->users_model->activateUserID($user_id);
            
            // Send Trading Details Mail. ,Email to Download Metetrader
            $userDetails=$this->users_model->user_details($user_id);
            if(!empty($userDetails)){
                $email_data['login_details'] = array(
                    'login_id'=>$userDetails[0]->login,
                    'password'=>$userDetails[0]->password,
                    'investor_password'=>$userDetails[0]->password,
                    'login_server'=>'Real 3'
                );
                $email_data['from'] = $this->config->item('from_mail');
                $email_data['to'] = $this->db->escape_str($userDetails[0]->email);
                $email_data['subject'] = 'ForexRay - Welcome to ForexRay '.ucfirst($userDetails[0]->firstname).'. Your Account Details';
                $email_data['email_header'] = 'ForexRay - Welcome to ForexRay. Your Account Details';
                $email_data['name'] = ucfirst($userDetails[0]->firstname);
                $email_data['content'] = $this->load->view('email_templates/template_2/after_verification', $email_data, true);
                $result = $this->mail_model->send_mail($email_data);
            }
            
        } else {
            // echo 'Please contact Administrator';
            $this->session->set_flashdata('error_msg','Invalid activation link. Please contact Administrator.');
            redirect('login');
        }
    }
    
    function check_email(){
        $email=$this->input->get('email');
        if(!empty($email)){
            $return = $this->users_model->check_email($email);
            if(!empty($return)){
                echo 'false';
            }else{
                echo 'true';
            }
        }else{
            echo 'false'; // false triggers error msg
        }
    }

}

?>