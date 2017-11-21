<?php 
/**
* 
*/
class user_model extends CI_Model
{
	public $nama_tabel	= 'user';
	public $nama_tabel1 = 'user';
	public $id			= 'id_user';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_tabel)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->nama_tabel,$data);
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->nama_tabel);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->nama_tabel,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_tabel)->row();//1 data
	}

	function cek_loginadmin($username,$password)
	{
		$this->db->where('nama_prodi',$username);
		$this->db->where('jurusan_prodi',$password);
		return $this->db->get($this->nama_tabel)->row();
	}

	function cek_loginuser($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('pass_user',$password);
		return $this->db->get($this->nama_tabel1)->row();
	}




}
 ?>