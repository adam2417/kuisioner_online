<?php
class kettmppend_model extends CI_Model {
    private $triwulan;
    private $tahun;
    private $prov;
    private $kab;
    private $kota;
    private $kec;
    private $desa;
    private $kel;
    private $nouru;
    private $nmtmp;
    private $alamat;
    private $kondisi;
    
    function setTriwulan($twl){
        $this->triwulan = $twl;
    }
    
    function getTriwulan(){
        return $this->triwulan;
    }
    
    function setTahun($thn) {
        $this->tahun = $thn;
    }
    
    function getTahun(){
        return $this->tahun;
    }
    
    function setProvinsi($prv) {
        $this->prov = $prv;
    }
    
    function getProvinsi(){
        return $this->prov;
    }
    
    function setKabupaten($kb) {
        $this->kab = $kb;
    }
    
    function getKabupaten(){
        return $this->kab;
    }
    
    function setKota($kt){
        $this->kota = $kt;
    }
    
    function getKota(){
        return $this->kota;
    }
    
    function setKecamatan($kc) {
        $this->kec = $kc;
    }
    
    function getKecamatan(){
        return $this->kec;
    }
    
    function setDesa($ds){
        $this->desa = $ds;
    }
    
    function getDesa(){
        return $this->desa;
    }
    
    function setKelurahan($klh){
        $this->kel = $klh;
    }
    
    function getKelurahan(){
        return $this->kel;
    }
    
    function setNoUrut($nu){
        $this->nouru = $nu;
    }
    
    function getNoUrut(){
        return $this->nouru;
    }
    
    function setNamaTempat($nt){
        $this->nmtmp = $nt;
    }
    
    function getNamaTempat(){
        return $this->nmtmp;
    }
    
    function setAlamat($almt) {
        $this->alamat = $almt;
    }
    
    function getAlamat(){
        return $this->alamat;
    }
    
    function setKondisi($knds){
        $this->kondisi = $knds;
    }
    
    function getKondisi(){
        return $this->kondisi;
    }
    
    function __construct() {
        parent::__construct();
    }
    
    function getNewIdFromDB() {
        $query = $this->db->query("select ifnull(max(kd_lap),0) id from tb_ket_tmp_pendaratan_ikan_trad");
		$res = $query->result();
		$last_id = $res[0]->id;
		$next_id = (int)$last_id + 1;
        
        return $next_id;
    }
    
    function postDataToDB() {
        $data = array(
            'triwulan_ke' => $this->getTriwulan(),
            'tahun_ke' => $this->getTahun(),
            'provinsi' => $this->getProvinsi(),
            'kelurahan' => $this->getKelurahan(),
            'desa' => $this->getDesa(),
            'kecamatan' => $this->getKecamatan(),
            'kota' => $this->getKota(),
            'kabupaten' => $this->getKabupaten(),
            'no_urut_tempat' => $this->getNoUrut(),
            'nama_tempat' => $this->getNamaTempat(),
            'alamat' => $this->getAlamat(),
            'kd_kondisi' => $this->getKondisi()
        );
        $this->db->insert('tb_ket_tmp_pendaratan_ikan_trad',$data);
    }
    
    function getKetTempPendList(){
        $query = $this->db->get('tb_ket_tmp_pendaratan_ikan_trad');
		return $query->result();
    }
}