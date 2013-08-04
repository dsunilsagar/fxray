<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Adminsettings extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('adminsettings_model');
    }

    public function index() {
        $data['settings'] = $this->adminsettings_model->get_settings(FALSE);
        $this->load->view('adminsettings/index', $data);
    }

    public function save_settings() {
        $post = $this->input->post();
        if (!empty($post)) {
            echo '<pre>'; print_r($post); echo '</pre>';
            foreach($post['setting'] as $k=>$v){
                $savePost=$v;
                $savePost['id'] = trim($k);
                $this->adminsettings_model->save_settings($savePost);
            }
            $this->session->set_flashdata('success_msg', 'Settings updated successfully.');
            redirect('adminsettings');
        } else {
            redirect('adminsettings');
        }
    }

}

?>