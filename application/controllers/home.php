<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->model('adminhomepage_model');
        
        $userLangID=$this->session->userdata('user_language_id');
        $langDetails=array('language_id'=>$userLangID);
        
        $data['home_pages_sections'] = $this->adminhomepage_model->get_home_page_sections($this->config->item('cache_page'),$langDetails);
        $newsWhere_SQL = " AND n.language_id=$userLangID ";
        $data['news'] = $this->adminhomepage_model->getnews($newsWhere_SQL,' LIMIT 8');

        $this->load->view("home", $data);
    }

    function home_OLD() {
        $this->load->view("home_OLD");
    }

    function lang_test() {
        $this->load->view("home/lang_test");
    }

    public function get_unread_messages() {
        $messages_array = array();
        echo json_encode($messages_array);
    }

    public function set_user_language($language_id=0) {
        $this->load->model('adminhomepage_model');
        $post = $this->input->post();
        $userLanguageID = 1; // Default
        if (!empty($post['language_id']) && is_numeric($post['language_id'])) {
            $userLanguageID = $post['language_id'];
        }else if(!empty($language_id) && is_numeric($language_id)){
            $userLanguageID=$language_id;
        }
        $languageDetails=$this->adminhomepage_model->get_language_details($userLanguageID);
        $userLanguageABBR=(!empty($languageDetails[0]->abbr))?$languageDetails[0]->abbr:'en';
        
        $this->session->set_userdata('user_language_id', $userLanguageID);
        $this->session->set_userdata('user_language_abbr', $userLanguageABBR);
        
        if(!empty($language_id) && is_numeric($language_id)){
            redirect('home');
        }
    }

    
    function metatrader() {
        redirect('fileupload/download/downloads/forexray4.exe');
    }
    
}

?>
