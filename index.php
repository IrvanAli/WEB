<?php
	session_start();
	if(!isset($_SESSION['username'])) {
		header('location:login.php'); 
	} else { 
		$username = $_SESSION['username']; 
	}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Karyawan</title>

</head>
<body>
<div id="main_container">
<div id="header">
<h1>Sistem Karyawan PT.Makmur</h1>
</div>
<div id="navigation">
	<a href="index.php">Home</a> 
	<a href="index.php?page=input">Input Data Pegawai</a> 
	<a href="index.php?page=tampil">Tampil Data Pegawai</a> 
	<a href="index.php?page=about">About</a> 
	<a href="index.php?page=logout">logout</a> 
</div>

<?php
$page = (isset($_GET['page']))? $_GET['page'] : "main";
switch ($page) {
	case 'input': include "input_peg.php"; break;
	case 'edit'	: include "edit_peg.php"; break;
	case 'delete' : include "delete_peg.php"; break;
	case 'tampil' : include "tampil.php"; break;
	case 'logout' : include "logout.php"; break;
	case 'about' : include "about.php"; break;
default : include 'utama.php';	

}
?>
</div>
</body>
</html>
