<?php
	session_start();
	if(isset($_SESSION['username'])) {
	header('location:index.php'); }
	require_once("koneksi.php");
?>
<html>
    <head>
        <title>Login</title>
        
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>
<body>
   
<header id="top" class="header">
        <div class="text-vertical-center">
					<h1>Login DUlu Pak Boss..</h1><br><br>
   <form class="form-signin" role="form" action="proseslogin.php" method="post">
       <style type="text/css">
              .form-signin {
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}             </style>
		        
		        	<input type="text" name="username" class="form-control center-block" placeholder="USERNAME" required>
		        
		        	<input type="password" name="password" class="form-control" placeholder="PASSWORD" required>
		        
		       	
                    <input class="btn btn-danger" value="Batal" type="reset">
		        	<input class="btn btn-success" type="submit" value="Login">
		        
       <br><br>
   </form>
        </div>
        </div>
</body>
</html>