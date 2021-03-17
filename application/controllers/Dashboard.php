<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}

	public function index()
	{
		$data['benih_tp'] = $this->benih_model->get_jenis_komoditi('1');
		$data['benih_hortik'] = $this->benih_model->get_jenis_komoditi('2');
		$this->load->view('admin/template/header');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/template/footer');
	}
}
