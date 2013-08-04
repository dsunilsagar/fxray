<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class News extends MY_Controller {

    public function index() {
        $userLangID=$this->session->userdata('user_language_id');
        $where_SQL = " AND n.language_id=$userLangID ";
        $data['news'] = $this->news_model->getnews($where_SQL);
        $this->load->view('news/index', $data);
    }

    public function full_story($news_id = 0) {
        $userLangID=$this->session->userdata('user_language_id');
        $data['news'] = '';
        if(!is_numeric($news_id)){
            redirect('news');
        }
        if ($news_id > 0) {
            $where_id = " and n.id=$news_id AND n.language_id=$userLangID ";
            $data['news'] = $this->news_model->getnews($where_id);
        }
        $this->load->view('news/full_story', $data);
    }

}

?>