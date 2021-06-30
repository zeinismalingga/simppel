<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Benih_keluar_model extends CI_Model {

	public function get_all($id = NULL, $id_anggaran = NULL)
	{
		if($id != NULL){
			$query = $this->db->query("SELECT * FROM benih_keluar, benih, komoditi, varietas, kelas_benih WHERE benih_keluar.id_benih = benih.id_benih AND benih.id_komoditi = komoditi.id_komoditi AND benih.id_varietas = varietas.id_varietas AND benih.id_kelas_benih = kelas_benih.id_kelas_benih AND benih_keluar.id_benih_keluar = $id");
			return $query->row_array();
		}

		$query = $this->db->query("SELECT * FROM benih_keluar, benih, komoditi, varietas WHERE benih_keluar.id_benih = benih.id_benih AND benih.id_komoditi = komoditi.id_komoditi AND benih.id_varietas = varietas.id_varietas AND benih.id_anggaran = $id_anggaran");
		return $query->result_array();
	}

	public function create(){
		$data = array(
			'tgl' => $this->input->post('tgl'),
			'nama_pembeli' => $this->input->post('nama_pembeli'),
			'no_kwitansi' => $this->input->post('no_kwitansi'),
			'alamat_pembeli' => $this->input->post('alamat_pembeli'),
			'id_benih' => $this->input->post('id_benih'),
			'jenis_keluar' => $this->input->post('jenis_keluar'),
			'jumlah_keluar' => $this->input->post('jumlah_keluar'),
		);

		return $this->db->insert('benih_keluar', $data);
	}

	public function edit($id){
		$data = array(
			'tgl' => $this->input->post('tgl'),
			'nama_pembeli' => $this->input->post('nama_pembeli'),
			'no_kwitansi' => $this->input->post('no_kwitansi'),
			'alamat_pembeli' => $this->input->post('alamat_pembeli'),
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

	// laporan
	public function get_laporan_keluar($id_varietas = NULL, $id_anggaran = NULL, $tgl_mulai = NULL, $tgl_akhir = NULL)
	{
		if($id_varietas == NULL){
			$query = $this->db->query("SELECT * FROM benih_keluar, benih, komoditi, varietas WHERE benih_keluar.id_benih = benih.id_benih AND benih.id_komoditi = komoditi.id_komoditi AND benih.id_varietas = varietas.id_varietas AND benih.id_anggaran = $id_anggaran GROUP BY benih.id_varietas");	
		}else{
			$query = $this->db->query("SELECT * FROM benih_keluar, benih, komoditi, varietas WHERE benih_keluar.id_benih = benih.id_benih AND benih.id_komoditi = komoditi.id_komoditi AND benih.id_varietas = varietas.id_varietas AND benih.id_anggaran = $id_anggaran AND benih.id_varietas = $id_varietas AND benih_keluar.tgl >= '$tgl_mulai' AND benih_keluar.tgl <='$tgl_akhir'");
		}

		return $query->result_array();
	}


}
