<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth_model', 'auth');
	}

	public function index(){
		$this->load->view('admin/html');
		$this->load->view('admin/index');
		$this->load->view('admin/htmlclose');
	}

	public function authenticateAdmin()
	{	
		$username = $this->input->post('username');
		$password = hash('sha512', $this->input->post('password'));

		$result = $this->auth->authenticate($username);
		if ($result) {
			if ($result['password'] == $password) {
				$this->session->set_userdata('admin', $username);

				redirect(base_url());
			} else {
				$this->session->set_flashdata('error', "Password tidak tepat!");

				redirect('admin/index');
			}

		} else {
			// TODO: Set Username Unknown Message
			$this->session->set_flashdata('error', "Username tidak terdaftar dalam Admin!");

			redirect('admin/index');
		}
	}

	public function signOut()
	{
		if ($this->session->userdata('admin'))
			$this->session->unset_userdata('admin');

		redirect('admin');
	}
}