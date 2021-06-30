<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_masuk extends MY_Controller {

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}

	public function pilih($id_anggaran)
	{
		$data['judul'] = 'Laporan Benih Masuk';
		$data['komoditi'] = $this->benih_masuk_model->get_all('', $id_anggaran);

		$this->load->view('admin/template/header');
		$this->load->view('admin/laporan_masuk/pilih', $data);
		$this->load->view('admin/template/footer');
	}

}
