<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Benih_keluar extends MY_Controller {

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}

	public function list($id_anggaran)
	{
		$data['judul'] = 'Data Benih Keluar';
		$data['benih_keluar'] = $this->benih_keluar_model->get_all('', $id_anggaran);
		$this->load->view('admin/template/header');
		$this->load->view('admin/benih_keluar/list', $data);
		$this->load->view('admin/template/footer');
	}

	public function add()
	{
		$data['judul'] = 'Tambah Benih Keluar';
		$data['benih'] = $this->benih_model->get_all();

		$this->form_validation->set_rules('tgl', 'tanggal', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/template/header');
			$this->load->view('admin/benih_keluar/add', $data);
			$this->load->view('admin/template/footer');
		}else{
			$id_benih = $this->input->post('id_benih');
			$jumlah_keluar = $this->input->post('jumlah_keluar');
			$benih = $this->benih_model->get_all($id_benih);

			$stok = $benih['stok_benih'] - $jumlah_keluar;
			
			$this->benih_keluar_model->create();
			$this->benih_model->update_stok($id_benih, $stok);
			redirect('benih_keluar/list');
		}
		
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Benih Keluar';
		$data['id'] = $id;
		$data['benih'] = $this->benih_model->get_all();
		$data['benih_keluar'] = $this->benih_keluar_model->get_all($id);

		// die(print_r($data['benih_keluar']));

		$this->form_validation->set_rules('tgl', 'tanggal', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/template/header');
			$this->load->view('admin/benih_keluar/edit', $data);
			$this->load->view('admin/template/footer');
		}else{
			$jumlah_keluar = $this->input->post('jumlah_keluar');
			$benih_keluar = $this->benih_keluar_model->get_all($id);
			$id_benih = $benih_keluar['id_benih'];

			$stok = $benih_keluar['stok_benih'] - $benih_keluar['jumlah_keluar'];
			$this->benih_model->update_stok($id_benih, $stok);

			$stok = $stok - $jumlah_keluar;			
			$this->benih_model->update_stok($id_benih, $stok);

			$this->benih_keluar_model->edit($id);
			redirect('benih_keluar/list');
		}
		
	}

	public function delete($id){
		$benih_keluar = $this->benih_keluar_model->get_all($id);
		$id_benih = $benih_keluar['id_benih'];

		$stok = $benih_keluar['stok_benih'] + $benih_keluar['jumlah_keluar'];

		$this->benih_model->update_stok($id_benih, $stok);
		$this->benih_keluar_model->delete($id);
		redirect('benih_keluar/list');
	}


}
