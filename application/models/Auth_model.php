<?php 
class Auth_model extends CI_Model {
	public function add_user(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password = password_hash($password, PASSWORD_DEFAULT);

		$data = array(
			'username' => $username,
			'password' => $password,
			'level' => 'user'
		);

		return $this->db->insert('users', $data);
	}

	public function edit_user($id){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password = password_hash($password, PASSWORD_DEFAULT);

		$data = array(
			'password' => $password,
		);

		$this->db->where('id_user', $id);
		return $this->db->update('users', $data);
	}

	public function login($username, $password){
		$query = $this->db->get_where('users', array('username' => $username))->row_array();

		if($query){
			if(password_verify($password, $query['password'])){
				$this->db->where('id_user', $query['id_user']);
				$this->db->update('users', array('last_login' => date('Y-m-d H:i:s') ));
				return $query;
			}else{
				return false;
			}
		}
	}

	public function get_users($id = NULL){

		if($id != NULL){
			$this->db->where('id_user', $id);
			$query = $this->db->get('users');
			return $query->row_array();
		}

		$query = $this->db->get('users');
		return $query->result_array();
	}

	public function delete($id){
		$this->db->where('id_user', $id);
    	return $this->db->delete('users');
	}

	public function add_pengunjung(){

		$data = array(
			'ip_address' => $_SERVER['REMOTE_ADDR'],
		);

		return $this->db->insert('pengunjung', $data);
	}
}