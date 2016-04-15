<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('siswa_model', 'siswa'); // siswa alias dari siswa_model
	}

	public function index(){
		$data['daftar_siswa'] = $this->siswa->get_siswas();

		$this->load->view('templates/html');
		$this->load->view('templates/headers/header-siswa');
		$this->load->view('siswa/index', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/htmlclose');
	}

	public function tambah(){
		$this->load->view('templates/html');
		$this->load->view('templates/headers/header-siswa');
		$this->load->view('siswa/form-pendaftaran');
		$this->load->view('templates/footer');
		$this->load->view('templates/htmlclose');
	}

	function addSiswa(){
		$data['nama'] = $this->input->post('nama');
		$data['alamat'] = $this->input->post('alamat');
		$data['ttl'] = $this->input->post('ttl');

		$result = $this->siswa->insert_siswa($data);

		if($result){
			$this->session->set_flashdata('success', "Penambahan data siswa sukses!");
		}
		else{
			$this->session->set_flashdata('error', "Maaf ada kesalahan di Server, silakan coba beberapa saat lagi.");
		}

		redirect(base_url());
	}

	public function edit($id){
		$data['data_siswa'] = $this->siswa->get_siswa($id);
		$this->load->view('templates/html');
		$this->load->view('templates/headers/header-siswa');
		$this->load->view('siswa/form-update',$data);
		$this->load->view('templates/footer');
		$this->load->view('templates/htmlclose');
	}
}