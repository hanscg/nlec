<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presensi_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function get_all_kelas(){
		$query = $this->db->get('kelas');

		return $query->result_array();
	}

	public function get_kelas($id){
		$this->db->where('id', $id);
		$query = $this->db->select('kelas');

		return $query->row_array();
	}

	public function get_all_pengajar(){
		$query = $this->db->get('pengajar');

		return $query->result_array();
	}

	public function get_all_ruangan(){
		$query = $this->db->get('ruangan');

		return $query->result_array();
	}

	public function get_all_siswa(){
		$query = $this->db->get('siswa');

		return $query->result_array();
	}

	public function get_siswa($id){
		$this->db->where('id', $id);
		$query = $this->db->get('siswa');
		
		return $query->row_array();
	}

	public function insert_kelas($data){
		$query = $this->db->insert('kelas', $data);

		if($query)
			return true;
		else
			return false;
	}

	public function update_kelas($data){
		$this->db->where('id', $data['id']);
		$query = $this->db->update('kelas', $data);

		if($query)
			return true;
		else
			return false;
	}

	public function assign_kelas($data){
		/* $this->db->set('kode_kelas', $data[kode_kelas], FALSE);
		$this->db->where('id', $data['id']);
		$query = $this->db->update('kelas'); */

		$query1 = $this->db->query("UPDATE siswa SET kode_kelas = '$data[kode_kelas]' WHERE id = $data[id]");
		$query2 = $this->db->query("UPDATE kelas SET jumlah_siswa = jumlah_siswa+1 WHERE kode = '$data[kode_kelas]'");

		if ($query1 && $query2)
			return true;
		else
			return false;
	}

	public function delete_kelas($id){
		$this->db->where('id', $id);
		$this->db->delete('kelas');

		return $this->db->affected_rows();
	}
}