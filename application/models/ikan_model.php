<?php
class ikan_model extends CI_Model
{
    function __construct(){
        parent::__construct();
    }
    
    function getIkanList(){
        $q = $this->db->get('tb_jenis_ikan');
        return $q->result();
    }
}