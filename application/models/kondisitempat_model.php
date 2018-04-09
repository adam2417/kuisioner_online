<?php
class kondisitempat_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function getListKondisi() {
        $this->db->where(array('is_active'=>'1'));
		$query = $this->db->get('tb_kondisi_tempat');
		return $query->result();
    }
}