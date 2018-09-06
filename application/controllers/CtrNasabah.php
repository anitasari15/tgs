<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrNasabah extends CI_Controller {

	public function __construct()
	{ 
		parent::__construct();
		$this->load->model('nasabah');
		
		if (empty($this->session->userdata('logged_in'))) {
			redirect('visitor');
		}
	}
 
	public function index()
	{
		$data['nasabah'] = $this->nasabah->get_file();
		$this->load->view('TabelAnggota', $data);
	}

	public function tambah()
	{
		$data = array();
		

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'nama', 'required', array('required' => 'Isi %s terlebih dahulu , '));
		$this->form_validation->set_rules('alamat', 'alamat', 'required', array('required' => 'Isi %s terlebih dahulu, '));
		$this->form_validation->set_rules('tempat', 'tempat tanggal lahir', 'required', array('required' => 'Isi %s terlebih dahulu, '));
		$this->form_validation->set_rules('tanggal', 'tanggal lahir', 'required', array('required' => 'Isi %s terlebih dahulu, '));
		$this->form_validation->set_rules('jk', 'jenis kelamin', 'required', array('required' => 'Isi %s terlebih dahulu, '));
		$this->form_validation->set_rules('user', 'Username', 'required|is_unique[anggota.username]');
 		$this->form_validation->set_rules('password', 'Password', 'required');
 		$this->form_validation->set_rules('password2', 'Konfirmasi Password','matches[password]');

		if($this->form_validation->run() === FALSE){
		// Passing data ke view
		$this->load->view('tambah_nasabah');
 		} else {
 			$config['upload_path'] = './img/';
        	$config['allowed_types'] = 'jpeg|jpg|png';
        	$config['max_size']  = '2048';
        
        	$this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload('input_gambar'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                }
                else
                {
                        $this->nasabah->insert($this->upload->data('file_name'),md5($this->input->post('password')));
                        echo $this->upload->data('file_name');  
                }
                redirect('CtrNasabah');
		}
	}

	public function delete($id){
		$this->nasabah->delete($id);
		redirect('CtrNasabah');
	}

	public function edit($id){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['single'] = $this->nasabah->get_single($id);

		if($this->input->post('edit')){
			$upload=$this->nasabah->upload();
			$this->nasabah->update($upload,$id);
			redirect('CtrNasabah');
		}
		

		$this->load->view('edit_nasabah',$data);
	}
}
