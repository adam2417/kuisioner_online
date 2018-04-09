<?php
class home extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('kettmppend_model');
    }
    
    function index(){
        $data_list = $this->kettmppend_model->getKetTempPendList();
        $data = array(
            'page_title' => 'Home',
            'name' => $this->session->userdata('name'),
            'data_list' => $data_list
        );

        $content = array(
            'content' => 'home/index'			
        );
        $this->template->load('template/def_template',$content,$data);   
    }
}