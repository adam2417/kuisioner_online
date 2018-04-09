<?php
class ket_tmp_pend extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->model('provinsi_model');
        $this->load->model('kabupaten_model');
        $this->load->model('kecamatan_model');
        $this->load->model('kelurahan_model');
        $this->load->model('kota_model');
        $this->load->model('desa_model');
        $this->load->model('kettmppend_model');
        $this->load->model('kondisitempat_model');
	}
    
	function index(){        
        if(!($this->session == null)){    
			$this->session->sess_destroy();
		}
        
        if(isset($_POST['lanjut'])){
            // Post data to db
            // initiate all input
            $this->kettmppend_model->setTriwulan($_POST['triwulan']);
            $this->kettmppend_model->setTahun($_POST['tahun']);
            $this->kettmppend_model->setProvinsi($_POST['provinsi']);
            $this->kettmppend_model->setKabupaten($_POST['kabupaten']);
            $this->kettmppend_model->setKota($_POST['kota']);
            $this->kettmppend_model->setKecamatan($_POST['kecamatan']);
            $this->kettmppend_model->setDesa($_POST['desa']);
            $this->kettmppend_model->setKelurahan($_POST['kelurahan']);
            $this->kettmppend_model->setNoUrut($_POST['no_urut_tempat']);
            $this->kettmppend_model->setNamaTempat($_POST['nama_tempat']);
            $this->kettmppend_model->setAlamat($_POST['alamat_tempat']);
            $this->kettmppend_model->setKondisi($_POST['kondisi']);
            $this->kettmppend_model->postDataToDB();
            
            redirect('keterangan_petugas');
        }else {
            $prov_list = $this->provinsi_model->getProvinsiList();
            $kab_list = $this->kabupaten_model->getKabupatenList();
            $kec_list = $this->kecamatan_model->getKecamatanList();
            $kel_list = $this->kelurahan_model->getKelurahanList();
            $kota_list = $this->kota_model->getKotaList();
            $desa_list = $this->desa_model->getDesaList();
            $kondisi = $this->kondisitempat_model->getListKondisi();
        }
        //var_dump($prov_list);exit;
        
		$dataprofile = array(
			'page_title' => 'Home',
			'name' => $this->session->userdata('name'),
            'prov_list' => $prov_list,
            'kab_list' => $kab_list,
            'kec_list' => $kec_list,
            'kel_list' => $kel_list,
            'kota_list' => $kota_list,
            'desa_list' => $desa_list,
            'kond_tmp' => $kondisi
		);
		//var_dump($this->session->userdata['name']);exit;
        
        if(isset($_POST['new'])){
            $new_id = $this->kettmppend_model->getNewIdFromDB();
            $result = array_merge($dataprofile,array('newid'=>$new_id));
            $dataprofile = $result;
        }
        
		$content = array(
			'content' => 'ket_tmp_pend/index'			
		);
		$this->template->load('template/def_template',$content,$dataprofile);
	}
}