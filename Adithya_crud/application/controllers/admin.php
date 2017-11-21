  <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('prodi_model');
	}

	function index()
	{
		//print_r($this->prodi_model->ambil_data());
		$data['admin'] = $this->prodi_model->ambil_data();
		$this->load->view('admin/prodi_list',$data);
	}
	function indexuser()
	{
		//print_r($this->prodi_model->ambil_data());
		$data['user'] = $this->prodi_model->ambil_data_user();
		$this->load->view('admin/user_list',$data);
	}

	function tambah()
	{
		$data = array(
			'aksi' 			=> site_url('admin/tambah_aksi'),
			'nama' 			=> set_value('nama'),
			'alamat' 		=> set_value('alamat'),
			'skill' 		=> set_value('skill'),
			'id_admin' 		=> set_value('id_admin'),
			'button' 		=> 'Insert'
			);
		$this->load->view('admin/prodi_form',$data);
	}

	function tambah_aksi()
	{
		$data = array(
			'nama_admin' 	=> $this->input->post('nama'),
			'alamat_admin' 	=> $this->input->post('alamat'),
			'skill_admin' 	=> $this->input->post('skill')
			);
		$this->prodi_model->tambah_data($data);
		redirect(site_url('admin'));
	}

	function delete($id)
	{
		$this->prodi_model->hapus_data($id);
		redirect(site_url('admin'));
	}

	function update($id)
	{
		$admin = $this->prodi_model->ambil_data_id($id);
		$data = array(
			'aksi' 			=> site_url('admin/update_aksi'),
			'nama' 			=> set_value('nama',$admin->nama_admin),
			'jurusan' 		=> set_value('alamat',$admin->alamat_admin),
			'skill' 	=> set_value('skill',$admin->skill_admin),
			'id_admin' 		=> set_value('id_admin',$admin->id_admin),
			'button' 		=> 'Edit'
			);
		$this->load->view('admin/prodi_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'nama_admin' 		=> $this->input->post('nama'),
			'alamat_admin' 	=> $this->input->post('alamat'),
			'skill_admin' 	=> $this->input->post('skill')
			);	
		$id_prodi = $this->input->post('id_admin');
		$this->prodi_model->edit_data($id_admin,$data);
		redirect(site_url('admin'));
	}

public function pesan()
	{
		$data = array(
		'id_pesan' => $this->prodi_model->pesan('order by id_pesan desc')->result_array(),
		);
		$this->load->view('admin/datapesan', $data);
	}


function hapuspesan($kode = 0){
		$result = $this->prodi_model->Hapus('pesan',array('id_pesan' => $kode));
		if($result == 1){
			header('location:'.base_url().'admin/pesan');
		}else{
			header('location:'.base_url().'admin/pesan/0');
		}
	}

}

 ?>