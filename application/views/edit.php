<div class="content-wrapper">
	<section class="content">
		<?php foreach($siswa as $swa) { ?>

			<?php echo form_open_multipart('C_siswa/update'); ?>

			<div class="form-group">
				<label>Nama Siswa</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $swa->id ?>">
				<input type="text" name="nama" class="form-control" value="<?php echo $swa->nama ?>">
			</div>

			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $swa->alamat ?>">
			</div>

			<div class="form-group">
				<label>Jenis Kelamin</label>
				<input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $swa->jenis_kelamin ?>">
			</div>

			<div class="form-group">
				<label>Agama</label>
				<input type="text" name="agama" class="form-control" value="<?php echo $swa->agama ?>">
			</div>

			<div class="form-group">
				<label>Asal Sekolah</label>
				<input type="text" name="asal_sekolah" class="form-control" value="<?php echo $swa->asal_sekolah ?>">
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

			<button type="reset" class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>
			
		 <?php echo form_close(); ?>

	<?php } ?>

	</section>
	
</div>	
