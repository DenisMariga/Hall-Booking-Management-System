<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Meru Slopes website - Home page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="http://code4berry.com" />
	<!-- css --> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
	<link href="css/flexslider.css" rel="stylesheet" /> 
	<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
	<link href="css/style.css" rel="stylesheet" />
</head>
<body>
	<div id="wrapper" class="home-page"> 
		
		<!-- start header -->
		<?php include('includes/header.php') ?>
		<!-- end header -->
		<section id="banner">
			<!-- Slider -->
			<div id="slider" data-zs-src='["img/photos/bg_7.jpg", "img/photos/bg_2.jpg", "img/photos/bg_6.jpg"]' >
			</div>
			<!-- end slider --> 
		</section>  
		<section class="projects">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="aligncenter"><h2 class="aligncenter">Our Featured Halls</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, <br/>doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div>
						<br/>
					</div>
				</div>

				<div class="row service-v1 margin-bottom-40">
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
							</div>
							<div class="card-content"> 
								<p>
									<h4>Coming Soon</h4>
									<h5>Slopes</h5>
									<a href="halluser" class="btn btn-details">Book</a>
								</p>
							</div>
						</div>        
					</div>	
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
							</div>
							<div class="card-content"> 
								<p>
									<h4>Coming Soon</h4>
									<h5>Slopes</h5>
									<a href="halluser" class="btn btn-details">Book</a>
								</p>
							</div>
						</div>        
					</div>				
				</div>
			</div>
			
		</section>


		<?php include('includes/footer.php') ?>
	</div>
	<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up HillSide"></i></a>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="materialize/js/materialize.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>  
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/animate.js"></script>
	<!-- Vendor Scripts -->
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.zoomslider.min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/animate.js"></script> 
	<script src="js/custom.js"></script>
</body>
</html>