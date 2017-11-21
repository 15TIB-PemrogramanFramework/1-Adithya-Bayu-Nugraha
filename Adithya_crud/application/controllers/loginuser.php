<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class loginuser extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('loginadmin');
	}

	function index(){
		$this->load->view('user/loginuser');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$pass_user = $this->input->post('pass_user');
		$dataLogin = array(
			'username' => $username,
			'pass_user' => $pass_user
		);
		$cek = $this->loginadmin->loginadmin("user", $dataLogin)->num_rows();
		if($cek > 0 ){
			$data_session = array(
				'username' => $username,
				'status' => "login"
			);
			
			$this->session->set_userdata($data_session);
			Redirect(base_url().'Home/user1');
		}else{
			Redirect(base_url(). 'loginuser') ;
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('loginuser'));
	}
}