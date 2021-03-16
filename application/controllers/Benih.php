<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Benih extends MY_Controller {

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}

	public function list()
	{
		$data['judul'] = 'Data Benih';
		$data['benih'] = $this->benih_model->get_all();
		$this->load->view('admin/template/header');
		$this->load->view('admin/benih/list', $data);
		$this->load->view('admin/template/footer');
	}

	public function add()
	{
		$data['judul'] = 'Tambah Benih';
		$data['komoditi'] = $this->komoditi_model->get_all();
		$data['varietas'] = $this->varietas_model->get_all();
		$data['kelas_benih'] = $this->kelas_benih_model->get_all();

		$this->form_validation->set_rules('id_komoditi', 'komoditi', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/template/header');
			$this->load->view('admin/benih/add', $data);
			$this->load->view('admin/template/footer');
		}else{
			if($_FILES['file_name']['name'] != ""){
				$config['upload_path'] = "./assets/img";
				$config['allowed_types'] = "jpg|jpeg|png";
				$config['max_size'] = "50048";
				$config['overwrite'] = TRUE;
				$new_name = 'file_'.time();
				$config['file_name'] = $new_name;


				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if(!$this->upload->do_upload('file_name')){
					$data['error'] = $this->upload->display_errors();

					$this->load->view('admin/template/header');
					$this->load->view('admin/benih/add', $data);
					$this->load->view('admin/template/footer');	

				}else{
					$file = $this->upload->data();	

					$this->benih_model->create($file['file_name']);

					redirect('benih/list');
				}
			}else{

				$this->benih_model->create();

				redirect('benih/list');
			}
		}
		
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Benih';
		$data['id'] = $id;
		$data['benih'] = $this->benih_model->get_all($id);
		$data['komoditi'] = $this->komoditi_model->get_all();
		$data['varietas'] = $this->varietas_model->get_all();
		$data['kelas_benih'] = $this->kelas_benih_model->get_all();

		$this->form_validation->set_rules('id_komoditi', 'komoditi', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/template/header');
			$this->load->view('admin/benih/edit', $data);
			$this->load->view('admin/template/footer');
		}else{
			if($_FILES['file_name']['name'] != ""){
				$config['upload_path'] = "./assets/img";
				$config['allowed_types'] = "jpg|jpeg|png";
				$config['max_size'] = "50048";
				$config['overwrite'] = TRUE;
				$new_name = 'file_'.time();
				$config['file_name'] = $new_name;


				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if(!$this->upload->do_upload('file_name')){
					$data['error'] = $this->upload->display_errors();

					$this->load->view('admin/template/header');
					$this->load->view('admin/benih/edit', $data);
					$this->load->view('admin/template/footer');	

				}else{
					$file = $this->upload->data();	

					$this->benih_model->edit($file['file_name']);

					redirect('benih/list');
				}
			}else{
				$this->benih_model->edit('', $id);
				redirect('benih/list');
			}
		}
		
	}

	public function delete($id){
		$this->benih_model->delete($id);
		redirect('benih/list');
	}

	public function get_benih()
	{
		$id = $this->input->post('id');
		$data =  $this->benih_model->get_all($id);
		echo json_encode($data);
	}


}
