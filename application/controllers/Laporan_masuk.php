<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_masuk extends MY_Controller {

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}

	public function list()
	{
		$data['judul'] = 'Laporan Benih Masuk';
		$data['benih_masuk'] = $this->benih_masuk_model->get_all();
		$this->load->view('admin/template/header');
		$this->load->view('admin/laporan_masuk/list', $data);
		$this->load->view('admin/template/footer');
	}

}
