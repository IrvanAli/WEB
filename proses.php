<?php  
	include 'koneksi.php';
?>
	<div id="content">
	<h2>Data Pegawai</h2>
<table border="1">
		<th width="10%">NIP</td>
		<th width="20%">Nama</td>
		<th width="15%">Tgl Lahir</td>
		<th width="20%">Jenis Kelamin</td>
		<th width="30%">Alamat</td>
	<?
	$no = 1;
	$search = $_POST['search'];
	$query = "SELECT * FROM pegawai WHERE nama LIKE '%$search%'";
	$result = mysql_query($query);
	while ($hasil = mysql_fetch_array($result)) {
		$nip = $hasil['nip'];
		$nama = stripslashes ($hasil['nama']);
		$jenkel = ($hasil['jenkel']==0)?"Laki-laki" : "Wanita";
		$tgllhr = stripslashes ($hasil['tgllahir']);
		$alamat = stripslashes ($hasil['alamat']);
		$warna = ($no%2==1)?"#ffffff":"#efefef";
	}
?>

 <tr bgcolor="<?=$warna?>">
            <td><?=$nip?></td>
			<td><?=$nama?></td>
			<td><?=$tgllhr?></td>
			<td><?=$jenkel?></td>
			<td><?=$alamat?></td>
		</tr>

<? $no++; ?>
</table>
</div>