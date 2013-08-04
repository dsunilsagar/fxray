<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pages extends MY_Controller {

    public function pageview($url_key = '', $language_id = 1) {

        if (trim($url_key) != '') {
            $data=$this->adminwidget_model->get_widgets_template();
            
            $data['pages'] = $this->pages_model->getpagedet(trim($url_key),$language_id);

            if (!empty($data['pages'][0]->id)) {
                $data['page_menu'] = $this->adminmenus_model->get_page_menus($data['pages'][0]->id,$language_id);
            }
            // echo '<pre>'; print_r($data['page_menu']); echo '</pre>';
            // $this->load->view('pages/index', $data);  // ADDING WIDGET PARSING ABOVE
            
            $this->parser->parse('pages/index', $data);
            
        } else {
            redirect('home');
        }
    }

}

?>