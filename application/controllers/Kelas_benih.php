<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_benih extends MY_Controller {

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}

	public function list()
	{
		$data['judul'] = 'Data Kelas Benih';
		$data['kelas_benih'] = $this->kelas_benih_model->get_all();
		$this->load->view('admin/template/header');
		$this->load->view('admin/kelas_benih/list', $data);
		$this->load->view('admin/template/footer');
	}

	public function add()
	{
		$data['judul'] = 'Tambah Kelas Benih';

		$this->form_validation->set_rules('nama_kelas', 'nama kelas benih', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/template/header');
			$this->load->view('admin/kelas_benih/add', $data);
			$this->load->view('admin/template/footer');
		}else{
			$this->kelas_benih_model->create();
			redirect('kelas_benih/list');
		}
		
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Kelas Benih';
		$data['id'] = $id;
		$data['kelas_benih'] = $this->kelas_benih_model->get_all($id);

		$this->form_validation->set_rules('nama_kelas', 'nama kelas benih', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/template/header');
			$this->load->view('admin/kelas_benih/edit', $data);
			$this->load->view('admin/template/footer');
		}else{
			$this->kelas_benih_model->edit($id);
			redirect('kelas_benih/list');
		}
		
	}

	public function delete($id){
		$this->kelas_benih_model->delete($id);
		redirect('kelas_benih/list');
	}


}
