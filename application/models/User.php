<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function get_file(){
		$query = $this->db->get('anggota');
		return $query->result();
	}
	public function get_anggota_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM anggota WHERE id_anggota=".$kode);
		return $hsl->result();
	}

	
	public function get_all_anggota( $limit = FALSE, $offset = FALSE )
 	{
 	// Jika variable $limit ada pada parameter maka kita limit query-nya
 		if ( $limit ) { 
 			$this->db->limit($limit, $offset);
 		}
 			// Urutkan berdasar tanggal
 		$this->db->order_by('anggota.id_anggota', 'DESC');
 		// Inner Join dengan table Categories
 		// $this->db->join('categories', 'categories.id_cat = blog.id');

	 	$query = $this->db->get('anggota');	
 		// Return dalam bentuk object
 		return $query->result();
 	}

 
		public function get_total()
 	{
 		// Dapatkan jumlah total artikel
 		return $this->db->count_all("anggota");
 	}


}