<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Benih_keluar_model extends CI_Model {

	public function get_all($id = NULL)
	{
		if($id != NULL){
			$query = $this->db->query("SELECT * FROM benih_keluar, benih, komoditi, varietas, kelas_benih WHERE benih_keluar.id_benih = benih.id_benih AND benih.id_komoditi = komoditi.id_komoditi AND benih.id_varietas = varietas.id_varietas AND benih.id_kelas_benih = kelas_benih.id_kelas_benih AND benih_keluar.id_benih_keluar = $id");
			return $query->row_array();
		}

		$query = $this->db->query('SELECT * FROM benih_keluar, benih, komoditi, varietas WHERE benih_keluar.id_benih = benih.id_benih AND benih.id_komoditi = komoditi.id_komoditi AND benih.id_varietas = varietas.id_varietas');
		return $query->result_array();
	}

	public function create(){
		$data = array(
			'tgl' => $this->input->post('tgl'),
			'id_benih' => $this->input->post('id_benih'),
			'jenis_keluar' => $this->input->post('jenis_keluar'),
			'jumlah_keluar' => $this->input->post('jumlah_keluar'),
		);

		return $this->db->insert('benih_keluar', $data);
	}

	public function edit($id){
		$data = array(
			'tgl' => $this->input->post('tgl'),
			'id_benih' => $this->input->post('id_benih'),
			'jenis_keluar' => $this->input->post('jenis_keluar'),
			'jumlah_keluar' => $this->input->post('jumlah_keluar'),
		);
		
		$this->db->where('id_benih_keluar', $id);
		return $this->db->update('benih_keluar', $data);
	}

	public function delete($id){
		$this->db->where('id_benih_keluar', $id);
		return $this->db->delete('benih_keluar');
	}

	

}
