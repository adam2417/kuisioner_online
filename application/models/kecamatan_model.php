<?php
class kecamatan_model extends CI_Model {
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
	
	function getKecamatanList(){
		$this->db->where(array('is_active'=>'1'));
		$query = $this->db->get('tb_kecamatan');
		return $query->result();
	}
	
	function getKecamatanOneSelect(){
		$this->db->where(array('is_active'=>'1','kd_kec'=>$this->getId()));
		$query = $this->db->get('tb_kecamatan');
		return $query->result();
	}
	
	function editKecamatanList(){
		$data = array(
			'nm_kec' => $this->getNama()
		);
		$this->db->where(array('is_active'=>'1','kd_kec'=>$this->getId()));
		$this->db->update('tb_kecamatan',$data);
	}
	
	function insertKecamatan(){
		/*$query = $this->db->query("select max(kd_kab) id from tb_kabupaten");
		$res = $query->result();
		$last_id = $res[0]->id;
		$next_id = $last_id + 1;*/
		
		$data = array(
//			'kd_kab' => $next_id,
			'nm_kec' => $this->getNama(),
			'is_active' => '1'
		);
		$this->db->insert('tb_kecamatan',$data);		
	}
	
	function hapusKecamatan(){
		$data = array(
			'is_active' => '0'
		);
		$this->db->where(array('kd_kec'=>$this->getId()));
		$this->db->update('tb_kecamatan',$data);
	}
}