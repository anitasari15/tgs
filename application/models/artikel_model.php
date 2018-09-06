<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

	public function get_file(){
		$query = $this->db->get('artikel');
		return $query->result_array(); //ngambil data yg udah array 
	}

	public function get_artikels($limit = FALSE, $offset = FALSE){

		if ( $limit ) {
 			$this->db->limit($limit, $offset);
 		}

		$query = $this->db->get('artikel');
		return $query->result();
	}

	public function get_total(){
		return $this->db->count_all('artikel');
	}
	

	public function get_single($id)
	{
		$query = $this->db->query('select * from artikel where id_artikel='.$id);
		return $query->result();

		$this->db->select('*');
		$this->db->from('artikel');
		// $this->db->join('kategori', 'artikel.id_kategori = kategori.id_kategori');
		// $this->db->where('artikel.id_artikel='.$id);
		return $this->db->get()->result();
		
	}
	//model form upload

	public function upload()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size']  = '2048';
		$config['remove_space']  = TRUE;
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('input_gambar')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	//model untuk insert data

	public function insert($upload)
	{
		$data = array(
			'id_artikel' => '',
			'judul' => $this->input->post('judul'),
			'konten' => $this->input->post('konten'),
			// 'kategori' => $this->input->post('kategori'),
			// 'penulis' => $this->input->post('penulis'),
			// 'sumber' => $this->input->post('sumber'),
			'tanggal_post' => $this->input->post('tanggal'),
			'img' => $upload['file']['file_name']
			// 'id_kategori' => $this->input->post('id_kategori')
		);

		$this->db->insert('artikel', $data);
	}

	//model untuk delete

	public function hapus($id){
		$query = $this->db->query('DELETE from artikel WHERE id_artikel= '.$id);
	}

	public function update($upload, $id){
		if($upload['result']=='success'){
			$data = array('judul' => $this->input->post('judul'),
							'konten' => $this->input->post('konten'),
							'img' => $upload['file']['file_name']
			);
		} else {
			$data = array(
				'judul' => $this->input->post('judul'),
				'konten' => $this->input->post('konten'),
			);
		} 
		$this->db->where('id_artikel',$id);
		$this->db->update('artikel', $data);
	}

}

/* End of file artikel.php */
/* Location: ./application/models/blog.php */
