<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Sportz Web</title>
<link href="<?php echo base_url(); ?>css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo base_url(); ?>css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sportz Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- js -->
<script src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js"></script> 
<script src="<?php echo base_url(); ?>js/modernizr.custom.js"></script> 
<!-- //js -->
</head>
<body>
	<!--banner-->	
	<div class="banner">		
		<div class="banr-info abt-bnr">
			<div class="logo">
				<a href="<?php echo base_url(); ?>index.html"><?=$judul ?></a>
			</div>			
		</div>
	</div>
	<!--//banner-->
	<!--navigation-->
	<div class="top-nav">
		<span class="menu">MENU</span>		
		<ul class="nav1 cl-effect-16">
			<li><a href="<?php echo base_url(); ?>Welcome/index" data-hover="Home">Home</a></li>
			<li><a href="<?php echo base_url(); ?>Welcome/about" data-hover="About">About</a></li>					
			<li><a href="<?php echo base_url(); ?>Welcome/index" data-hover="Gallery">Gallery</a></li>
			<li><a href="<?php echo base_url(); ?>Welcome/services" class="active">Services</a></li>
			<li><a href="<?php echo base_url(); ?>Welcome/login" data-hover="Login">Login</a></li>
			<li><a href="<?php echo base_url(); ?>Welcome/contact" data-hover="Contact">Contact</a></li>
		</ul>				
		<!-- script-for-menu -->
		 <script>
		   $( "span.menu" ).click(function() {
			 $( "ul.nav1" ).slideToggle( 300, function() {
			 // Animation complete.
			  });
			 });
		</script>
		<!-- /script-for-menu -->
	</div>
	<!--//navigation-->
	<!--services-->
	<div class="services">
		<div class="container">
		 <h3>Services</h3>
			<div class="services-grids">
				<div class="col-md-6 services-grid">
					<div class="col-md-6 srvcs-img">
						<img src="<?php echo base_url(); ?>images/img15.jpg" title="">
					</div>
					<div class="col-md-6 srvcs-text">
						<h4>Peralatan Lengkap</h4>
						<p>MySports menyediakan peralatan pendukung yang sangat lengkap dalam latihan olahraga.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-6 services-grid">
					<div class="col-md-6 srvcs-img">
						<img src="<?php echo base_url(); ?>images/img12.jpg" title="">
					</div>
					<div class="col-md-6 srvcs-text">
						<h4>Metode yang Tepat</h4>
						<p>MySports menggunakan metode-metode pelatihan yang tepat guna memaksimalkan perkembangan individu.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-6 services-grid">
					<div class="col-md-6 srvcs-img">
						<img src="<?php echo base_url(); ?>images/img13.jpg" title="">
					</div>
					<div class="col-md-6 srvcs-text">
						<h4>Trainer yang Handal</h4>
						<p>MySports menyediakan trainer-trainer yang handal dan bersertifikasi teruji di setiap bidangnya.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-6 services-grid">
					<div class="col-md-6 srvcs-img">
						<img src="<?php echo base_url(); ?>images/img14.jpg" title="">
					</div>
					<div class="col-md-6 srvcs-text">
						<h4>Relasi Olahraga</h4>
						<p>MySports mempunyai relasi yang sangat luas dengan mitra-mitra olahraga</p>
					</div>
					<div class="clearfix"></div>
				</div>								
				<div class="clearfix"> </div>
			</div>
		</div>
		<br>
	</div>	
	<!--//services-->
	<div class="brands">
		<div class="container">
			<ul>
				<li><img src="<?php echo base_url(); ?>images/1.png" alt=""/></li>
				<li><img src="<?php echo base_url(); ?>images/2.jpg" alt=""/></li>
				<li><img src="<?php echo base_url(); ?>images/3.jpg" alt=""/></li>
				<li><img src="<?php echo base_url(); ?>images/4.png" alt=""/></li>
				<li><img src="<?php echo base_url(); ?>images/5.png" alt=""/></li>
			</ul>
		</div>
	</div>
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-row">
				<div class="col-md-3 footer-grids">
					<h2><a href="<?php echo base_url(); ?>Welcome/index">MySports</a></h2>
					<p><a href="mailto:example@mail.com">singgihajiprasetyo@gmail.com</a></p>
					<p>+62 800 222 1111</p>
				</div>
				<div class="col-md-3 footer-grids">
					<h4>Navigation</h4>					
					<ul>
					<li><a href="<?php echo base_url();?>Welcome/index" >Home</a></li>
					<li><a href="<?php echo base_url();?>Welcome/about" >About</a></li>					
					<li><a href="#gallery" class="scroll" >Gallery</a></li>
					<li><a href="<?php echo base_url(); ?>Welcome/services" >Services</a></li>
					<li><a href="<?php echo base_url(); ?>Welcome/login" >Login</a></li>
					<li><a href="<?php echo base_url(); ?>Welcome/contact">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grids">
					<h4>Support</h4>
					<ul>
						<li><a href="<?php echo base_url(); ?>Welcome/services" >Services</a></li>
						<li><a href="<?php echo base_url(); ?>Welcome/contact">Contact</a></li>										
					</ul>
				</div>
				<div class="col-md-3 footer-grids">	
					<h4>Newsletter</h4>
					<p>Stay update with some <p>
					<form>					 
					    <input type="text" class="text" value="Enter Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Email';}">
						<input type="submit" value="Go">					 
				 </form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">	
			<p>Design Custom by Singgih Aji Prasetyo</p>	
			<p>Copyright © 2015 Sportz . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>					
		</div>
	</div>
	<!--//footer-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/bootstrap.js"> </script>
</body>
</html>