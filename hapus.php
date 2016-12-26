<?php
include "koneksi.php";
error_reporting(E_ALL ^ E_NOTICE);
$id = $_GET['idkaryawan'];
$nama = $_GET['nama'];

$delete = "delete from karyawan where idkaryawan = '$idkaryawan'";
$hasil = mysql_query($delete);

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data dengan nama $nama Berhasil dihapus </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= index.php'/>  ";
} else { echo "Data gagal dihapus";
}

?>