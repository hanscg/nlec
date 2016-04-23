<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penggajian extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('penggajian_model', 'penggajian'); // pengajar alias dari pengajar_model
	}

	public function index(){
		$data['daftar_pengajar'] = $this->penggajian->get_pengajars();

		if(!$this->session->userdata('admin')){
			redirect('admin');
 		}
 		else
 		{	
 			$this->load->view('templates/html');
 			$this->load->view('templates/headers/header-penggajian');
 			$this->load->view('siswa/index', $data);
 			$this->load->view('templates/htmlclose');
 		}
	}

	public function jumlah_gaji() {
		$data['id_pengajar'] = $this->input->post('id_pengajar');
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun'] = $this->input->post('tahun');
		$data['data_pengajar'] = $this->penggajian->get_pengajar($this->input->post('id_pengajar'));
		$data['data_presensi'] = $this->penggajian->get_presensi($this->input->post('id_pengajar'));

		$this->load->view('templates/html');
		$this->load->view('templates/headers/header-penggajian');
		$this->load->view('penggajian/jumlah-gaji',$data);		
		$this->load->view('templates/footer');
		$this->load->view('templates/htmlclose');
	}
}