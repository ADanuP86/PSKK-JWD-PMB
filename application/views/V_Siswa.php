<div class="content-wrapper">
	<section class="content-header">
    <h1>
      Data Siswa
      <small>Control panel</small>
    </h1>

      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('C_Siswa/index') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Masukkan Data Siswa</li>
      </ol>

  </section>

  <section class="content">
    <div class="modal-body">
      <?php echo form_open_multipart('C_siswa/tambah_aksi'); ?>

        <div class="form-group">
          <label>Nama Siswa</label>
          <input type="text" name="nama" class="form-control">
        </div>

        <div class="form-group">
          <label>Alamat</label>
          <input type="text" name="alamat" class="form-control">
        </div>

        <div class="form-group">
          <label>Jenis Kelamin</label>
          <input type="text" name="jenis_kelamin" class="form-control">
        </div>

        <div class="form-group">
          <label>Agama</label>
          <input type="text" name="agama" class="form-control">
        </div>

        <div class="form-group">
          <label>Asal Sekolah</label>
          <input type="text" name="asal_sekolah" class="form-control">
        </div>

        <div class="form-group">
          <label>Tambah Foto</label>
          <input type="file" name="foto" class="form-control">
        </div>

        <div class="form-group">
              <label>Status Berkas</label>
              <select name='status_berkas'>
              <option value='Lengkap' class='form-control'>Lengkap</option>
              <option value='Belum Lengkap' class='form-control'>Belum lengkap</option>
              </select>
            </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        
      <?php echo form_close(); ?>

    </div>

  </section>

</div>
