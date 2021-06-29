<?php

class C_admin extends CI_Controller {
	public function __construct() {
		parent:: __construct(); 
			$this->load->model('M_LGN'); //load model database

	if($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}

	public function detail() {
		$data['siswa'] = $this->M_Siswa->tampil_data()->result();
		$this->load->view('templates-adm/header');
		$this->load->view('templates-adm/sidebar');
		$this->load->view('detail_adm', $data);
		$this->load->view('templates-adm/footer');
	}

	public function edit($id) {
		$where = array('id' => $id);
		$data['siswa'] = $this->M_Siswa->edit_data($where, 'tabel-data_siswa')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit_adm', $data);
		$this->load->view('templates/footer');
	}

	public function update() {
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$agama = $this->input->post('agama');
		$asal_sekolah = $this->input->post('asal_sekolah');
		
		$status_pendaftaran = $this->input->post('status_pendaftaran');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'asal_sekolah' => $asal_sekolah,
			
			'status_pendaftaran' => $status_pendaftaran
		);

		$where = array(
			'id' => $id
		);

		$this->M_Siswa->update_data($where, $data, 'tabel-data_siswa');
		redirect('C_admin/detail');
	}

	public function cetak() { //fungsi cetak dokumen
    $this->load->library('mypdf');
    $data['siswa'] = $this->M_Siswa->tampil_data()->result();
    $this->mypdf->generate('pdf', $data, 'Data_Laporan_Mahasiswa', 'A4', 'landscape');
  }

}
