<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Our Gallery</title>
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		

	</head>

	<body>
		
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.php" id="branding">
						<img src="images/logo.png" alt="Site Title">
						<small class="site-description">Gallery Kegiatan UKM Msik</small>
					</a> <!-- #branding -->
					
					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item current-menu-item"><a href="gallery.php">Gallery</a></li>
							<li class="menu-item"><a href="download.php">Download</a></li>
							<li class="menu-item"><a href="blog.php">Blog</a></li>
							<li class="menu-item"><a href="contact.php">Contact</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
			
			<main class="main-content">
				<div class="fullwidth-block gallery">
					<div class="container">
						<div class="content fullwidth">
							<h2 class="entry-title">Gallery</h2>
							<div class="filter-links filterable-nav">
								<select class="mobile-filter">
									<option value="*">Show all</option>
								</select>
								<a href="#" class="current" data-filter="*">Show all</a>
							</div>
							<div class="filterable-items">
								<div class="filterable-item concert">
									<a href="images/1.jpg"><figure><img src="images/1.jpg" alt="gallery 1"></figure></a>
								</div>
								<div class="filterable-item concert">
								<a href="images/2.jpg"><figure><img src="images/2.jpg" alt="gallery 2"></figure></a>
								</div>
								<div class="filterable-item stuff">
								<a href="images/3.jpg"><figure><img src="images/3.jpg" alt="gallery 3"></figure></a>
								</div>
								<div class="filterable-item concert">
								<a href="images/5.jpg"><figure><img src="images/5.jpg" alt="gallery 5"></figure></a>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .testimonial-section -->

				
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<img src="images/logo.png" alt="Site Name">
					
					<address>
					<p>Singaraja <br><a href="tel:081818498929">+6281818498929</a> <br> <a href="email:AyuKartika@gmail.com">AyuKartika@gmail.com</a></p> 
					</address> 
					
					<form action="#" class="newsletter-form">
						<input type="email" placeholder="Masukkan Email untuk masuk newsletter...">
						<input type="submit" class="button cut-corner" value="Subscribe">
					</form> 
					</div> 
					<p class="copy">UKM MUSIK UNDIKSHA @ Copyright 2021 .</p>
				</div>
			</footer> 

		</div> 

		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>