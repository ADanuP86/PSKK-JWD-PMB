<div class="content-wrapper">
	<section class="content">
		<?php foreach($siswa as $swa) { ?>

		<form action="<?php echo base_url(). 'C_admin/update'; ?>" method="post">

			<div class="form-group">
				<label>Nama Siswa</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $swa->id ?>">
				<input type="text" name="nama" class="form-control" readonly value="<?php echo $swa->nama ?>">
			</div>

			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" readonly value="<?php echo $swa->alamat ?>">
			</div>

			<div class="form-group">
				<label>Jenis Kelamin</label>
				<input type="text" name="jenis_kelamin" class="form-control" readonly value="<?php echo $swa->jenis_kelamin ?>">
			</div>

			<div class="form-group">
				<label>Agama</label>
				<input type="text" name="agama" class="form-control" readonly value="<?php echo $swa->agama ?>">
			</div>

			<div class="form-group">
				<label>Asal Sekolah</label>
				<input type="text" name="asal_sekolah" class="form-control" readonly value="<?php echo $swa->asal_sekolah ?>">
			</div>

			

			<div class="form-group">
              <label>Status Pendaftaran</label>
              <select name='status_pendaftaran'>
              <option value='Diterima' class='form-control'>Diterima</option>
              <option value='Tidak Diterima' class='form-control'>Tidak Diterima</option>
              </select>
            </div>

			<button type="reset" class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>
			
		</form>

	<?php } ?>

	</section>
	
</div>	
