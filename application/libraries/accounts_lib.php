<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Accounts_lib {

    private $id;
    private $name;
    private $ecurrencies_id;
    private $account_number;
    private $status;
    private $date_added;
    private $last_modified;
    private $ip_address;
    private $last_modified_by;
    private $created_by;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getEcurrencies_id() {
        return $this->ecurrencies_id;
    }

    public function setEcurrencies_id($ecurrencies_id) {
        $this->ecurrencies_id = $ecurrencies_id;
    }

    public function getAccount_number() {
        return $this->account_number;
    }

    public function setAccount_number($account_number) {
        $this->account_number = $account_number;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getDate_added() {
        return $this->date_added;
    }

    public function setDate_added($date_added) {
        $this->date_added = $date_added;
    }

    public function getLast_modified() {
        return $this->last_modified;
    }

    public function setLast_modified($last_modified) {
        $this->last_modified = $last_modified;
    }

    public function getIp_address() {
        return $this->ip_address;
    }

    public function setIp_address($ip_address) {
        $this->ip_address = $ip_address;
    }

    public function getLast_modified_by() {
        return $this->last_modified_by;
    }

    public function setLast_modified_by($last_modified_by) {
        $this->last_modified_by = $last_modified_by;
    }

    public function getCreated_by() {
        return $this->created_by;
    }

    public function setCreated_by($created_by) {
        $this->created_by = $created_by;
    }

}

?>
