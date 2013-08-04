<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class users_lib {
    private $id;
    private $email;
    private $login;
    private $password;
    private $firstname;
    private $lastname;
    private $company;
    private $register_types_id;
    private $business_types_id;
    private $status;
    private $date_added;
    private $last_modified;
    private $ip_address;
    private $dob;
    private $varification_status;
    
    private $account_verification;
    private $last_modified_by;
    private $created_by;
    
    private $city;
    private $zip;
    private $state;
    private $address;
    private $phone;
    private $phone_password;
    private $send_reports;
    private $verification_code;
    private $group_id;
    private $leverage_id;
    private $deposit_id;
    private $country_id;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function getCompany() {
        return $this->company;
    }

    public function setCompany($company) {
        $this->company = $company;
    }

    public function getRegister_types_id() {
        return $this->register_types_id;
    }

    public function setRegister_types_id($register_types_id) {
        $this->register_types_id = $register_types_id;
    }

    public function getBusiness_types_id() {
        return $this->business_types_id;
    }

    public function setBusiness_types_id($business_types_id) {
        $this->business_types_id = $business_types_id;
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

    public function getDob() {
        return $this->dob;
    }

    public function setDob($dob) {
        $this->dob = $dob;
    }
    public function getVarification_status() {
        return $this->varification_status;
    }

    public function setVarification_status($varification_status) {
        $this->varification_status = $varification_status;
    }
	public function getAccount_verification() {
        return $this->account_verification;
    }

    public function setAccount_verification($account_verification) {
        $this->account_verification = $account_verification;
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
    
    
    public function getCity() {
        return $this->city;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function getZip() {
        return $this->zip;
    }

    public function setZip($zip) {
        $this->zip = $zip;
    }

    public function getState() {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getPhone_password() {
        return $this->phone_password;
    }

    public function setPhone_password($phone_password) {
        $this->phone_password = $phone_password;
    }

    public function getSend_reports() {
        return $this->send_reports;
    }

    public function setSend_reports($send_reports) {
        $this->send_reports = $send_reports;
    }

    public function getVerification_code() {
        return $this->verification_code;
    }

    public function setVerification_code($verification_code) {
        $this->verification_code = $verification_code;
    }

    public function getGroup_id() {
        return $this->group_id;
    }

    public function setGroup_id($group_id) {
        $this->group_id = $group_id;
    }

    public function getLeverage_id() {
        return $this->leverage_id;
    }

    public function setLeverage_id($leverage_id) {
        $this->leverage_id = $leverage_id;
    }

    public function getDeposit_id() {
        return $this->deposit_id;
    }

    public function setDeposit_id($deposit_id) {
        $this->deposit_id = $deposit_id;
    }

    public function getCountry_id() {
        return $this->country_id;
    }

    public function setCountry_id($country_id) {
        $this->country_id = $country_id;
    }


}
?>
