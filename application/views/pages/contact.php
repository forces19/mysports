<!DOCTYPE html>
<html>
<head>
<title>Sportz a Sports Category Flat bootstrap Responsive website Template | Contact :: w3layouts</title>
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
			<li><a href="<?php echo base_url(); ?>Welcome/services" data-hover="Services">Services</a></li>
			<li><a href="<?php echo base_url(); ?>Welcome/login" data-hover="Login">Login</a></li>
			<li><a href="<?php echo base_url(); ?>Welcome/contact" class="active">Contact</a></li>
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
	<!--contact-->
	<div class="contact">
		<div class="container">
			<h3>How to find us</h3>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6925.7845345922005!2d-74.92122031258997!3d41.30321009405625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c35edf5c7d9acd%3A0x921fa9f667742cc2!2sWilkers+Rd%2C+Milford%2C+PA+18337%2C+USA!5e0!3m2!1sen!2sin!4v1437040591996" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>			
			<div class="contact-info">
				<div class="col-md-8 contact-form">
					<h3>Contact form</h3>
					<form>
						<div class="col-md-6 contact-grids">
							<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
							<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
						</div>
						<div class="col-md-6 contact-grids">
							<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>							
						</div>
						<div class="clearfix"> </div>
						<input type="submit" value="Submit" >
					</form>
				</div>
				<div class="col-md-4 address">
					<h3>Contact info</h3>
					<p class="cnt-p">Jika anda mempunyai pertanyaan-pertanyaan lebih lanjut dapat menghubungi kami di data berikut:</p>
					<p>Eiusmod Tempor inc</p>
					<p>9560 wikers road, USA</p>
					<p>Telephone : +2 800 544 6035</p>
					<p>FAX : +62 800 889 4444</p>
					<p>Email : <a href="mailto:singgihajiprasetyo@gmail.com">singgihajiprasetyo@gmail.com</a></p>
				</div>				
				<div class="clearfix"> </div>	
			</div>	
		</div>
	</div>
	<!--//contact-->		
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
    <script src="js/bootstrap.js"> </script>
</body>
</html>