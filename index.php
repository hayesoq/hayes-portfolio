<?php
	if (!isset($_GET['page']))
		$page = "home.php";
	else
		$page = $_GET['page'].".php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Hayes O'Quinn</title>
<link rel="icon" type="image/png" href="assets/images/penguin_favicon.png">
<link href="assets/css/main.css" rel="stylesheet">
<!--font-awesome.min.css-->
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<!--flat icon css-->
<link rel="stylesheet" href="assets/css/flaticon.css">
<!--animate.css-->
<link rel="stylesheet" href="assets/css/animate.css">
<!--owl.carousel.css-->
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
<!--bootstrap.min.css-->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!-- bootsnav -->
<link rel="stylesheet" href="assets/css/bootsnav.css" >	
<!--style.css-->
<link rel="stylesheet" href="assets/css/style.css">
<!--responsive.css-->
<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!-- top-area Start -->
		<header class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand" href="index.php?page=home">Hayes O'Quinn</a>
			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                <li class=" smooth-menu active"></li>
			                    <?php
									include("navigation.php");
								?>
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->

		    <div class="clearfix"></div>

		</header><!-- /.top-area-->
		<!-- top-area End -->

		<!--call page content-->
		<?php
			include($page);
		?>

		<!--footer-copyright start-->
		<footer id="footer-copyright" class="footer-copyright">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<p>
						&copy; copyright Hayes O'Quinn. designed and developed by Hayes O'Quinn</a>
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" ></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-copyright-->
		<!--footer-copyright end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

        
    </body>
</html>