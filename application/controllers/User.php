<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['benih'] = $this->benih_model->get_all();
		$this->load->view('user/template/header');
		$this->load->view('user/dashboard', $data);
		$this->load->view('user/template/footer');
	}
}
