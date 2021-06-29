<?php

class C_Siswa extends CI_Controller {
public function __construct (){
parent:: __construct(); 
	$this->load->model('M_LGN'); //load model
	if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
}

	public function logout() {
		$this->session->set_userdata('username', FALSE);
		$this->session->sess_destroy();
		redirect('C_siswa/masuk'); 
	}

	public function index() {
		//$data['siswa'] = $this->M_Siswa->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('V_Siswa');
		$this->load->view('templates/footer');
	}

	public function detail() {
		$data['siswa'] = $this->M_Siswa->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail', $data);
		$this->load->view('templates/footer');
	}

	//public function tambah() {
	//	$this->load->view('templates/header');
	//	$this->load->view('templates/sidebar');
	//	$this->load->view('siswa');
	//	$this->load->view('templates/footer');
	//}

	public function tambah_aksi() {
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$agama = $this->input->post('agama');
		$asal_sekolah = $this->input->post('asal_sekolah');
		$foto = $_FILES['foto'];
		if ($foto=''){} else {
			$config['upload_path'] = './assets/foto';
			$config['allowed_types'] = 'jpg|png';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto')) {
				echo "Upload Gagal"; die();
			} else {
				$foto=$this->upload->data('file_name');
			}
		}
		$status_berkas = $this->input->post('status_berkas');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'asal_sekolah' => $asal_sekolah,
			'foto' => $foto,
			'status_berkas' => $status_berkas
		);

		$this->M_Siswa->input_data($data, 'tabel-data_siswa');
		redirect('C_siswa/detail');
	}

	public function edit($id) {
		$where = array('id' => $id);
		$data['siswa'] = $this->M_Siswa->edit_data($where, 'tabel-data_siswa')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');
	}

	public function update() {
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$agama = $this->input->post('agama');
		$asal_sekolah = $this->input->post('asal_sekolah');
		$foto = $_FILES['foto'];
		if ($foto=''){} else {
			$config['upload_path'] = './assets/foto';
			$config['allowed_types'] = 'jpg|png';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto')) {
				echo "Upload Gagal"; die();
			} else {
				$foto=$this->upload->data('file_name');
			}
		}
		$status_berkas = $this->input->post('status_berkas');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'asal_sekolah' => $asal_sekolah,
			'foto' => $foto,
			'status_berkas' => $status_berkas
		);

		$where = array(
			'id' => $id
		);

		$this->M_Siswa->update_data($where, $data, 'tabel-data_siswa');
		redirect('C_siswa/detail');
	}

	public function cetak() {
    $this->load->library('mypdf');
    $data['siswa'] = $this->M_Siswa->tampil_data()->result();
    $this->mypdf->generate('pdf', $data, 'Data_Laporan_Pendaftaran_Siswa', 'A4', 'landscape');
  }

}
