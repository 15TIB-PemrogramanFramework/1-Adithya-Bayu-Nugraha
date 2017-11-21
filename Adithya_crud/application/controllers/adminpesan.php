<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class adminpesan extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('pesanan');
	}
//Tampilan YAng diTampilkan :
	function index(){

		$data['user']=$this->pesanan->tampil_data_pesan();
		$this->load->view('admin/datapesan',$data);
	}

	
//------------------------------HAPUS DATA-------------------------------------------

	function deletepesan($nama_pesanan){
		
		$this->pesanan->hapususer($nama_pesanan);
		redirect(site_url('adminpesan'));
	}
//----------------------------------EDIT DATA---------------------------------------
	}
