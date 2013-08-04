<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Userpages extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('userpages_model');
    }

    public function index() {
        redirect('userpages/homenew');
    }
    
    public function trade() {
        $this->load->view('userpages/trade');
    }
    
    public function account_history() {
        $this->load->view('userpages/account_history');
    }
    
    /*
     * NEW START
     */
    
    
    public function design() {
        $this->load->view('userpages/design');
    }
    
    public function homenew() {
        $this->load->view('userpages/homenew');
    }

    public function depositnew() {
        $this->load->view('userpages/depositnew');
    }

    public function depositnew_form() {
        $this->load->view('userpages/depositnew_form');
    }

    public function withdrawalnew() {
        $this->load->view('userpages/withdrawalnew');
    }
    
    public function withdrawalnew_form() {
        $post=$this->input->post();
        if($post && !empty($post['amount'])){
            $this->load->library('withdrawal_requests_lib');
            $this->userpages_model->save_withdrawal_requests($post);
            
            $this->session->set_flashdata('success_msg','Your Withdrawal Request is submitted Successfully.');
            redirect('userpages/withdrawalnew');
        }else{
            $this->load->view('userpages/withdrawalnew_form');
        }
    }

    public function trading_history() {
        $this->load->view('userpages/trading_history');
    }
    
    public function open_positions() {
        $this->load->view('userpages/open_positions');
    }
    
    public function deposits_withdrawls() {
        $this->load->view('userpages/deposits_withdrawls');
    }
    
    public function change_leverage() {
        $this->load->view('userpages/change_leverage');
    }
    
    public function internal_transfer() {
        $post=$this->input->post();
        if($post && !empty($post['amount'])){
            $this->load->library('internal_transfer_requests_lib');
            $this->userpages_model->save_internal_transfer_requests($post);
            
            $this->session->set_flashdata('success_msg','Your Internal Transfer Request is submitted Successfully.');
            redirect('userpages/internal_transfer');
        }else{
            $this->load->view('userpages/internal_transfer');
        }
    }

    public function validation_documents() {
        $post=$this->input->post();
        if($post && !empty($post['proof_of_identity']) && !empty($post['proof_of_residence'])){
            $user_details = unserialize($this->session->userdata['user_details']);
            $this->load->library(array('proof_of_identity_lib','proof_of_residency_lib'));
            // echo '<pre>'; print_r($user_details); echo '</pre>'; die;
            foreach ($post['proof_of_identity'] as $key => $value) {
                $attachmentPost['db_file_name'] = $value;
                $attachmentPost['original_file_name'] = $value;
                $attachmentPost['url'] = $post['proof_of_identity_full_path'][$key];
                $attachment_id=$this->users_model->save_attachments($attachmentPost);
                $proofOfIdentityPost=array();
                $proofOfIdentityPost['user_id']=$user_details->id;
                $proofOfIdentityPost['attachments_id']=$attachment_id;
                $this->users_model->save_proof_of_identity($proofOfIdentityPost);
            }
            foreach ($post['proof_of_residence'] as $key => $value) {
                $attachmentPost['db_file_name'] = $value;
                $attachmentPost['original_file_name'] = $value;
                $attachmentPost['url'] = $post['proof_of_residence_full_path'][$key];
                $attachment_id=$this->users_model->save_attachments($attachmentPost);
                $proofOfIdentityPost=array();
                $proofOfIdentityPost['user_id']=$user_details->id;
                $proofOfIdentityPost['attachments_id']=$attachment_id;
                $this->users_model->save_proof_of_residency($proofOfIdentityPost);
            }
            
            $this->session->set_flashdata('success_msg','Your Documents Were Uploaded Successfully.');
            redirect('userpages/validation_documents');
        }else{
            $this->load->view('userpages/validation_documents');
        }
    }

    public function additional_documents() {
        $post=$this->input->post();
        if($post && !empty($post['additional_documents'])){
            $user_details = unserialize($this->session->userdata['user_details']);
            $this->load->library('additional_documents_lib');
            // echo '<pre>'; print_r($user_details); echo '</pre>'; die;
            foreach ($post['additional_documents'] as $key => $value) {
                $attachmentPost['db_file_name'] = $value;
                $attachmentPost['original_file_name'] = $value;
                $attachmentPost['url'] = $post['additional_documents_full_path'][$key];
                $attachment_id=$this->users_model->save_attachments($attachmentPost);
                $additionDocsPost=array();
                $additionDocsPost['user_id']=$user_details->id;
                $additionDocsPost['attachments_id']=$attachment_id;
                $this->users_model->save_additional_documents($additionDocsPost);
            }
            
            $this->session->set_flashdata('success_msg','Your Documents Were Uploaded Successfully.');
            redirect('userpages/additional_documents');
        }else{
            $this->load->view('userpages/additional_documents');
        }
    }
    
    public function trading_signals() {
        $this->load->view('userpages/trading_signals');
    }
    
    public function support_request() {
        $this->load->view('userpages/support_request');
    }
    
    
    
    public function upload_documents_handler(){
        // error_reporting(E_ALL | E_STRICT);
        $uploadOptions=array(
            'max_file_size'=>(1 * 1024 * 1024),
            'accept_file_types'=>'/.(gif|jpe?g|png|pdf|doc|docx|ppt|pptx|xls|xlsx|csv|zip)$/i'
        );
        $this->load->library('JQ_UploadHandler',$uploadOptions);
        // $upload_handler = new UploadHandler();
    }
    
    

}