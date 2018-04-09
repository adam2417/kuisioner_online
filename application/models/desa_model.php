<?php
class desa_model extends CI_Model {
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
	
	function getDesaList(){
		$this->db->where(array('is_active'=>'1'));
		$query = $this->db->get('tb_desa');
		return $query->result();
	}
	
	function getDesaOneSelect(){
		$this->db->where(array('is_active'=>'1','kd_desa'=>$this->getId()));
		$query = $this->db->get('tb_desa');
		return $query->result();
	}
	
	function editDesaList(){
		$data = array(
			'nm_desa' => $this->getNama()
		);
		$this->db->where(array('is_active'=>'1','kd_kab'=>$this->getId()));
		$this->db->update('tb_desa',$data);
	}
	
	function insertDesa(){
		/*$query = $this->db->query("select max(kd_kab) id from tb_desa");
		$res = $query->result();
		$last_id = $res[0]->id;
		$next_id = $last_id + 1;*/
		
		$data = array(
			//'kd_desa' => $next_id,
			'nm_desa' => $this->getNama(),
			'is_active' => '1'
		);
		$this->db->insert('tb_desa',$data);		
	}
	
	function hapusDesa(){
		$data = array(
			'is_active' => '0'
		);
		$this->db->where(array('kd_desa'=>$this->getId()));
		$this->db->update('tb_desa',$data);
	}
}