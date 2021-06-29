<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {
		public function __construct() {
      parent::__construct();
		    $this->load->model('M_LGN'); //load model
    }

  function index() { //fungsi load view login
    $this->load->view('login');
  }

    function aksi_login() { //fungsi login siswa dan admin
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array(
      'username' => $username,
      'password' => $password
      );

    if($cek = $this->M_LGN->cek_login("tabel-admin",$where)->num_rows()) {
          if($cek > 0) {
 
      $data_session = array(
        'username' => $username,
        'status' => "login"
        );
 
      $this->session->set_userdata($data_session);
 
      redirect(base_url("C_admin/detail"));
 
    } else {
      $this->session->set_flashdata('info', 'Login Tidak Valid, Silahkan Coba Lagi!');
      redirect('C_login');
    }

  } else {
    $cek = $this->M_LGN->cek_login("tabel-siswa",$where)->num_rows();
      if($cek > 0) {
 
      $data_session = array(
        'nama' => $username,
        'status' => "login"
        );
 
      $this->session->set_userdata($data_session);
 
      redirect(base_url("C_Siswa"));
 
    } else {
      $this->session->set_flashdata('info', 'Login Tidak Valid, Silahkan Coba Lagi!');
      redirect('C_login');
    }
  }
}
 
  function logout() { //fungsi logout
    $this->session->sess_destroy();
    redirect(base_url('C_login'));
  }

}
