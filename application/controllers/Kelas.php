<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('kelas_model', 'kelas'); // kelas alias dari kelas_model
	}

	public function index(){
		$data['daftar_kelas'] = $this->kelas->get_all_kelas();
		$data['daftar_jadwal'] = $this->kelas->get_all_jadwal();

		$this->load->view('templates/html');
		$this->load->view('templates/headers/header-kelas');
		$this->load->view('kelas/index', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/htmlclose');
	}

	public function tambah(){
		$data['daftar_pengajar'] = $this->kelas->get_all_pengajar();
		$data['daftar_ruangan'] = $this->kelas->get_all_ruangan();

		$this->load->view('templates/html');
		$this->load->view('templates/headers/header-kelas');
		$this->load->view('kelas/form-kelas', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/htmlclose');
	}

	public function assign(){
		$data['daftar_siswa'] = $this->kelas->get_all_siswa();

		$this->load->view('templates/html');
		$this->load->view('templates/headers/header-kelas');
		$this->load->view('kelas/assign-kelas', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/htmlclose');
	}

	public function form_assign() {
		$data['siswa'] = $this->kelas->get_siswa($this->input->post('id_siswa'));
		$data['daftar_kelas'] = $this->kelas->get_all_kelas();

		$this->load->view('templates/html');
		$this->load->view('templates/headers/header-kelas');
		$this->load->view('kelas/form-assign', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/htmlclose');
	}

	function addKelas(){
		$data['kode'] = $this->input->post('kode');
		$data['id_pengajar'] = $this->input->post('pengajar');
		$data['kode_ruangan'] = $this->input->post('ruangan');

		$data['hari_jadwal_1'] = $this->input->post('hari_jadwal_1');
		$data['jam_jadwal_1'] = $this->input->post('jam_jadwal_1');
		$data['hari_jadwal_2'] = $this->input->post('hari_jadwal_2');
		$data['jam_jadwal_2'] = $this->input->post('jam_jadwal_2');

		$result = $this->kelas->insert_kelas($data);

		if($result){
			$this->session->set_flashdata('success', "Penambahan kelas baru sukses!");
		}
		else{
			$this->session->set_flashdata('error', "Maaf ada kesalahan di Server, silakan coba beberapa saat lagi.");
		}

		redirect(base_url());
	}

	function assignKelas() {
		$data['id'] = $this->input->post('id_siswa');
		$data['kode_kelas'] = $this->input->post('kode_kelas');

		$result = $this->kelas->assign_kelas($data);

		if($result){
			$this->session->set_flashdata('success', "Penambahan kelas baru sukses!");
		}
		else{
			$this->session->set_flashdata('error', "Maaf ada kesalahan di Server, silakan coba beberapa saat lagi.");
		}

		redirect(base_url());
	}

}