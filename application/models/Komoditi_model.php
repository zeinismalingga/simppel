<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komoditi_model extends CI_Model {

	public function get_all($id = NULL)
	{
		if($id != NULL){
			$this->db->where('id_komoditi', $id);
			$query = $this->db->get('komoditi');
			return $query->row_array();
		}

		$query = $this->db->query('SELECT * FROM komoditi');
		return $query->result_array();
	}

	public function create(){

		$data = array(
			'nama_komoditi' => $this->input->post('nama_komoditi'),
			'jenis' => $this->input->post('jenis'),
		);

		return $this->db->insert('komoditi', $data);
	}

	public function edit($id){

		$data = array(
			'nama_komoditi' => $this->input->post('nama_komoditi'),
			'jenis' => $this->input->post('jenis'),
		);
		
		$this->db->where('id_komoditi', $id);
		return $this->db->update('komoditi', $data);
	}

	public function delete($id){
		$this->db->where('id_komoditi', $id);
		return $this->db->delete('komoditi');
	}

}
