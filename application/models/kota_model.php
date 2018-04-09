<?php
class kota_model extends CI_Model {
	private $id;
	private $nama;
	private $is_active;
	
	function setId($id){
		$this->id = $id;	
	}
	
	function getId(){
		return $this->id;
	}
	
	function setNama($nama){
		$this->nama = $nama;
	}
	
	function getNama(){
		return $this->nama;
	}
	
	function setActive($is_active){
		$this->is_active = $is_active;
	}
	
	function getActive(){
		return $this->is_active;
	}
	
	function __construct(){
		parent::__construct();
	}
	
	function getKotaList(){
		$this->db->where(array('is_active'=>'1'));
		$query = $this->db->get('tb_kota');
		return $query->result();
	}
	
	function getKotaOneSelect(){
		$this->db->where(array('is_active'=>'1','kd_kota'=>$this->getId()));
		$query = $this->db->get('tb_kota');
		return $query->result();
	}
	
	function editKotaList(){
		$data = array(
			'nm_kota' => $this->getNama()
		);
		$this->db->where(array('is_active'=>'1','kd_kota'=>$this->getId()));
		$this->db->update('tb_kota',$data);
	}
	
	function insertKota(){
		/*$query = $this->db->query("select max(kd_kab) id from tb_kabupaten");
		$res = $query->result();
		$last_id = $res[0]->id;
		$next_id = $last_id + 1;*/
		
		$data = array(
//			'kd_kab' => $next_id,
			'nm_kab' => $this->getNama(),
			'is_active' => '1'
		);
		$this->db->insert('tb_kota',$data);		
	}
	
	function hapusKota(){
		$data = array(
			'is_active' => '0'
		);
		$this->db->where(array('kd_kota'=>$this->getId()));
		$this->db->update('tb_kota',$data);
	}
}