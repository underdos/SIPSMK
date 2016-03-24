<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('template/header');
    $this->load->view('pages/login');
    $this->load->view('template/footer');
	}

	public function getLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('user_models');
		$this->user_models->getDataBy($username, $password);
	}
}
