<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insert($data)
	{
		$this->db->insert('z_user', $data);
		return $this->db->insert_id();
	}

	public function get_images()
	{
		$query = $this->db->get('z_user');
		return $query->result();
	}

}

/* End of file User.php */
/* Location: ./application/models/User.php */