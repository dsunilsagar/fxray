<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Adminpages extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

        $this->load->view('adminpages/index');
    }

    public function add_page($page_id = 0) {
        $data = new stdclass();
        if (isset($page_id) && $page_id != 0) {
            $page_info = $this->pages_model->page_details($page_id);
            if ($page_info) {
                $data = $page_info[0];
            }
            $data->page_id = $page_id;
            $data->sub_heading = 'Edit';
        } else {
            $data = $this->users_model->gettabledetails(array('pages'));
            $data->page_id = 0;
            $data->sub_heading = 'Add';
        }
        /* $html = $this->load->view('pages/add_page_view',$data,true);
          echo $html; */
        $this->load->view('adminpages/add_page', $data);
    }

    public function save_page() {
        if ($this->formtoken->validateToken($_POST)) {
            $post = $this->input->post();
            // $post['content']=addslashes($post['content']);
            $result = $this->pages_model->save_page($post);
            echo $result;
        } else {
            die('The form is not valid or has expired.');
        }
    }

    public function getpagesdata() {
        echo $this->pages_model->getpagesdata();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */