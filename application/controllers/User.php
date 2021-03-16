<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['benih_tp'] = $this->benih_model->get_jenis_komoditi('1');
		$data['benih_hortik'] = $this->benih_model->get_jenis_komoditi('2');
		$this->load->view('user/template/header');
		$this->load->view('user/dashboard', $data);
		$this->load->view('user/template/footer');
	}
}
