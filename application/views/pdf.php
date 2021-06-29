<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>

	<h1 style="text-align:center;">Laporan Data Pendaftaran Siswa</h1>

	<table align="center"border="1" style="text-align:center;">
		<tr>
			<td>NO</td>
			<td>Nama</td>
			<td>Alamat</td>
			<th>Jenis Kelamin</th>
      <th>Agama</th>
      <th>Asal Sekolah</th>
     
      <th>Status Berkas</th>
      <th>Status Pendaftaran</th>
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
        
        <td><?php echo $swa->status_berkas ?></td>
        <td><?php echo $swa->status_pendaftaran ?></td>
    	</tr>

    <?php endforeach; ?>
    
	</table>

</body></html>
