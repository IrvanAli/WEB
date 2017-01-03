<?php
include "koneksi.php";
    $response = array();
	$sql = mysql_query ("SELECT * FROM pegawai ORDER BY nip");
    
    $response["pegawai"] = array();
	while ($hasil = mysql_fetch_array ($sql)) {
		$pg = array();
        $pg["nip"] = $hasil["nip"];
        $pg["nama"] = $hasil["nama"];
        $pg["jenkel"] = $hasil["jenkel"];
        $pg["tgllahir"] = $hasil["tgllahir"];
        $pg["alamat"] = $hasil["alamat"];
        array_push($response["pegawai"], $pg);
	}
    echo json_encode($response);
?>