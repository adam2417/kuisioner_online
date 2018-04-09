<?php
class ketkegpendusr_model extends CI_Model
{
    private $x;
    private $kdket;
    private $kdsub;
    private $kdusr;
    private $kdlap;
    private $usrsel;
    
    function setKdKet($kk){
        $this->kdket = $kk;
    }
    
    function getKdKet(){
        return $this->kdket;
    }
    
    function setKdSub($ks){
        $this->kdsub = $ks;
    }
    
    function getKdSub(){
        return $this->kdsub;
    }
    
    function setKdUsr($ku){
        $this->kdusr = $ku;
    }
    
    function getKdUsr(){
        return $this->kdusr;
    }
    
    function setKdLap($kl){
        $this->kdlap = $kl;
    }
    
    function getKdLap(){
        return $this->kdlap;
    }
    
    function setUsrSel($us){
        $this->usrsel = $us;
    }
    
    function getUsrSel(){
        return $this->usrsel;
    }
    
    function __construct(){
        parent::__construct();
        $x = 0;
    }
    
    function postData(){
        $data = array(
            'kd_ket' => $this->getKdKet(),
            'kd_sub' => $this->getKdSub(),
            'kd_user' => $this->getKdUsr(),
            'kd_lap' => $this->getKdLap(),
            'user_selection' => $this->getUsrSel()
        );
        $this->db->insert('tb_user_ket_info_pendaratan_ikan',$data);
    }
}