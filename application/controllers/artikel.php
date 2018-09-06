<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('artikel_model');
		// if($this->session->userdata('level') == null){
		// 	$this->session->set_flashdata('include_login','Please Login');
		// 	redirect('user','refresh');
		// }
	}

	public function index()
	{
		// Dapatkan data dari model Blog dengan pagination
 		// Jumlah artikel per halaman
 		$limit_per_page = 3;
 		// URI segment untuk mendeteksi "halaman ke berapa" dari URL
		 $start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

 		// Dapatkan jumlah data
		 $total_records = $this->artikel_model->get_total();
		if ($total_records > 0) {
 			// Dapatkan data pada halaman yg dituju
 			$data['artikel'] = $this->artikel_model->get_artikels($limit_per_page, $start_index);

		 // Konfigurasi pagination
 		$config['base_url'] = base_url() . 'artikel/index';
 		$config['total_rows'] = $total_records;
 		$config['per_page'] = $limit_per_page;
 		$config['uri_segment'] = 3;

		 $this->pagination->initialize($config);

		 // Buat link pagination
 		$data['links'] = $this->pagination->create_links();
		}
		
		// Passing data ke view
		$this->load->view('user/tampilartikel', $data);
		
	}

	public function detail($id)
	{
		// $this->load->model('artikel');
		$data['detail'] = $this->artikel_model->get_single($id);
		
		// Passing data ke view
		$this->load->view('user/artikeldetail', $data);
		
	}

	//gungsi untuk insert database
	public function tambah()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul', 'judul', 'required', array('required' => 'Isi %s , '));
		$this->form_validation->set_rules('konten', 'konten', 'required', array('required' => 'Isi %s , '));
		// $this->form_validation->set_rules('kategori', 'kategori', 'required', array('required' => 'Isi %s , '));
		// $this->form_validation->set_rules('penulis', 'penulis', 'required', array('required' => 'Isi %s , '));
		// $this->form_validation->set_rules('sumber', 'sumber', 'required', array('required' => 'Isi %s , '));
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required', array('required' => 'Isi %s , '));

		if ($this->form_validation->run()==FALSE){
			
		// Passing data ke view
		$this->load->view('tambahartikel');
		
		}
		else
		{
			if ($this->input->post('simpan')) {
			$upload = $this->artikel_model->upload();

			if ($upload['result'] == 'success') {
				$this->artikel_model->insert($upload);
				redirect('artikel');
			}else{
				$data['message'] = $upload['error'];
			}
		}
		// Passing data ke view
		$this->load->view('tambahartikel');			
		}		
	}

	public function delete($id){
		// $this->load->model('artikel');
		$this->artikel_model->hapus($id);
		redirect('artikel');
	}

	public function edit($id){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['single'] = $this->artikel_model->get_single($id);

		if($this->input->post('edit')){
			$upload=$this->artikel_model->upload();
			$this->artikel_model->update($upload,$id);
			redirect('artikel');
		}
		

		$this->load->view('editartikel',$data);
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */