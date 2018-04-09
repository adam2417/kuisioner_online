<?php
class ketkegpend_model extends CI_Model {
    private $kdkeg;
    private $ketkeg;
    private $selectionlist;
    
    function setKdKeg($kdk){
        $this->kdkeg = $kdk;
    }
    
    function getKdKeg(){
        return $this->kdkeg;
    }
    
    function setKetKeg($kkeg){
        $this->ketkeg = $kkeg;
    }
    
    function getKetKeg(){
        return $this->ketkeg;
    }
    
    function setSelectionList($slist){
        $this->selectionlist = $slist;
    }
    
    function getSelectionList(){
        return $this->selectionlist;
    }
    
    function __construct() {
        parent::__construct();
    }
    
    function getOpenKodeLaporan(){
        $strQ = "SELECT kd_lap FROM tb_ket_tmp_pendaratan_ikan_trad WHERE status_lap = 'O' LIMIT 1";
        $q = $this->db->query($strQ);
        $res = $q->result();
        if($q->num_rows() > 0){
            return $res[0]->kd_lap;
        }
        return null;
    }
    
    function getKegiatanHeader(){
		$query = $this->db->get('tb_ket_keg_pendaratan_ikan_hdr');
		return $query->result();
    }
    
    function getKegiatanSubHeader(){
        $query = $this->db->get('tb_ket_keg_pendaratan_ikan_sub');
		return $query->result();
    }
}