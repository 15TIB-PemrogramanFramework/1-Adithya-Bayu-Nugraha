 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class loginadmin extends CI_Model {	

	public function __construct()
	{
		parent::__construct();
		
	}
	function loginadmin($table, $data_login){
		return $this->db->get_where($table, $data_login);
	}
}