<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Benih_masuk_model extends CI_Model {

	public function get_all($id = NULL)
	{
		if($id != NULL){
			$query = $this->db->query("SELECT * FROM benih_masuk, benih, komoditi, penangkar, varietas, kelas_benih WHERE benih_masuk.id_benih = benih.id_benih AND benih.id_komoditi = komoditi.id_komoditi AND benih_masuk.id_penangkar = penangkar.id_penangkar AND benih.id_varietas = varietas.id_varietas AND benih.id_kelas_benih = kelas_benih.id_kelas_benih AND benih_masuk.id_benih_masuk = $id");
			return $query->row_array();
		}

		$query = $this->db->query('SELECT * FROM benih_masuk, benih, komoditi, penangkar, varietas WHERE benih_masuk.id_benih = benih.id_benih AND benih.id_komoditi = komoditi.id_komoditi AND benih_masuk.id_penangkar = penangkar.id_penangkar AND benih.id_varietas = varietas.id_varietas');
		return $query->result_array();
	}

	public function create(){
		$data = array(
			'tgl' => $this->input->post('tgl'),
			'id_benih' => $this->input->post('id_benih'),
			'id_penangkar' => $this->input->post('id_penangkar'),
			'jumlah_masuk' => $this->input->post('jumlah_masuk'),
		);

		return $this->db->insert('benih_masuk', $data);
	}

	public function edit($id){
		$data = array(
			'tgl' => $this->input->post('tgl'),
			'id_benih' => $this->input->post('id_benih'),
			'id_penangkar' => $this->input->post('id_penangkar'),
			'jumlah_masuk' => $this->input->post('jumlah_masuk'),
		);
		
		$this->db->where('id_benih_masuk', $id);
		return $this->db->update('benih_masuk', $data);
	}

	public function delete($id){
		$this->db->where('id_benih_masuk', $id);
		return $this->db->delete('benih_masuk');
	}

	public function get_tgl($tgl_mulai, $tgl_akhir)
	{
		$query = $this->db->query("SELECT * FROM benih_masuk, benih, komoditi, penangkar, varietas WHERE benih_masuk.id_benih = benih.id_benih AND benih.id_komoditi = komoditi.id_komoditi AND benih_masuk.id_penangkar = penangkar.id_penangkar AND benih.id_varietas = varietas.id_varietas AND benih_masuk.tgl >= '$tgl_mulai' AND benih_masuk.tgl <= '$tgl_akhir'");
		return $query->result_array();
	}

	

}
