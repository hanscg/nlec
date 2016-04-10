<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajar_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function get_pengajars(){
		$query = $this->db->get('pengajar');

		return $query->result_array();
	}

	public function get_pengajar($id){
		$this->db->where('id', $id);
		$query = $this->db->select('pengajar');

		return $query->row_array();
	}

	public function insert_pengajar($data){
		$query = $this->db->insert('pengajar', $data);

		if($query)
			return true;
		else
			return false;
	}

	public function update_pengajar($data){
		$this->db->where('id', $data['id']);
		$query = $this->db->update('pengajar', $data);

		if($query)
			return true;
		else
			return false;
	}

	public function delete_pengajar($id){
		$this->db->where('id', $id);
		$this->db->delete('pengajar');

		return $this->db->affected_rows();
	}
}