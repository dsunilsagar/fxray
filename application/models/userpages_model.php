<?php 

class Userpages_model extends MY_Model{
    
    public function __construct() {
        parent::__construct();
    }
    

    function save_withdrawal_requests($post){
        return $this->saveRecord(conversion($post,'withdrawal_requests_lib'),'withdrawal_requests');
    }

    function save_internal_transfer_requests($post){
        return $this->saveRecord(conversion($post,'internal_transfer_requests_lib'),'internal_transfer_requests');
    }

    
    
    
}


?>