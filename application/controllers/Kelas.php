<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('kelas_model', 'kelas'); // kelas alias dari kelas_model
		$this->load->model('pengajar_model', 'pengajar'); // pengajar alias dari pengajar_model
		$this->load->model('siswa_model', 'siswa'); // siswa alias dari siswa_model
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

		redirect(base_url('kelas'));
	}

	function assignKelas() {
		$data['id'] = $this->input->post('id_siswa');
		$data['kode_kelas'] = $this->input->post('kode_kelas');

		$result = $this->kelas->assign_kelas($data);

		if($result){
			$this->session->set_flashdata('success', "Pemilihan kelas sukses!");
		}
		else{
			$this->session->set_flashdata('error', "Maaf ada kesalahan di Server, silakan coba beberapa saat lagi.");
		}

		redirect(base_url('kelas/assign'));
	}

	function detail($kode){
		$data['data_kelas'] = $this->kelas->get_kelas($kode);
		$data['data_pengajar'] = $this->pengajar->get_pengajar($data['data_kelas']['id_pengajar']);
		$data['data_siswa'] = $this->siswa->get_siswas_by_kode_kelas($data['data_kelas']['kode']);
		$data['daftar_jadwal'] = $this->kelas->get_all_jadwal();
		
		$this->load->view('templates/html');
		$this->load->view('templates/headers/header-kelas');
		$this->load->view('kelas/detail', $data);
		$this->load->view('templates/htmlclose');
	}

	function form_nilai(){
		$data['siswa'] = $this->siswa->get_siswa($this->input->post('id_siswa'));
		$data['kelas'] = $this->kelas->get_kelas($data['siswa']['kode_kelas']);
		$data['pengajar'] = $this->pengajar->get_pengajar($data['kelas']['id_pengajar']);

		$this->load->view('templates/html');
		$this->load->view('templates/headers/header-kelas');
		$this->load->view('kelas/form-nilai', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/htmlclose');
	}

	function assignNilai(){
		$data['id_siswa'] = $this->input->post('id_siswa');
		$data['id_pengajar'] = $this->input->post('id_pengajar');
		$data['skor'] = $this->input->post('skor');
		$data['komentar'] = $this->input->post('komentar');
		$kode_kelas = $this->input->post('kode_kelas');

		$result = $this->kelas->assign_nilai($data);

		if($result){
			$this->session->set_flashdata('success', "Assign nilai sukses!");
		}
		else{
			$this->session->set_flashdata('error', "Maaf ada kesalahan di Server, silakan coba beberapa saat lagi.");
		}

		redirect(base_url('kelas/detail/'.$kode_kelas));
	}

}