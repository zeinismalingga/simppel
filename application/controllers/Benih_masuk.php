<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Benih_masuk extends MY_Controller {

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}

	public function list($id_anggaran)
	{
		$data['judul'] = 'Data Benih Masuk';
		$data['benih_masuk'] = $this->benih_masuk_model->get_all('', $id_anggaran);
		// die(var_dump($data['benih_masuk']));
		$this->load->view('admin/template/header');
		$this->load->view('admin/benih_masuk/list', $data);
		$this->load->view('admin/template/footer');
	}

	public function add()
	{
		$data['judul'] = 'Tambah Benih Masuk';
		$data['benih'] = $this->benih_model->get_all();
		$data['penangkar'] = $this->penangkar_model->get_all();

		$this->form_validation->set_rules('tgl', 'tanggal', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/template/header');
			$this->load->view('admin/benih_masuk/add', $data);
			$this->load->view('admin/template/footer');
		}else{
			$id_benih = $this->input->post('id_benih');
			$jumlah_masuk = $this->input->post('jumlah_masuk');
			$benih = $this->benih_model->get_all($id_benih);

			$stok = $benih['stok_benih'] + $jumlah_masuk;
			
			$this->benih_masuk_model->create();
			$this->benih_model->update_stok($id_benih, $stok);
			redirect('benih_masuk/list');
		}
		
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Benih Masuk';
		$data['id'] = $id;
		$data['benih'] = $this->benih_model->get_all();
		$data['penangkar'] = $this->penangkar_model->get_all();
		$data['benih_masuk'] = $this->benih_masuk_model->get_all($id);

		$this->form_validation->set_rules('tgl', 'tanggal', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/template/header');
			$this->load->view('admin/benih_masuk/edit', $data);
			$this->load->view('admin/template/footer');
		}else{
			$jumlah_masuk = $this->input->post('jumlah_masuk');
			$benih_masuk = $this->benih_masuk_model->get_all($id);
			$id_benih = $benih_masuk['id_benih'];

			$stok = $benih_masuk['stok_benih'] - $benih_masuk['jumlah_masuk'];
			$this->benih_model->update_stok($id_benih, $stok);

			$stok = $stok + $jumlah_masuk;			
			$this->benih_model->update_stok($id_benih, $stok);

			$this->benih_masuk_model->edit($id);
			redirect('benih_masuk/list');
		}
		
	}

	public function delete($id){
		$benih_masuk = $this->benih_masuk_model->get_all($id);
		$id_benih = $benih_masuk['id_benih'];

		$stok = $benih_masuk['stok_benih'] - $benih_masuk['jumlah_masuk'];

		$this->benih_model->update_stok($id_benih, $stok);
		$this->benih_masuk_model->delete($id);
		redirect('benih_masuk/list');
	}

	public function get_benih()
	{
		$tgl_mulai = $this->input->post('tgl_mulai');
		$tgl_akhir = $this->input->post('tgl_akhir');
		$data =  $this->benih_masuk_model->get_tgl($tgl_mulai, $tgl_akhir);
		echo json_encode($data);
	}


}
