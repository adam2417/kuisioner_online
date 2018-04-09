<?php
class login_model extends CI_Model {
    private $userid;
    private $pass;
    private $isactive;
    
    function setUserId($uid){
        $this->userid = $uid;
    }
    
    function getUserId(){
        return $this->userid;
    }
    
    function setPass($passw){
        $this->pass = $passw;
    }
    
    function getPass(){
        return $this->pass;
    }
    
    function setIsActive($isa) {
        $this->isactive = $isa;
    }
    
    function getIsActive(){
        return $this->isactive;
    }
        
    function __construct() {
        parent::__construct();
    }
    
    function checkValidLogin(){
        $strQ = "SELECT COUNT(*) TOTAL_DATA FROM TB_LOGIN WHERE USERID = '".$this->getUserId()."' AND PASS = '".$this->getPass()."' AND IS_ACTIVE = '1' LIMIT 1";
        $query = $this->db->query($strQ);
        if($query->num_rows() > 0){
            $res = $query->result();
            if((int)$res[0]->TOTAL_DATA > 0){
                return true;
            }
        }
        return false;
    }
}