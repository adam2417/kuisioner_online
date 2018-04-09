<?php
class keterangan_petugas extends CI_Controller 
{
    function __construct() {
        parent::__construct();
        $this->load->model('petugasket_model');
        $this->load->model('ketkegpend_model');
    }
    
    function index() {
        if(isset($_POST['lanjut'])){
            $kd_lap = $this->ketkegpend_model->getOpenKodeLaporan();
            
            $this->petugasket_model->setNamaPetugas($_POST['nm_ket_petugas_cacah']);
            $this->petugasket_model->setKodeLaporan($kd_lap);
            $this->petugasket_model->setChecked($_POST['chk_cacah']);
            $this->petugasket_model->insertPencacah();
            
            $this->petugasket_model->setNamaPetugas($_POST['nm_ket_petugas_pemeriksa']);
            $this->petugasket_model->setKodeLaporan($kd_lap);
            $this->petugasket_model->setChecked($_POST['chk_periksa']);
            $this->petugasket_model->insertPemeriksa();
            
            redirect('ket_keg_pend');
        }else{
            $dataprofile = array(
                'page_title' => 'Keterangan Petugas',
                'name' => $this->session->userdata('name')
            );

            $content = array(
                'content' => 'ket_petugas/index'			
            );
            $this->template->load('template/def_template',$content,$dataprofile);
        }        
    }
}