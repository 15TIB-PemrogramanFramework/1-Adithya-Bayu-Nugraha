  <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class pesanan extends CI_Model
{

	public $order 				= 'DESC';
	public $Ascen				= 'ASCEN';

	 

	
	public $table_kategori	= 'kategori';
	public $id_kategori	= 'id_kategori';
	public $nama_kategori	= 'nama_kategori';

	public $table_deadline	= 'deadline';
	public $id_deadline	= 'id_deadline';
	public $nama_deadline	= 'nama_deadline';

	//Table warga
	public $table_pesan 	= 'pesan';
	public $nama_pesanan 	= 'nama_pesanan';
	public $email_user	= 'email_user';
	
	 
	
	 

	function __construct()
	{
		parent::__construct();
	}

	 
	function tambahpesan($data){
		$this->db->insert($this->table_pesan, $data);
	}

	function selectkategori(){
		$this->db->order_by($this->id_kategori, $this->Ascen);
		return $this->db->get($this->table_kategori)->result();
	}

	function tampilkategori($id_kategori){
		$this->db->where($this->id_kategori, $id_kategori);
		return $this->db->get($this->table_kategori)->result();
	}

	function selectdeadline(){
		$this->db->order_by($this->id_deadline, $this->Ascen);
		return $this->db->get($this->table_deadline)->result();
	}

function tampil_data_pesan(){
		$this->db->select('p.*, l.nama_deadline,k.nama_kategori');
 		$this->db->from('pesan p');
 		$this->db->join('kategori k ','k.id_kategori = p.id_kategori','inner');
 		$this->db->join('deadline l  ','l.id_deadline= p.id_deadline');
 		$this->db->distinct();
 		$hasil=$this->db->get()->result();
                 
                 return $hasil;
	}

	function hapuspesan($nama_pesanan){
			$this->db->where($this->nama_pesanan, $nama_pesanan);
			$this->db->delete($this->table_pesan);
	}

	function hapususer($nama_pesanan){
			$this->db->where('id_pesan', $nama_pesanan);
			$this->db->delete($this->table_pesan);
	}



}
