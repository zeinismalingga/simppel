<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penangkar_model extends CI_Model {

	public function get_all($id = NULL)
	{
		if($id != NULL){
			$query = $this->db->query("SELECT * FROM penangkar, kota, komoditi WHERE penangkar.id_kota = kota.id_kota AND penangkar.id_komoditi = komoditi.id_komoditi AND penangkar.id_penangkar = $id");
			return $query->row_array();
		}

		$query = $this->db->query('SELECT * FROM penangkar, kota, komoditi WHERE penangkar.id_kota = kota.id_kota AND penangkar.id_komoditi = komoditi.id_komoditi');
		return $query->result_array();
	}

	public function create(){
		$data = array(
			'nama_produsen' => $this->input->post('nama_produsen'),
			'nama_penangkar' => $this->input->post('nama_penangkar'),
			'no_hp' => $this->input->post('no_hp'),
			'alamat' => $this->input->post('alamat'),
			'id_kota' => $this->input->post('id_kota'),
			'id_komoditi' => $this->input->post('id_komoditi'),
			'luas_lahan' => $this->input->post('luas_lahan'),
			'kapasitas_ha' => $this->input->post('kapasitas_ha'),
			'kapasitas_ton' => $this->input->post('kapasitas_ton'),
			'no_izin' => $this->input->post('no_izin'),
			'tgl' => $this->input->post('tgl'),
		);

		return $this->db->insert('penangkar', $data);
	}

	public function edit($id){
		$data = array(
			'nama_produsen' => $this->input->post('nama_produsen'),
			'nama_penangkar' => $this->input->post('nama_penangkar'),
			'no_hp' => $this->input->post('no_hp'),
			'alamat' => $this->input->post('alamat'),
			'id_kota' => $this->input->post('id_kota'),
			'id_komoditi' => $this->input->post('id_komoditi'),
			'luas_lahan' => $this->input->post('luas_lahan'),
			'kapasitas_ha' => $this->input->post('kapasitas_ha'),
			'kapasitas_ton' => $this->input->post('kapasitas_ton'),
			'no_izin' => $this->input->post('no_izin'),
			'tgl' => $this->input->post('tgl'),
		);
		
		$this->db->where('id_penangkar', $id);
		return $this->db->update('penangkar', $data);
	}

	public function delete($id){
		$this->db->where('id_penangkar', $id);
		return $this->db->delete('penangkar');
	}

	public function get_kota()
	{
		$query = $this->db->query('SELECT * FROM kota');
		return $query->result_array();
	}

	public function get_by_kota($id)
	{
		$query = $this->db->query("SELECT * FROM penangkar, kota, komoditi WHERE penangkar.id_kota = kota.id_kota AND penangkar.id_komoditi = komoditi.id_komoditi AND kota.id_kota = $id");
		return $query->result_array();
	}

}
