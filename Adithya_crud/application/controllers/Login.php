<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('loginadmin');
	}

	function index(){
		$this->load->view('login1');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$pass_user = $this->input->post('password');
		$dataLogin = array(
			'username' => $username,
			'password' => $pass_user
		);
		$cek = $this->loginadmin->loginadmin("admin", $dataLogin)->num_rows();
		if($cek > 0 ){
			$data_session = array(
				'username' => $username,
				'status' => "login"
			);
			
			$this->session->set_userdata($data_session);
			Redirect(base_url().'admin');
		}else{
			Redirect(base_url(). 'login1') ;
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}
}