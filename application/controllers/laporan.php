<?php
class laporan extends CI_Controller
{
    function __contrust(){
        parent::__construct();
    }
    
    function index(){
        $this->load->view('laporan/lap_data');
    }
}