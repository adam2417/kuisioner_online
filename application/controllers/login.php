<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('login_model');		
	}
	
	function index(){
        $arr_sess = array(			
			'name' => 'Guest'
		);
		$this->session->set_userdata($arr_sess);
		$this->load->view('login/login');
	}
	
	function loginProcess(){
		if(isset($_POST['login'])){
			$rule_config = array(
				array(
					'field'=>'username',
					'label'=>'User Name',
					'rules'=>'trim|required|xss_clean|encode_php_tags|prep_for_form'
				),
				array(
					'field'=>'pass',
					'label'=>'Password',
					'rules'=>'trim|required|xss_clean|encode_php_tags|prep_for_form'
				)
			);
            
			$this->form_validation->set_rules($rule_config);
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			if($this->form_validation->run() == false){
				$this->load->view('login/login');
			}else{
				$this->login_model->setUserId($_POST['username']);
				$this->login_model->setPass($_POST['pass']);
				if($this->login_model->checkValidLogin()){
					$arr_sess = array(
						'userid' => $this->login_model->getUserId()
					);
					$array_currsession = array('userid'=>''/*,'username'=>'','role'=>'','name'=>''*/);
					$this->session->unset_userdata($array_currsession);
					$this->session->set_userdata($arr_sess);
					/*$this->User_model->setLastLogin(date('Y-m-d H:i:s'));
					$this->User_model->modifyLastLogin();*/
					
					$data = array(
						'page_title' => 'Home',
						'name' => 'Test',
						'last_log' => 'test'						
					);
					/*$partials = array(
						'content'=> 'home/home'
					);
					$this->template->load('template/def_template',$partials,$data);*/
                    redirect('ket_tmp_pend');
				}else{
					$data['message'] = "Maaf Username Dan Password Login Anda Salah";
					$this->load->view('login/login',$data);
				}
			}
		}
	}
    
    function logout(){
        $array_currsession = array('userid'=>'');
        $this->session->unset_userdata($array_currsession);
        redirect('login');
    }
}