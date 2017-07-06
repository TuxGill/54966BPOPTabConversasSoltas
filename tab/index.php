<?php 
	include('config.php');
	$area='';
	if(!isset($_GET['area']) || $_GET['area'] == '' ){
		$area= 'home';
	}else{
		$area=$_GET['area'];
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Tux&Gill - http://www.tux-gill.pt">

		<title>Parcerias Conversas Soltas</title>


		<!-- SOCIAL -->
		<meta property="og:title" content="" />
		<meta property="og:type" content="" />
		<meta property="og:url" content="" />
		<meta property="og:image" content="" />
		<!-- END SOCIAL -->

		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		
		<link rel="stylesheet" type="text/css" href="css/fonts.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		<!-- jPList core js and css  -->
		<link href="jplist/jplist.core.min.css" rel="stylesheet" type="text/css" />		
		<script src="jplist/jplist.core.min.js"></script>
			
		<!-- jplist pagination bundle -->
		<script src="jplist/jplist.pagination-bundle.min.js"></script>
		<link href="jplist/jplist.pagination-bundle.min.css" rel="stylesheet" type="text/css" />

		<!-- filter dropdown bundle -->
    	<script src="jplist/jplist.filter-dropdown-bundle.min.js"></script>
		
		<!-- Colorbox - Lightbox Plugin -->
    	<script src="js/jquery.colorbox.js"></script>
		<link href="css/colorbox.css" rel="stylesheet" type="text/css" />


		<script src="js/main.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="header col-sm-12">
					<a href="index.php">
						<img src="images/header.png" alt="">
					</a>
				</div>
			</div>
		
			<div class="row">
				<div class="col-sm-12">
					<?php
						switch ($area) {
							case 'home':
								include('views/home.php');
								break;

							case 'gallery':
								include('views/video_gallery.php');
								break;
							
							default:
								include('views/home.php');
								break;
						}
					?>
				</div>
				
			</div>
			
		</div>

		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script type="text/javascript" language="javascript" src="https://connect.facebook.net/en_US/all.js"></script>
		<script type="text/javascript" language="javascript">
		    FB.init({
		        appId: '1351314971602347',
		        status: true, // check login status
		        cookie: true, // enable cookies to allow the server to access the session
		        xfbml: true// parse XFBML
		    });
		    window.fbAsyncInit = function () {
		        FB.Canvas.setSize();
		    }

		    FB.Canvas.setAutoGrow(7);
		</script>
	</body>
</html>