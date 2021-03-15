<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['benih'] = $this->benih_model->get_all();
		$this->load->view('admin/template/header');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/template/footer');
	}
}
