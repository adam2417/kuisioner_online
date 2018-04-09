<?php
class petugasket_model extends CI_Model
{
    private $nm_petugas;
    private $tgl;
    private $kd_lap;
    private $checked;
    
    function getNamaPetugas() {
        return $this->nm_petugas;
    }
    
    function setNamaPetugas($n_petugas){
        $this->nm_petugas = $n_petugas;
    }
    
    function getTanggal(){
        return $this->tgl;
    }
    
    function setTanggal($tg){
        $this->tgl = $tg;
    }
    
    function getKodeLaporan(){
        return $this->kd_lap;
    }
    
    function setKodeLaporan($kdlp){
        $this->kd_lap = $kdlp;
    }
    
    function getChecked(){
        return $this->checked;
    }
    
    function setChecked($chk){
        $this->checked = $chk;
    }
    
    function __construct(){
        parent::__construct();
    }
    
    function insertPemeriksa(){
		$data = array(
			'nm_petugas' => $this->getNamaPetugas(),
			'kd_lap' => $this->getKodeLaporan,
            'checked' => $this->getChecked()
		);
		$this->db->insert('tb_ket_ptgs_pemeriksa',$data);		
	}
    
    function insertPencacah(){
		$data = array(
			'nm_petugas' => $this->getNamaPetugas(),
			'kd_lap' => $this->getKodeLaporan,
            'checked' => $this->getChecked()
		);
		$this->db->insert('tb_ket_ptgs_pencacah',$data);		
	}
}