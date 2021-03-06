<?php
	session_start();
	if(!isset($_SESSION['username'])) {
		header('location:login.php'); 
	} else { 
		$username = $_SESSION['username']; 
	}
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

  <title>Sistem Karyawan</title>


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

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="index.php" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="index.php?page=input" onclick=$("#menu-close").click();>Input Data Pegawai</a>
            </li>
            <li>
                <a href="index.php?page=tampil" onclick=$("#menu-close").click();>Tampil Data Pegawai</a>
            </li>
            <li>
                <a href="index.php?page=about" onclick=$("#menu-close").click();>About</a>
            </li>
            <li>
                <a href="index.php?page=logout" onclick=$("#menu-close").click();>logout</a>
            </li>
           
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1></h1>
           
            <br>
           <div id="main_container">
<div id="header">
<h1>Sistem Karyawan PT.Maju Terus</h1>
</div>
 

</div>
<br><br>
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
        </div>
    </header>

    <!-- About -->
   

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
   

    <!-- Callout -->
    

    <!-- Portfolio -->
   
    <!-- Call to Action -->
    
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-3 text-center">
                    <h4><strong>User</strong>
                    </h4>
                    <p>Nuruddin ILyas
                        <br>Armed kebonsari jember</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> 081232435436</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:ilyasden17@gmail.com">ilyasden17@gmail.com</a>
                        </li>
                    </ul>
                    <br>
                </div>
                <div class="col-xs-6 col-sm-3 text-center">
                    <h4><strong>User</strong>
                    </h4>
                    <p>Irvan Ali Usman
                        <br>Kreyongan Jember</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> 081219110117</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:irvanaliusman@gmail.com">irvanaliusman@gmail.com</a>
                        </li>
                    </ul>
                    <br>
                </div>
               <div class="col-xs-6 col-sm-3 text-center">
                    <h4><strong>User</strong>
                    </h4>
                    <p>Fitri Andayani
                        <br>Kediri</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> 082299864234</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:fitriandayani0697@gmail.com">fitriandayani0697@gmail.com</a>
                        </li>
                    </ul>
                    <br>
                </div>
                <div class="col-xs-6 col-sm-3 text-center">
                    <h4><strong>User</strong>
                    </h4>
                    <p>Yodion Wirawanda
                        <br>Situbondo</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> 081230843733</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:yodionwanda@gmail.com">yodionwanda@gmail.com</a>
                        </li>
                    </ul>
                    <br>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>

</body>

</html>


