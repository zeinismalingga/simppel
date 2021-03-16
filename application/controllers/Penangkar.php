<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penangkar extends MY_Controller {

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}

	public function list()
	{
		$data['judul'] = 'Data Penangkar';
		$data['penangkar'] = $this->penangkar_model->get_all();
		$this->load->view('admin/template/header');
		$this->load->view('admin/penangkar/list', $data);
		$this->load->view('admin/template/footer');
	}

	public function add()
	{
		$data['judul'] = 'Tambah Penangkar';

		$this->form_validation->set_rules('nama_penangkar', 'nama penangkar', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/template/header');
			$this->load->view('admin/penangkar/add', $data);
			$this->load->view('admin/template/footer');
		}else{
			$this->penangkar_model->create();
			redirect('penangkar/list');
		}
		
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Penangkar';
		$data['id'] = $id;
		$data['penangkar'] = $this->penangkar_model->get_all($id);

		$this->form_validation->set_rules('nama_penangkar', 'nama penangkar', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/template/header');
			$this->load->view('admin/penangkar/edit', $data);
			$this->load->view('admin/template/footer');
		}else{
			$this->penangkar_model->edit($id);
			redirect('penangkar/list');
		}
		
	}

	public function delete($id){
		$this->penangkar_model->delete($id);
		redirect('penangkar/list');
	}


}
