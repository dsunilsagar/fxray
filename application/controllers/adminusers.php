<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Adminusers extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('adminusers/index');
    }
    
    
    function get_adminusers(){
        echo $this->users_model->get_adminusers();
    }

    public function edituser($id = 0, $action = '') {
        //echo $this->session->userdata('ctz_offset');die;
        $data = new stdclass();
        if ($id) {
            $user_info = $this->users_model->user_details($id);
            if ($user_info) {
                $data = $user_info[0];
            }
            $data->id = $id;
            $data->proof_of_identity = $this->users_model->user_proof_of_identity($id);;
            $data->proof_of_residency = $this->users_model->user_proof_of_residency($id);;
            $data->additional_documents = $this->users_model->user_additional_documents($id);;
        } else {
            $data->id = 0;
        }

        $data->session_id = MD5($this->session->userdata('session_id'));
        $this->load->view('adminusers/edituser', $data);
    }
    
    function saveuser(){
        $post=$this->input->post();
        if(!empty($post) && $this->formtoken->validateToken($post)){
            $post['dob']=  dateFormat($this->input->post('dob'), 'Y-m-d h:i:s');
            $this->users_model->save_registration($post);
            redirect('adminusers');
        }else{
            redirect('adminusers');
        }
        
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */