<?php

class C_Register extends CI_Controller {
	public function __construct () {
		parent:: __construct(); 
			$this->load->model('M_Regis'); //load model
	}

	public function tampil_register() { //fungsi menampilkan view regis
		$this->load->view('regist');
	}

	public function tambah_akun() { //fungsi tambah akun 
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'username' => $username,
			'password' => $password
		);

		$this->M_Siswa->input_akun($data, 'tabel-siswa');
		redirect('C_login');
	}
}
