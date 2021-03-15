<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penangkar_model extends CI_Model {

	public function get_all($id = NULL)
	{
		if($id != NULL){
			$this->db->where('id_penangkar', $id);
			$query = $this->db->get('penangkar');
			return $query->row_array();
		}

		$query = $this->db->query('SELECT * FROM penangkar');
		return $query->result_array();
	}

	public function create(){
		$data = array(
			'nama_penangkar' => $this->input->post('nama_penangkar'),
			'no_hp' => $this->input->post('no_hp'),
			'alamat' => $this->input->post('alamat'),
		);

		return $this->db->insert('penangkar', $data);
	}

	public function edit($id){
		$data = array(
			'nama_penangkar' => $this->input->post('nama_penangkar'),
			'no_hp' => $this->input->post('no_hp'),
			'alamat' => $this->input->post('alamat'),
		);
		
		$this->db->where('id_penangkar', $id);
		return $this->db->update('penangkar', $data);
	}

	public function delete($id){
		$this->db->where('id_penangkar', $id);
		return $this->db->delete('penangkar');
	}

}
