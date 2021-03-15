<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Varietas_model extends CI_Model {

	public function get_all($id = NULL)
	{
		if($id != NULL){
			$query = $this->db->query("SELECT * FROM varietas, komoditi WHERE varietas.id_komoditi = komoditi.id_komoditi AND varietas.id_varietas = $id");
			return $query->row_array();
		}

		$query = $this->db->query('SELECT * FROM varietas, komoditi WHERE varietas.id_komoditi = komoditi.id_komoditi');
		return $query->result_array();
	}

	public function create(){

		$data = array(
			'nama_varietas' => $this->input->post('nama_varietas'),
			'id_komoditi' => $this->input->post('id_komoditi'),
		);

		return $this->db->insert('varietas', $data);
	}

	public function edit($id){

		$data = array(
			'nama_varietas' => $this->input->post('nama_varietas'),
			'id_komoditi' => $this->input->post('id_komoditi'),
		);
		
		$this->db->where('id_varietas', $id);
		return $this->db->update('varietas', $data);
	}

	public function delete($id){
		$this->db->where('id_varietas', $id);
		return $this->db->delete('varietas');
	}
}
