<?php
class responden extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('lainnya_model');
        $this->load->model('ketkegpend_model');
    }
    
    function index(){
        if(isset($_POST['lanjut'])){
            $kd_lap = $this->ketkegpend_model->getOpenKodeLaporan();
            
            $this->lainnya_model->setNamaResponden($_POST['nama_responden']);
            $this->lainnya_model->setJabatan($_POST['jabatan']);
            $this->lainnya_model->setKodeLaporan($kd_lap);
            
            $this->lainnya_model->setCatatan($_POST['notes']);
            
            $this->lainnya_model->insertResponden();
            $this->lainnya_model->insertCatatan();
            
            redirect('home');
        } else{
            $dataprofile = array(
                'page_title' => 'Keterangan Responden',
                'name' => $this->session->userdata('name')
            );

            $content = array(
                'content' => 'responden/index'			
            );
            $this->template->load('template/def_template',$content,$dataprofile);   
        }        
    }
}