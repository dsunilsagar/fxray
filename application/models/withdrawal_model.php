<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Withdrawal_model extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    function get_withdrawal_requests() {
        $sql = 'SELECT w.*,DATE_FORMAT(w.date_added, "%m/%d/%y") as date_added_label, u.firstname, u.email, u.phone,
                CASE WHEN w.status =1 THEN "Active" ELSE "Inactive" END as status_name 
                FROM withdrawal_requests AS w
                LEFT JOIN users AS u ON u.id=w.user_id
                WHERE 1
        ';
        $post=$this->input->post();
        
        
        $data_flds = array('firstname','email','phone', 'amount','message', 'date_added_label', 'status_name');
        return $this->users_model->display_grid($_POST, $sql, $data_flds);
    }

}

?>