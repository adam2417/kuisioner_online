<?php
class rata_tangkapan extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('kolreratatangkapan_model');
        $this->load->model('ketkegpend_model');
        $this->load->model('ikan_model');
        $this->load->model('ratatangkapan_model');
    }
    
    function index(){
        $load_data = $this->kolreratatangkapan_model->getKolRerataTangkapanPerahu();
        if(isset($_POST['lanjut'])){
            $kd_lap = $this->ketkegpend_model->getOpenKodeLaporan();            
            $x = 1;
            while($x <= count($load_data)){              
                $this->kolreratatangkapan_model->setKodeLap($kd_lap);
                $this->kolreratatangkapan_model->setKodeKolom($x);
                $this->kolreratatangkapan_model->setJumlahHari($_POST['jmhari_'.$x]);
                $this->kolreratatangkapan_model->setRerataTangkapan($_POST['rata_'.$x]);
                $this->kolreratatangkapan_model->insTrxKolRerataTangkapan();
                $x++;
            }
            redirect('rata_tangkapan/blokreratatangkapan');
        } else {
            $dataprofile = array(
                'page_title' => 'Rata Tangkapan Ikan',
                'name' => $this->session->userdata('name'),
                'rerata_tangkapan' => $load_data
            );

            $content = array(
                'content' => 'rata_tangkapan/index'			
            );
            $this->template->load('template/def_template',$content,$dataprofile);   
        }
    }
    
    function blokreratatangkapan(){
        if(isset($_POST['lanjut'])){
            $kd_lap = $this->ketkegpend_model->getOpenKodeLaporan();
            $load_kol = $this->kolreratatangkapan_model->getKolRerataTangkapanPerahu();
            
            $row = array();
            $x = 0;
            foreach($_POST as $key=>$vals){ // kolom
                if(!($key == 'lanjut')){
                    $jum_row = count($_POST['jenis_ikan']); // ambil sample row
                    $y = 0;
                    while($y < $jum_row){
                        $row[$y]['jenis_ikan'] = $_POST['jenis_ikan'][$y];
                        foreach($load_kol as $kol_def){
                            $row[$y]['volume_harga_ikan'][$kol_def->kd_kolom][0] = $_POST['volume_ikan_'.$kol_def->kd_kolom][$y];
                            $row[$y]['volume_harga_ikan'][$kol_def->kd_kolom][1] = $_POST['harga_ikan_'.$kol_def->kd_kolom][$y];
                        }
                        $y++;
                    }   
                }
            }
            
            $i = 0;
            while($i < count($row)){
                $this->ratatangkapan_model->setKodeIkan($row[$i]['jenis_ikan']);
                $this->ratatangkapan_model->setKodeLaporan($kd_lap);
                
                foreach($row[$i]['volume_harga_ikan'] as $keys=>$val){
                    $this->ratatangkapan_model->setKodeKolom($keys);
                    $this->ratatangkapan_model->setVolumeIkan(intval($val[0]));
                    $this->ratatangkapan_model->setHargaIkan(intval($val[1]));
                    $this->ratatangkapan_model->insertRataTangkapan();
                }
                $i++;
            }
            redirect('responden');
        }else {
            $load_kol = $this->kolreratatangkapan_model->getKolRerataTangkapanPerahu();
            $kd_lap = $this->ketkegpend_model->getOpenKodeLaporan();
            $curr_val = $this->kolreratatangkapan_model->getKolTrxRerataTangkapanPerahu($kd_lap);
            $ikan_list = $this->ikan_model->getIkanList();

            $dataprofile = array(
                'page_title' => 'Rata Tangkapan Ikan',
                'name' => $this->session->userdata('name'),
                'col_def' => $load_kol,
                'col_deff' => $curr_val,
                'ikan_list' => $ikan_list
            );

            $content = array(
                'content' => 'rata_tangkapan/blokreratatangkapan'			
            );
            $this->template->load('template/def_template',$content,$dataprofile);   
        }     
    }
    
    function juknisratatangkapan(){
        $dataprofile = array(
            'page_title' => 'Penjelasan Pengisian Daftar',
            'name' => $this->session->userdata('name')
        );

        $content = array(
            'content' => 'rata_tangkapan/juknisratatangkapan'			
        );
        $this->template->load('template/def_template',$content,$dataprofile);
    }
}