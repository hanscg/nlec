<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presensi_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function get_kelas_pengajar(){
		$this->db->select('*');
		$this->db->from('kelas');
		$this->db->join('pengajar', 'pengajar.id = kelas.id_pengajar');
		$this->db->join('jadwal', 'kelas.kode = jadwal.kode_kelas');
		$this->db->where('jadwal.hari',date("N"));

		$query = $this->db->get();

		return $query->result_array();
	}
	
	public function insert_presensi($data){
		$query = $this->db->insert('presensi', $data);

		if($query)
			return true;
		else
			return false;
	}
}