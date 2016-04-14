<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presensi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('presensi_model', 'presensi'); // kelas alias dari kelas_model
	}

	public function index(){
		$data['daftar_kelas'] = $this->presensi->get_kelas_pengajar();

		$this->load->view('templates/html');
		$this->load->view('templates/headers/header-presensi');
		$this->load->view('presensi/index', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/htmlclose');
	}

	function hadir(){
		$data['kode_kelas'] = $this->input->post('kode_kelas');
		$data['status'] = "hadir";
		$data['hari'] = date("Y-m-d");

		$result = $this->presensi->insert_presensi($data);

		if($result){
			$this->session->set_flashdata('success', "Absensi sukses!");
		}
		else{
			$this->session->set_flashdata('error', "Maaf ada kesalahan di Server, silakan coba beberapa saat lagi.");
		}

		redirect(base_url('presensi'));
	}

}