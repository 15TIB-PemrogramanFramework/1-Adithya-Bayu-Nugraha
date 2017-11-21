<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class regis_user extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('regis_model');
	}
	//Tampilan Awal Daftar Akun
	function index(){
		$this->load->view('user/regis');
	}

	public function usertambah(){
		$data = array(
			'action' 			=> site_url('regis_user/user_aksi'),
			'nama_user' 	=> set_value('nama_user'),
			'alamat_user'	=> set_value('alamat_user'),
			'username'	=> set_value('username'),
			'pass_user' 	=> set_value('pass_user'),
			 
			
		);
		$this->load->view('user/regis', $data);
	}
	function user_aksi(){
		$data = array(
			'nama_user' => $this->input->post('nama_user'),
			'alamat_user' => $this->input->post('alamat_user'),
			'username' => $this->input->post('username'),
			'pass_user' => $this->input->post('pass_user'),
			 
		);
		$this->regis_model->tambahuser($data);
		redirect(site_url('Login'));
	}
//------------------------------------
}
?>

