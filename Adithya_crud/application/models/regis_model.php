<?php 
/**
* 
*/
class regis_model extends CI_Model
{

	public $order 				= 'DESC';
	public $Ascen				= 'ASCEN';

	 

	
	

	
	public $tableuser	= 'user';
	public $namauser 	= 'nama_user';
	public $alamat 	= 'alamat_user';
	public $username	= 'username';
	public $password 		= 'pass_user';
	 
	
	 function __construct()
	{
		parent::__construct();
	}
function tambahuser($data){
		$this->db->insert($this->tableuser, $data);
	}
}
