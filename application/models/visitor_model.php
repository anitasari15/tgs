<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitor_model extends CI_Model{
	public function register($upload, $enc_password){
 // Array data user
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

 	// Proses login user
    public function login($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('anggota');


        if($result->num_rows() == 1){
            return $result->row(0)->id_anggota;
        } else {
            return false;
        }
    }

    public function get_user_level($id_anggota){
        $this->db->select('id_level');
        $this->db->from('anggota');
        $this->db->where('id_anggota', $id_anggota);
        return $this->db->get()->result();

        // $result = $this->db->get('anggota');

        // if ($result->num_rows() == 1){
        //     return $result->row(0);
        // }else{
        //     return false;
        // }
    }

    function get_user_detail($id_anggota){
        $this->db->join('level', 'level.id_level = anggota.id_level', 'left');
        $this->db->where('id_anggota', $id_anggota);

        $result = $this->db->get('anggota');

        if($result -> num_rows() == 1){
            return $result->row(0);
        }else{
            return false;
        }
    }
 }