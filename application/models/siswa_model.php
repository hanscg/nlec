<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function get_siswas(){
		$query = $this->db->get('siswa');

		return $query->result_array();
	}

	public function get_siswa($id){
		$this->db->where('id', $id);
		$query = $this->db->select('siswa');

		return $query->row_array();
	}

	public function insert_siswa($data){
		$query = $this->db->insert('siswa', $data);

		if($query)
			return true;
		else
			return false;
	}

	public function update_siswa($data){
		$this->db->where('id', $data['id']);
		$query = $this->db->update('siswa', $data);

		if($query)
			return true;
		else
			return false;
	}

	public function delete_siswa($id){
		$this->db->where('id', $id);
		$this->db->delete('siswa');

		return $this->db->affected_rows();
	}
}