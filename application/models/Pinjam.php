<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Model {

	public function get_pinjaman(){
		$query = $this->db->get('pinjaman');
		return $query->result_array();
	}
	public function get_single_pinjaman($id)
	{
		$this->db->select('*');
		$this->db->from('pinjaman');
		$this->db->join('anggota', 'anggota.id_anggota = pinjaman.id_anggota');
		$this->db->where('pinjaman.id_anggota', $id);
		return $this->db->get()->result();
	}

	public function get_single_angsuran($id)
	{
		$this->db->select('*');
		$this->db->from('angsuran');
		$this->db->join('anggota', 'anggota.id_anggota = angsuran.id_anggota');
		$this->db->where('angsuran.id_anggota', $id);
		return $this->db->get()->result();
	}

	public function get_all_pinjam(){
		$query = $this->db->get('pinjaman');
		return $this->db->get()->result();
	}

	public function get_all_pinjaman(){
		$query = $this->db->get('pinjaman');
		return $query->result();
	}


	public function insert()
	{
		$data = array(
			'id_pinjaman' => '',
			'besar_pinjaman' => $this->input->post('besar_pinjaman'),
			'sisa_angsuran' => $this->input->post('besar_pinjaman'),
			'tanggal_pinjaman' => $this->input->post('tanggal_pinjaman'),
			'id_anggota' => $this->input->post('id_anggota'),
			'tangga_pelunasan' => $this->input->post('tangga_pelunasan')
		);

		$this->db->insert('pinjaman', $data);
	}


	public function delete($id){
		$query = $this->db->query('DELETE from pinjaman WHERE id_pinjaman= '.$id);
	}
}