<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrAngsuran extends CI_Controller {

	public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Nasabah');
		$this->load->model('Pinjam');
		$this->load->model('angsuran');
		
		if (empty($this->session->userdata('logged_in'))) {
			redirect('visitor');
		}

	}
 
	public function index()
	{
		$data['angsuran'] = $this->angsuran->get_pinjaman();
		$this->load->view('TabelAngsuran', $data);
	}

	public function tambah()
	{
		$data = array();
		$data['data'] = $this->Nasabah->get_all_nasabah();
		$data['pinjam'] = $this->Pinjam->get_all_pinjaman();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id_anggota', 'besar pinjaman', 'required', array('required' => 'Isi %s terlebih dahulu , '));
		$this->form_validation->set_rules('tanggal_angsuran', 'id anggota', 'required', array('required' => 'Isi %s terlebih dahulu, '));
		$this->form_validation->set_rules('besar_angsuran', 'tanggal pelunasan', 'required', array('required' => 'Isi %s terlebih dahulu, '));

		if($this->form_validation->run() == FALSE){
			$this->load->view('tambahangsuran', $data);
		} else {
			if ($this->input->post('simpan')) {
				$id_pinjaman = $this->angsuran->get_pinjaman_anggota_by_id($this->input->post('id_anggota'));
				$this->angsuran->insert($id_pinjaman[0]->id_pinjaman);
				redirect('CtrAngsuran');
			}
			$this->load->view('TabelAngsuran');
		}
	}

	public function delete($id){
		$this->angsuran->delete($id);
		redirect('CtrAngsuran');
	}
}