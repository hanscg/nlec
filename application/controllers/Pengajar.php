<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('pengajar_model', 'pengajar'); // pengajar alias dari pengajar_model
	}

	public function index(){
		$data['daftar_pengajar'] = $this->pengajar->get_pengajars();

		$this->load->view('templates/html');
		$this->load->view('templates/headers/header-pengajar');
		$this->load->view('pengajar/index', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/htmlclose');
	}

	public function tambah(){
		$this->load->view('templates/html');
		$this->load->view('templates/headers/header-pengajar');
		$this->load->view('pengajar/form-pendaftaran');
		$this->load->view('templates/footer');
		$this->load->view('templates/htmlclose');
	}

	function addPengajar(){
		$data['nama'] = $this->input->post('nama');
		$data['alamat'] = $this->input->post('alamat');
		$data['ttl'] = $this->input->post('ttl');

		$result = $this->pengajar->insert_pengajar($data);

		if($result){
			$this->session->set_flashdata('success', "Penambahan data pengajar sukses!");
		}
		else{
			$this->session->set_flashdata('error', "Maaf ada kesalahan di Server, silakan coba beberapa saat lagi.");
		}

		redirect(base_url());
	}
}