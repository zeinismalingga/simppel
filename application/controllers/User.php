<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['benih_tp'] = $this->benih_model->get_jenis_komoditi('1');
		$data['benih_hortik'] = $this->benih_model->get_jenis_komoditi('2');

		$data['penangkar_kukar'] = $this->penangkar_model->get_by_kota('2');
		$data['penangkar_ppu'] = $this->penangkar_model->get_by_kota('10');
		$data['penangkar_kutim'] = $this->penangkar_model->get_by_kota('7');
		$data['penangkar_samarinda'] = $this->penangkar_model->get_by_kota('3');
		$data['penangkar_paser'] = $this->penangkar_model->get_by_kota('9');
		$data['penangkar_kubar'] = $this->penangkar_model->get_by_kota('4');
		$data['penangkar_berau'] = $this->penangkar_model->get_by_kota('8');
		$data['penangkar_balikpapan'] = $this->penangkar_model->get_by_kota('1');

		$this->load->view('user/template/header');
		$this->load->view('user/dashboard', $data);
		$this->load->view('user/template/footer');
	}
}
