<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrpinjam extends CI_Controller {

	public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Pinjam');
		$this->load->model('Nasabah');
		$this->load->model('user');

		if (empty($this->session->userdata('logged_in'))) {
			redirect('visitor');
		}
	}
 
	public function index()
	{
		$data['Pinjam'] = $this->Pinjam->get_pinjaman();
		$this->load->view('TabelPinjaman', $data);
	}

	public function tambah()
	{
		$data = array();
		$data['data'] = $this->Nasabah->get_all_nasabah();



		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('besar_pinjaman', 'besar pinjaman', 'required', array('required' => 'Isi %s terlebih dahulu , '));
		$this->form_validation->set_rules('tanggal_pinjaman', 'tanggal pinjaman', 'required', array('required' => 'Isi %s terlebih dahulu, '));
		$this->form_validation->set_rules('id_anggota', 'id anggota', 'required|is_unique[pinjaman.id_anggota]',
			array(
				'required' => 'Tolong isi %s .',
				'is_unique' => 'Id Anggota <strong>' . $this->input->post('id_anggota') . '</strong> sudah menghutang.'
			)
		);
		$this->form_validation->set_rules('tangga_pelunasan', 'tanggal pelunasan', 'required', array('required' => 'Isi %s terlebih dahulu, '));

		if($this->form_validation->run()===FALSE){
			$this->load->view('tambah_pinjam', $data);
		} else {
			if ($this->input->post('simpan')) {
				$anggota = $this->user->get_anggota_by_kode($this->input->post('id_anggota'));
				if ($anggota[0]->id_level==3 && $this->input->post('besar_pinjaman') > 10000000) {
					$data['error'] = 'Pinjaman anggota '.$anggota[0]->nama_anggota.' dibatasi';
					$this->load->view('tambah_pinjam', $data);
				} else {
					$this->Pinjam->insert();
					redirect('Ctrpinjam');
					$this->load->view('TabelPinjaman');
				}				
			}
		}
	}

	public function delete($id){
		$this->Pinjam->delete($id);
		redirect('Ctrpinjam');
	}
}