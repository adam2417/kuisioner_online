<?php
class ket_keg_pend extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('ketkegpend_model');
        $this->load->model('ketkegpendusr_model');
    }
    
    function index(){
        $ketkeg = $this->ketkegpend_model->getKegiatanHeader();
        $ketkegsub = $this->ketkegpend_model->getKegiatanSubHeader();
        
        $all_keg = array();
        
        // load header first
        foreach($ketkeg as $hdrdata){
            $hdrdata->has_sub = 'N';
            // cek is sub exists
            if(!empty($ketkegsub)){
                $arrsubd = array();
                foreach($ketkegsub as $subdata){
                    if($hdrdata->kd_ket == $subdata->kd_ket){
                        // tell the array it has sub
                        $hdrdata->has_sub = 'Y';
                        // push the current array with a new data
                        array_push($arrsubd,$subdata);                        
                    }
                }
                $hdrdata->sub_data = $arrsubd;
            }            
            array_push($all_keg,$hdrdata);
        }
        
        $dataprofile = array(
			'page_title' => 'Keterangan Kegiatan Pendaratan Ikan',
			'name' => $this->session->userdata('name'),
            'data_header' => $all_keg
		);
        
		$content = array(
			'content' => 'ket_keg_pend/index'			
		);
		$this->template->load('template/def_template',$content,$dataprofile);
    }
    
    function postData(){
        $kd_lap = $this->ketkegpend_model->getOpenKodeLaporan();
        
        if(isset($_POST['lanjut'])){
            foreach($_POST as $key => $value){
                if($key != 'lanjut'){
                    $selection_hdr = explode('_',$key);
                    
                    if(isset($selection_hdr[1]) && !(empty($selection_hdr[1]))){
                        $this->ketkegpendusr_model->setKdKet($selection_hdr[1]);
                    }
                    if(isset($selection_hdr[2])){
                        $this->ketkegpendusr_model->setKdSub($selection_hdr[2]);
                    }                                            
                    $this->ketkegpendusr_model->setKdUsr($this->session->userdata('userid'));
                    $this->ketkegpendusr_model->setKdLap($kd_lap);
                    if(!(empty($value))){
                        $this->ketkegpendusr_model->setUsrSel($value);
                    }
                    $this->ketkegpendusr_model->postData();                       
                }                       
            }
        }
        
        redirect('rata_tangkapan');
    }
}