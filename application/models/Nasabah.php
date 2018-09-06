<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nasabah extends CI_Model {

	public function get_file(){
		$query = $this->db->get('anggota');
		return $query->result_array(); //ngambil data yg udah array 
	}
	public function get_single($id)
	{
		$query = $this->db->query('SELECT * from anggota WHERE id_anggota='.$id);
		return $query->result();
	}

	public function get_all_nasabah(){
		$query = $this->db->get('anggota');
		return $query->result(); //ngambil data yg belum array (obyek)
	}	


	public function upload()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size']  = '2048';
		$config['remove_space']  = TRUE;
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('gambar')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function insert($upload, $enc_password)
	{
	
		$data = array(
     		'nama_anggota' => $this->input->post('nama'),
     		'alamat_anggota' => $this->input->post('alamat'),
     		'tempat_lahir_anggota' => $this->input->post('tempat'),
     		'tanggal_lahir_anggota' => $this->input->post('tanggal'),
            'jk_anggota' => $this->input->post('jk'),
            'username' => $this->input->post('user'),
     		'password' => $enc_password,
            'id_level' => $this->input->post('member'),
            'img_anggota' => $upload
 	      );
 // Insert user
 	      return $this->db->insert('anggota', $data);
	}

	public function update($upload, $id){
		if($upload['result']=='success'){
			$data = array('nama_anggota' => $this->input->post('nama'),
							'alamat_anggota' => $this->input->post('alamat'),
							'tempat_lahir_anggota' => $this->input->post('tempat'),
							'tanggal_lahir_anggota' => $this->input->post('tanggal'),
							'jk_anggota' => $this->input->post('jenis_kelamin'),
							'img_anggota' => $upload['file']['file_name']
			);
		} else {
			$data = array(
				'nama_anggota' => $this->input->post('nama'),
				'alamat_anggota' => $this->input->post('alamat'),
				'tempat_lahir_anggota' => $this->input->post('tempat'),
				'tanggal_lahir_anggota' => $this->input->post('tanggal'),
				'jk_anggota' => $this->input->post('jenis_kelamin')
			);
		} 
		$this->db->where('id_anggota',$id);
		$this->db->update('anggota', $data);
	}

	public function delete($id){
		$query = $this->db->query('DELETE from anggota WHERE id_anggota= '.$id);
	}
}