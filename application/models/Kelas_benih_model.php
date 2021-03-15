<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_benih_model extends CI_Model {

	public function get_all($id = NULL)
	{
		if($id != NULL){
			$this->db->where('id_kelas_benih', $id);
			$query = $this->db->get('kelas_benih');
			return $query->row_array();
		}

		$query = $this->db->query('SELECT * FROM kelas_benih');
		return $query->result_array();
	}

	public function create(){

		$data = array(
			'nama_kelas' => $this->input->post('nama_kelas'),
			'ket' => $this->input->post('ket'),
		);

		return $this->db->insert('kelas_benih', $data);
	}

	public function edit($id){

		$data = array(
			'nama_kelas' => $this->input->post('nama_kelas'),
			'ket' => $this->input->post('ket'),
		);
		
		$this->db->where('id_kelas_benih', $id);
		return $this->db->update('kelas_benih', $data);
	}

	public function delete($id){
		$this->db->where('id_kelas_benih', $id);
		return $this->db->delete('kelas_benih');
	}
}
