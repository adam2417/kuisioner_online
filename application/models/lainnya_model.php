<?php
class lainnya_model extends CI_Model
{
    private $catatan;
    private $kdlap;
    private $namaresponden;
    private $jabatan;
    
    function setCatatan($catat){
        $this->catatan = $catat;
    }
    
    function getCatatan(){
        return $this->catatan;
    }
    
    function setKodeLaporan($kd_lap){
        $this->kdlap = $kd_lap;
    }
    
    function getKodeLaporan(){
        return $this->kdlap;
    }
    
    function setNamaResponden($kdpet){
        $this->namaresponden = $kdpet;
    }
    
    function getNamaResponden(){
        return $this->namaresponden;
    }
    
    function setJabatan($jbt){
        $this->jabatan = $jbt;
    }
    
    function getJabatan(){
        return $this->jabatan;
    }
    
    function __construct(){
        parent::__construct();
    }
    
    function insertCatatan(){
        $data = array(
            'kd_lap' => $this->getKodeLaporan(),
            'catatan' => $this->getCatatan()
        );
        $this->db->insert('tb_catatan',$data);
    }
    
    function insertResponden(){
        $data = array(
            'nama_responden' => $this->getNamaResponden(),
            'jabatan' => $this->getJabatan(),
            'kd_lap' => $this->getKodeLaporan()
        );
        $this->db->insert('tb_responden',$data);
    }    
}