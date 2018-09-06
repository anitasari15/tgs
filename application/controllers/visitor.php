<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class visitor extends CI_Controller{

	public function __construct()
 	{
 		parent::__construct();

 		$this->load->library('form_validation');
 		// $this->load->helper('MY');
 		$this->load->model('visitor_model');
		$this->load->model('User');
		$this->load->model('Pinjam');

 		if ($this->uri->segment(2) == 'logout') {
 			return;
 		}
 		
 		if (!empty($this->session->userdata('logged_in'))) {
 			if ($this->session->userdata('id_level')==1) {
 				redirect('home');
 			} else {
 				redirect('CtrUser');
 			}
 		}
 	}

 	public function index(){
 		$this->load->view('template/header_visitor');
 		$this->load->view('user/home');
 		$this->load->view('template/footer_user');
 	}

 	public function dashboard(){
 		$this->load->view('template/header_visitor');
 		$this->load->view('user/home');
 		$this->load->view('template/footer_user');
 	}

 	public function register(){ 		
 		$this->form_validation->set_rules('nama', 'Nama', 'required');
 		$this->form_validation->set_rules('user', 'Username', 'required|is_unique[anggota.username]');
 		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('tempat', 'tempat tanggal lahir');
		$this->form_validation->set_rules('tanggal', 'tanggal lahir', 'required');
		$this->form_validation->set_rules('jk', 'jenis kelamin', 'required');
 		$this->form_validation->set_rules('password', 'Password', 'required');
 		$this->form_validation->set_rules('password2', 'Konfirmasi Password','matches[password]');

 		if($this->form_validation->run() === FALSE){
 		$this->load->view("template/header_visitor");
		// Passing data ke view
		$this->load->view('user/register');
		$this->load->view("template/footer_user");
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
                        $this->visitor_model->register($this->upload->data('file_name'),md5($this->input->post('password')));
                        echo $this->upload->data('file_name');  
                }
                redirect('visitor/dashboard');
		}
		
 	}

 	public function login(){
 		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE){
		$this->load->view("template/header_visitor");
		// Passing data ke view
		$this->load->view('user/login');
		$this->load->view("template/footer_user");
		} 
		else {
			
			// Get username
			$username = $this->input->post('username');
			// Get & encrypt password
			$password = md5($this->input->post('password'));

			// Login user
			$id_anggota = $this->visitor_model->login($username, $password);

			if($id_anggota){
				// Buat session
				$level = $this->visitor_model->get_user_level($id_anggota);
				$user_data = array(
					'id_anggota' => $id_anggota,
					'username' => $username,
					'logged_in' => true,
					'id_level' => $level[0]->id_level
				);

				$this->session->set_userdata($user_data);

				// Set message
				$this->session->set_flashdata('user_loggedin', 'Anda sudah login');

				// $this->load->view('user/dashboard');
				if ($level[0]->id_level == 1) {
					redirect('home');
				} else {
					redirect('CtrUser');
				}
			} else {
				// Set message
				$this->session->set_flashdata('login_failed', 'username atau password salah');

				redirect('user/login');
			}		
		}
 	}

 	public function logout()
 	{
 		$this->session->sess_destroy();
 		session_unset();
 		redirect('visitor/dashboard');
 	}
 }