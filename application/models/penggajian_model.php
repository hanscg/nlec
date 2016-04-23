<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penggajian_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function get_pengajars(){
		$query = $this->db->get('pengajar');

		return $query->result_array();
	}

	public function get_pengajar($id){
		$this->db->where('id', $id);
		$query = $this->db->get('pengajar');

		return $query->row_array();
	}
	
	public function get_presensi($id) {
		$this->db->select('*');
		$this->db->from('kelas');
		$this->db->join('presensi', 'kelas.kode = presensi.kode_kelas');
		$this->db->where('id_pengajar',$id);
		
		$query = $this->db->get();

		return $query->result_array();
	}
}