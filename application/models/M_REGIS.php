<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Regis extends CI_Model {

	public function input_data($table) {
		$this->db->insert('tabel-siswa', $table);
	}

	public function input_akun($data, $table) {
		$this->db->insert($table, $data);
	}
	
}
