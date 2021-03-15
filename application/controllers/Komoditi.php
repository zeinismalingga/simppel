<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komoditi extends CI_Controller {

	public function list()
	{
		$data['judul'] = 'Data Komoditi';
		$data['komoditi'] = $this->komoditi_model->get_all();
		$this->load->view('admin/template/header');
		$this->load->view('admin/komoditi/list', $data);
		$this->load->view('admin/template/footer');
	}

	public function add()
	{
		$data['judul'] = 'Tambah Komoditi';

		$this->form_validation->set_rules('nama_komoditi', 'nama komoditi', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/template/header');
			$this->load->view('admin/komoditi/add', $data);
			$this->load->view('admin/template/footer');
		}else{
			$this->komoditi_model->create();
			redirect('komoditi/list');
		}
		
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Komoditi';
		$data['id'] = $id;
		$data['komoditi'] = $this->komoditi_model->get_all($id);

		$this->form_validation->set_rules('nama_komoditi', 'nama komoditi', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/template/header');
			$this->load->view('admin/komoditi/edit', $data);
			$this->load->view('admin/template/footer');
		}else{
			$this->komoditi_model->edit($id);
			redirect('komoditi/list');
		}
		
	}

	public function delete($id){
		$this->komoditi_model->delete($id);
		redirect('komoditi/list');
	}


}
