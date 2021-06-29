<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Detail Data Siswa
      <small>Control panel</small>
    </h1>

      <ol class="breadcrumb">
         <li><a href="<?php echo base_url('C_siswa/cetak') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Detail Data Siswa</li>
      </ol>

  </section>

  <section class="content">
    <a class="btn btn-warning" href="<?php echo base_url('C_siswa/cetak') ?>"> <i class="fa fa-file"></i>Export PDF</a>

      <table class="table">
        <tr>
          <th>NO</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Agama</th>
          <th>Asal Sekolah</th>
          <th>Foto</th>
          <th>Status Berkas</th>
          <th>Status Pendaftaran</th>
          <th colspan="2">Aksi</th>
        </tr>

        <?php 
        $no = 1;
        foreach ($siswa as $swa) : ?>

        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $swa->nama ?></td>
          <td><?php echo $swa->alamat ?></td>
          <td><?php echo $swa->jenis_kelamin ?></td>
          <td><?php echo $swa->agama ?></td>
          <td><?php echo $swa->asal_sekolah ?></td>
          <td><img src="<?php echo base_url(); ?>assets/foto/<?php echo $swa->foto; ?>" width="90" height="110"></td>
          <td><?php echo $swa->status_berkas ?></td>
          <td><?php echo $swa->status_pendaftaran ?></td>
          <td><?php echo anchor('C_siswa/edit/'.$swa->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
        </tr>

      <?php endforeach ?>

      </table>
  </section>

</div>
