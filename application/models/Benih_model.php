<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Benih_model extends CI_Model {

	public function get_all($id = NULL)
	{
		if($id != NULL){
			$query = $this->db->query("SELECT * FROM benih, kelas_benih, komoditi, varietas WHERE benih.id_kelas_benih = kelas_benih.id_kelas_benih AND benih.id_komoditi = komoditi.id_komoditi AND benih.id_varietas = varietas.id_varietas AND benih.id_benih = $id");
			return $query->row_array();
		}

		$query = $this->db->query('SELECT * FROM benih, kelas_benih, komoditi, varietas WHERE benih.id_kelas_benih = kelas_benih.id_kelas_benih AND benih.id_komoditi = komoditi.id_komoditi AND benih.id_varietas = varietas.id_varietas');
		return $query->result_array();
	}

	public function get_jenis_komoditi($id){
		if($id == '1'){
			$query = $this->db->query('SELECT * FROM benih, kelas_benih, komoditi, varietas WHERE benih.id_kelas_benih = kelas_benih.id_kelas_benih AND benih.id_komoditi = komoditi.id_komoditi AND benih.id_varietas = varietas.id_varietas AND komoditi.jenis = 1');	
		}else{
			$query = $this->db->query('SELECT * FROM benih, kelas_benih, komoditi, varietas WHERE benih.id_kelas_benih = kelas_benih.id_kelas_benih AND benih.id_komoditi = komoditi.id_komoditi AND benih.id_varietas = varietas.id_varietas AND komoditi.jenis = 2');
		}
		
		return $query->result_array();
	}

	public function create($file_name = NULL){

		if($_FILES['file_name']['name'] != ""){
			$data = array(
				'id_komoditi' => $this->input->post('id_komoditi'),
				'id_varietas' => $this->input->post('id_varietas'),
				'id_kelas_benih' => $this->input->post('id_kelas_benih'),
				'stok_benih' => $this->input->post('stok_benih'),
				'satuan' => $this->input->post('satuan'),
				'harga' => $this->input->post('harga'),
				'deskripsi' => $this->input->post('deskripsi'),
				'id_anggaran' => $this->input->post('id_anggaran'),
				'file_name' => $file_name
			);	
		}else{
			$data = array(
				'id_komoditi' => $this->input->post('id_komoditi'),
				'id_varietas' => $this->input->post('id_varietas'),
				'id_kelas_benih' => $this->input->post('id_kelas_benih'),
				'stok_benih' => $this->input->post('stok_benih'),
				'satuan' => $this->input->post('satuan'),
				'harga' => $this->input->post('harga'),
				'deskripsi' => $this->input->post('deskripsi'),
				'id_anggaran' => $this->input->post('id_anggaran'),
				'file_name' => 'box.jpg'
			);
		}

		return $this->db->insert('benih', $data);
	}

	public function edit($file_name = NULL, $id){

		if($_FILES['file_name']['name'] != ""){
			$data = array(
				'id_komoditi' => $this->input->post('id_komoditi'),
				'id_varietas' => $this->input->post('id_varietas'),
				'id_kelas_benih' => $this->input->post('id_kelas_benih'),
				'stok_benih' => $this->input->post('stok_benih'),
				'satuan' => $this->input->post('satuan'),
				'harga' => $this->input->post('harga'),
				'deskripsi' => $this->input->post('deskripsi'),
				'id_anggaran' => $this->input->post('id_anggaran'),
				'file_name' => $file_name
			);	
		}else{
			$data = array(
				'id_komoditi' => $this->input->post('id_komoditi'),
				'id_varietas' => $this->input->post('id_varietas'),
				'id_kelas_benih' => $this->input->post('id_kelas_benih'),
				'stok_benih' => $this->input->post('stok_benih'),
				'satuan' => $this->input->post('satuan'),
				'harga' => $this->input->post('harga'),
				'deskripsi' => $this->input->post('deskripsi'),
				'id_anggaran' => $this->input->post('id_anggaran'),
			);
		}

		$this->db->where('id_benih', $id);
		return $this->db->update('benih', $data);
	}

	public function delete($id){
		$this->db->where('id_benih', $id);
		return $this->db->delete('benih');
	}

	public function update_stok($id, $stok){
		$data = array(
			'stok_benih' => $stok,
		);
		
		$this->db->where('id_benih', $id);
		return $this->db->update('benih', $data);
	}
}
