<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function login()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/auth/login');
		}else{

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->auth_model->login($username, $password);

			if($user){
				$user_data = array(
					'username' => $user['username'],
					'id_user' => $user['id_user'],
					'level' => $user['level'],
					"logged_in" => 1
				);

				$this->session->set_userdata($user_data);

				redirect('dashboard');
			}else{
				// set message
				$this->session->set_flashdata('error', 'Username or Password is incorrect');
				$this->load->view('admin/auth/login');
			}
		}
		
	}

	public function add()
	{
		$this->isAdmin();

		$data['judul'] = 'Tambah User';

		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/template/header');
			$this->load->view('admin/auth/add', $data);	
			$this->load->view('admin/template/footer');	
		}else{
			$this->auth_model->add_user();

			redirect('auth/list_user');
		}
		
	}

	public function edit($id)
	{
		$this->isAdmin();

		$data['users'] = $this->auth_model->get_users($id);
		$data['judul'] = 'Edit User';

		$this->form_validation->set_rules('password', 'password', 'required');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/template/header');
			$this->load->view('admin/auth/edit', $data);	
			$this->load->view('admin/template/footer');	
		}else{
			$this->auth_model->edit_user($id);

			redirect('auth/list_user');
		}
		
	}

	public function logout(){
		$this->session->sess_destroy();

		redirect('user');
	}

	public function delete($id){
		$this->cekLogin();
		$this->isAdmin();

		$this->auth_model->delete($id);
		redirect('auth/list_user');
	}

	public function list_user(){
		$this->cekLogin();
		$this->isAdmin();

		$data['judul'] = 'Data User';
		$data['users'] = $this->auth_model->get_users();

		$this->load->view('admin/template/header');
		$this->load->view('admin/auth/list', $data);	
		$this->load->view('admin/template/footer');
	}
}
