<?php
class provinsi_model extends CI_Model {
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
	
	function getProvinsiList(){
		$this->db->where(array('is_active'=>'1'));
		$query = $this->db->get('tb_provinsi');
		return $query->result();
	}
	
	function getProvinsiOneSelect(){
		$this->db->where(array('is_active'=>'1','kd_prov'=>$this->getId()));
		$query = $this->db->get('tb_provinsi');
		return $query->result();
	}
	
	function editProvinsiList(){
		$data = array(
			'nm_prov' => $this->getNama()
		);
		$this->db->where(array('is_active'=>'1','kd_prov'=>$this->getId()));
		$this->db->update('tb_provinsi',$data);
	}
	
	function insertProvinsi(){
		$query = $this->db->query("select max(kd_prov) id from tb_provinsi");
		$res = $query->result();
		$last_id = $res[0]->id;
		$next_id = $last_id + 1;
		
		$data = array(
			'kd_prov' => $next_id,
			'nm_prov' => $this->getNama(),
			'is_active' => '1'
		);
		$this->db->insert('tb_provinsi',$data);		
	}
	
	function hapusProvinsi(){
		$data = array(
			'is_active' => '0'
		);
		$this->db->where(array('kd_prov'=>$this->getId()));
		$this->db->update('tb_provinsi',$data);
	}
}