<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="lib/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="lib/css/bootstrap-theme.min.css">
</head>
<body>
	<div class="container">
	<h2>Data Mahasiswa</h2>
	<a href="index.php">Tambah Data</a></p>
	
	<h3>Data Mahasiswa</h3>

	<form method="post" action="" class="form-inline">	
			  <div class="form-group">
	<select name="kategori" class="form-control">

	<option value="idkaryawan">ID</option>
	<option value="nama">Nama</option>
	</select>
	<input type="text" name="search" class="form-control"/>
	<input type="submit" name="cari" value="cari" class="btn btn-success">
	</div>
	</form><br>
	<table cellpadding="5" cellspacing="0" border="1" class="table table-bordered">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>ID</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Gaji</th>
			
		</tr>
		
		<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		$query = mysql_query("SELECT * FROM karyawan natural join jabatan natural join gaji where karyawan.idkaryawan ") or die(mysql_error());
		if (isset($_POST['cari'])) {
				   $search = $_POST['search'];
				   $kategori = $_POST['kategori'];
				   
				   $sql = "SELECT * FROM karyawan natural join jabatan natural join prodi WHERE $kategori LIKE '%$search%'";
				   $result = mysql_query($sql) or die('Error, list obat failed. ' . mysql_error());
					
				   if (mysql_num_rows($result) == 0) {
					echo '<p></p><p>Pencarian tidak ditemukan</p>';
				   } else {
					echo '<p></p>';
					$no = 1;
					while ($row = mysql_fetch_array($result)) {
					 extract($row);
					  echo '<tr>';
					echo '<td>'.$no.'</td>';
					 echo '<td> '.$idkaryawan.'</td>';
					 echo '<td> '.$nama.'</td>';
					 echo '<td> '.$jabatan.'</td>';
					 echo '<td> '.$gaji.'</td>';
					 echo '</tr>';
					 $no++;
					}
					
				   }
				  }
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		 else if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['idkaryawan'].'</td>';
					echo '<td>'.$data['nama'].'</td>';	
					echo '<td>'.$data['jabatan'].'</td>';	
					echo '<td>'.$data['gaji'].'</td>';
						
				echo '</tr>';
				
				$no++;
				
			}
			
		}
		?>
	</table>
	</div>
</body>
<script src="lib/js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="lib/js/bootstrap.min.js"></script>
</html>