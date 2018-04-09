<?php
class kolreratatangkapan_model extends CI_Model
{
    private $kd_kol;
    private $kd_lap;
    private $desc_kol;
    private $jm_hari;
    private $rerata_tangkapan;
    
    function setKodeLap($kdlap){
        $this->kd_lap = $kdlap;
    }
    
    function getKodeLap(){
        return $this->kd_lap;
    }
    
    function setKodeKolom($kdkol) {
        $this->kd_kol = $kdkol;
    }
    
    function getKodeKolom(){
        return $this->kd_kol;
    }
    
    function setDescKolom($desckol) {
        $this->desc_kol = $desckol;
    }
    
    function getDescKolom(){
        return $this->desc_kol;
    }
    
    function setJumlahHari($jmHari) {
        $this->jm_hari = $jmHari;
    }
    
    function getJumlahHari(){
        return $this->jm_hari;
    }
    
    function setRerataTangkapan($ratatangkapan){
        $this->rerata_tangkapan = $ratatangkapan;
    }
    
    function getRerataTangkapan(){
        return $this->rerata_tangkapan;
    }
        
    function __construct() {
        parent::__construct();
    }
    
    function insTrxKolRerataTangkapan() {
        $data = array(
            'kd_lap' => $this->getKodeLap(),
            'kd_kol' => $this->getKodeKolom(),
            'jml_hari' => $this->getJumlahHari(),
            'rerata_perahu' => $this->getRerataTangkapan()
        );
        $this->db->insert('tb_trx_kol_hsl',$data);
    }
    
    function getKolRerataTangkapanPerahu(){
        $query = $this->db->get('tb_kol_hasil_tangkapan');
		return $query->result();
    }
    
    function getKolTrxRerataTangkapanPerahu($kd_lap){
        $this->db->where(array('kd_lap'=>$kd_lap));
        $query = $this->db->get('tb_trx_kol_hsl');
		return $query->result();
    }
}