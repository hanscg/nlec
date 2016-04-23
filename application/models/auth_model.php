<?php

class Auth_model extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}

	public function authenticate($username)
	{
		$this->db->where('username', $username);
		$result = $this->db->get('admin');

		return $result->row_array();
	}
}

?>