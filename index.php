<!DOCTYPE html>
<html>
<head>
	<title>Data Karyawan</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="lib/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="lib/css/bootstrap-theme.min.css">
</head>
<body>
	<div class="container">
	<h2>Data Karyawan</h2>
	
	<p><a href="beranda.php">Beranda</a>
	
	<h3>Tambah Data Karyawan</h3>
	
	<form action="tambah-proses.php" method="post" class="form-horizontal">
	  <div class="form-group">
		<table cellpadding="3" cellspacing="0" class="table">
			<tr>
				<td>ID Karyawan</td>
				<td>:</td>
				<td><input type="text" name="idkaryawan" class="form-control" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" class="form-control" required></td>
			</tr>
			<tr>
				<td>gaji</td>
				<td>:</td>
				<td>
					<?php
					include('koneksi.php');
					$query = mysql_query("SELECT * FROM gaji") or die(mysql_error());
					echo '<select name="gaji" class="form-control" required>';
					echo '<option value="">Pilih gaji</option>';
						$no = 1;	//membuat variabel $no untuk membuat nomor urut
						while($data = mysql_fetch_assoc($query)){
					echo '<option value="'.$data['idgaji'].'">'.$data['gaji'].'</option>';
						$no++;
						}
					echo '</select>';
					?>
				</td>
			</tr>
			<tr>
				<td>Gaji</td>
				<td>:</td>
				<td>
					<?php
					include('koneksi.php');
					$query = mysql_query("SELECT * FROM jabatan") or die(mysql_error());
					echo '<select name="jabatan" class="form-control" required>';
					echo '<option value="">Pilih jabatan</option>';
						$no = 1;	//membuat variabel $no untuk membuat nomor urut
						while($data = mysql_fetch_assoc($query)){
					echo '<option value="'.$data['idjabatan'].'">'.$data['jabatan'].'</option>';
						$no++;
						}
					echo '</select>';
					?>
					<a href="tambah-jabatan.php"> Tambah Jabatan </a>
					
				</td>
			</tr>
			
			<tr>
				<td colspan="3"><hr>
				<input type="submit" name="tambah" value="Simpan" class="btn btn-success"></td>
			</tr>
		</table>
	  </div>
	</form>
	</div>
</body>
<script src="lib/js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="lib/js/bootstrap.min.js"></script>
</html>