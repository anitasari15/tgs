<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrUser extends CI_Controller {

	public function __construct()
	{ 
		parent::__construct();
		$this->load->model('User');
		$this->load->model('Pinjam');
		if (empty($this->session->userdata('logged_in'))) {
			redirect('visitor');
		}
	}

	public function index()
	{
		$this->load->view('template/header_user');
		$this->load->view('user/home');
		$this->load->view('template/footer_user');
	}

	public function transaksi(){

 		$data['Pinjam'] = $this->Pinjam->get_single_pinjaman($this->session->userdata('id_anggota'));
 		$this->load->view('user/transaksi', $data);
 	}

 	public function angsuran(){

 		$data['angsuran'] = $this->Pinjam->get_single_angsuran($this->session->userdata('id_anggota'));
 		$this->load->view('user/angsuran', $data);
 	}

	public function home()
	{
		$this->load->view('user/dashboard');
	}
 
	public function anggota()
	{
		$data['user'] = $this->User->get_anggota_by_kode($this->session->userdata('id_anggota'));

		$this->load->view('user/TampilUserLengkap', $data);
		
	}
	// public function view($kode){
	// 	$x['data']=$this->User->get_anggota_by_kode($kode);
	// 	$this->load->view('TampilUserLengkap',$x);
	// }
}