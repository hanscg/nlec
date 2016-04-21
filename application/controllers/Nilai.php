<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('siswa_model', 'siswa');
		$this->load->model('pengajar_model', 'pengajar');
		$this->load->model('kelas_model', 'kelas');
	}

	public function index(){
		$this->load->view('templates/html');
		
		$this->load->view('nilai/index');
		$this->load->view('templates/htmlclose');
	}
}