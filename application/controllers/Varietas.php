<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Varietas extends CI_Controller {

	public function list()
	{
		$data['judul'] = 'Data Varietas';
		$data['varietas'] = $this->varietas_model->get_all();
		$this->load->view('admin/template/header');
		$this->load->view('admin/varietas/list', $data);
		$this->load->view('admin/template/footer');
	}

	public function add()
	{
		$data['judul'] = 'Tambah Varietas';
		$data['komoditi'] = $this->komoditi_model->get_all();

		$this->form_validation->set_rules('nama_varietas', 'nama varietas', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/template/header');
			$this->load->view('admin/varietas/add', $data);
			$this->load->view('admin/template/footer');
		}else{
			$this->varietas_model->create();
			redirect('varietas/list');
		}
		
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Varietas';
		$data['id'] = $id;
		$data['varietas'] = $this->varietas_model->get_all($id);
		$data['komoditi'] = $this->komoditi_model->get_all();

		$this->form_validation->set_rules('nama_varietas', 'nama varietas', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/template/header');
			$this->load->view('admin/varietas/edit', $data);
			$this->load->view('admin/template/footer');
		}else{
			$this->varietas_model->edit($id);
			redirect('varietas/list');
		}
		
	}

	public function delete($id){
		$this->varietas_model->delete($id);
		redirect('varietas/list');
	}


}
