<?php

session_start();

if(!isset($_SESSION['email'])){
    header('Location: login.php');
}


?>

<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        
        <!-- title of site -->
        <title>Angle</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
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
			                <a class="navbar-brand" href="index.html">Angle</a>
			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->

		    <div class="clearfix"></div>

		</header><!-- /.top-area-->
		<!-- top-area End -->
	
		<!--welcome-hero start -->
		<section id="welcome-hero" class="welcome-hero">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="header-text">
							<h2>hi <span>,</span> i am <br> <?php echo $_SESSION['username']; ?> <span>.</span>   </h2>
							<p>ui/ux designer and web developer</p>
							<a href="logout.php">Log Out</a>
						</div><!--/.header-text-->
					</div><!--/.col-->
				</div><!-- /.row-->
			</div><!-- /.container-->

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		

		

		<!--contact start -->
		<section id="contact" class="contact">
			<div class="section-heading text-center">
				<h2>contact me</h2>
			</div>
			<div class="container">
				<div class="contact-content">
					<div class="row">
						<div class="col-md-offset-1 col-md-5 col-sm-6">
							<div class="single-contact-box">
								<div class="contact-form">
									<form>
										<div class="row">
											<div class="col-sm-6 col-xs-12">
												<div class="form-group">
												  <input type="text" class="form-control" id="name" placeholder="Name*" name="name">
												</div><!--/.form-group-->
											</div><!--/.col-->
											<div class="col-sm-6 col-xs-12">
												<div class="form-group">
													<input type="email" class="form-control" id="email" placeholder="Email*" name="email">
												</div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
												</div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea class="form-control" rows="8" id="comment" placeholder="Message" ></textarea>
												</div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
										<div class="row">
											<div class="col-sm-12">
												<div class="single-contact-btn">
													<a class="contact-btn" href="#" role="button">submit</a>
												</div><!--/.single-single-contact-btn-->
											</div><!--/.col-->
										</div><!--/.row-->
									</form><!--/form-->
								</div><!--/.contact-form-->
							</div><!--/.single-contact-box-->
						</div><!--/.col-->
						<div class="col-md-offset-1 col-md-5 col-sm-6">
							<div class="single-contact-box">
								<div class="contact-adress">
									<div class="contact-add-head">
										<h3>Ghost Angle</h3>
										<p>uI/uX designer</p>
									</div>
									<div class="contact-add-info">
										<div class="single-contact-add-info">
											<h3>phone</h3>
											<p>987-123-6547</p>
										</div>
										<div class="single-contact-add-info">
											<h3>email</h3>
											<p>angle@angle.com</p>
										</div>
										<div class="single-contact-add-info">
											<h3>website</h3>
											<p>www.ghostangle.com</p>
										</div>
									</div>
								</div><!--/.contact-adress-->
								<div class="hm-foot-icon">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li><!--/li-->
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li><!--/li-->
										<li><a href="#"><i class="fa fa-twitter"></i></a></li><!--/li-->
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li><!--/li-->
										<li><a href="#"><i class="fa fa-instagram"></i></a></li><!--/li-->
									</ul><!--/ul-->
								</div><!--/.hm-foot-icon-->
							</div><!--/.single-contact-box-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.contact-content-->
			</div><!--/.container-->

		</section><!--/.contact-->
		<!--contact end -->

		<!--footer-copyright start-->
		<footer id="footer-copyright" class="footer-copyright">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<p>
						&copy; copyright yourname. design and developed by <a href="https://www.themesine.com/">themesine</a>
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

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>
		
		<!-- jquery.sticky.js -->
		<script src="assets/js/jquery.sticky.js"></script>
		
		<!-- for progress bar start-->

		<!-- progressbar js -->
		<script src="assets/js/progressbar.js"></script>

		<!-- appear js -->
		<script src="assets/js/jquery.appear.js"></script>

		<!-- for progress bar end -->

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>