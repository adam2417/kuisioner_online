<?php
class ratatangkapan_model extends CI_Model
{
    private $kd_ikan;
    private $kd_kolom;
    private $kd_lap;
    private $v_ikan;
    private $h_ikan;
    
    function setKodeIkan($kdikan){
        $this->kd_ikan = $kdikan;
    }
    
    function getKodeIkan(){
        return $this->kd_ikan;
    }
    
    function setKodeKolom($kdkol){
        $this->kd_kolom = $kdkol;
    }
    
    function getKodeKolom(){
        return $this->kd_kolom;
    }
    
    function setKodeLaporan($kdlap){
        $this->kd_lap = $kdlap;
    }
    
    function getKodeLaporan(){
        return $this->kd_lap;
    }
    
    function setVolumeIkan($volikan){
        $this->v_ikan = $volikan;
    }
    
    function getVolumeIkan(){
        return $this->v_ikan;
    }
    
    function setHargaIkan($harga){
        $this->h_ikan = $harga;
    }
    
    function getHargaIkan(){
        return $this->h_ikan;
    }
    
    function __construct(){
        parent::__construct();
    }
    
    function insertRataTangkapan(){
        $data = array(
            'kd_ikan' => $this->getKodeIkan(),
            'kd_kol' => $this->getKodeKolom(),
            'kd_lap' => $this->getKodeLaporan(),
            'volume_ikan' => $this->getVolumeIkan(),
            'harga_ikan' => $this->getHargaIkan()
        );
        $this->db->insert('tb_rerata_hasil_tangkapan',$data);
    }
}