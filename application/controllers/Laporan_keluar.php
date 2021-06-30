<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_keluar extends MY_Controller {

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}

	public function pilih($id_anggaran)
	{
		$data['judul'] = 'Laporan Benih Keluar';
		$data['komoditi'] = $this->benih_keluar_model->get_laporan_keluar('', $id_anggaran, '', '');
		// die(var_dump($data['komoditi']));
		$this->load->view('admin/template/header');
		$this->load->view('admin/laporan_keluar/pilih', $data);
		$this->load->view('admin/template/footer');
	}

	public function print()
	{	
		$id_anggaran = $this->input->post('id_anggaran');
		$tgl_mulai = $this->input->post('tgl_mulai');
		$tgl_akhir = $this->input->post('tgl_akhir');
		$id_varietas = $this->input->post('id_varietas');
		$data['judul'] = 'Laporan Benih Keluar';
		$data['benih_keluar'] = $this->benih_keluar_model->get_laporan_keluar($id_varietas, $id_anggaran, $tgl_mulai, $tgl_akhir);

		// die(var_dump($data['benih_keluar']));

		$this->load->view('admin/laporan_keluar/print', $data);
	}

}
