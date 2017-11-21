 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class loginuser extends CI_Model {	

	public function __construct()
	{
		parent::__construct();
		
	}
	function loginuser($table, $data_login){
		return $this->db->get_where($table, $data_login);
	}
}