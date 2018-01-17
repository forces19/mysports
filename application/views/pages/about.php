<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Sportz a Sports Category Flat bootstrap Responsive website Template | About :: w3layouts</title>
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
			<li><a href="<?php echo base_url(); ?>Welcome/about" class="active">About</a></li>					
			<li><a href="<?php echo base_url(); ?>Welcome/index" data-hover="Gallery">Gallery</a></li>
			<li><a href="<?php echo base_url(); ?>Welcome/services" data-hover="Services">Services</a></li>
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
	<!--about-->
	<div class="about">
		<div class="container">			
			<div class="about-info">
				<div class="col-md-6 about-grids">	
					<h3>Who We Are </h3>
					<img src="<?php echo base_url(); ?>images/img2.jpg" alt=""/>					
				</div>				
				<div class="col-md-6 about-grids">
					<h3>Our Speacials</h3>
					<h5>MySports memiliki trainer-trainer berkualitas</h5>
					<p>Trainer-trainer yang tersedia di MySports merupakan trainer terpilih yang
						mempunyai keahlian dan sertifikasi di bidang olahraga masing-masing.</p>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="">
										Tennis
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
								<div class="panel-body">
									MySports menyediakan trainer tennis yang handal dalam mengajar.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Sepak Bola
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
								<div class="panel-body">
									MySports menyediakan trainer sepak bola yang handal dalam mengajar.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			 							Bola Basket
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
								<div class="panel-body">
									MySports menyediakan trainer bola basket yang handal dalam mengajar.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFour">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										Renang
									</a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" aria-expanded="false">
								<div class="panel-body">
									MySports menyediakan trainer renang yang handal dalam mengajar.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFive">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
										Golf
									</a>
								</h4>
							</div>
							<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" aria-expanded="false">
								<div class="panel-body">
									MySports menyediakan trainer golf yang handal dalam mengajar.
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--team-->
			<div class="team">
				<h3>Our Team Members</h3>
				<div class="team-info">
					<div class="col-md-3 team-grids">
						<a href="#">
							<img class="img-responsive" src="<?php echo base_url(); ?>images/img8.jpg" alt="">
							<div class="captn">
								<h4>Jane</h4>
								<p>Salah satu trainer terbaik di MySports</p>
							</div>
						</a>
					</div>					
					<div class="col-md-3 team-grids">
						<a href="#">
							<img class="img-responsive" src="<?php echo base_url(); ?>images/img9.jpg" alt="">
							<div class="captn">
								<h4>Jonathan</h4>
								<p>Salah satu trainer terbaik di MySports</p>
							</div>
						</a>
					</div>
					<div class="col-md-3 team-grids">
						<a href="#">
							<img class="img-responsive" src="<?php echo base_url(); ?>images/img10.jpg" alt="">
							<div class="captn">
								<h4>Sarah</h4>
								<p>Salah satu trainer terbaik di MySports</p>
							</div>
						</a>
					</div>
					<div class="col-md-3 team-grids">
						<a href="#">
							<img class="img-responsive" src="<?php echo base_url(); ?>images/img11.jpg" alt="">
							<div class="captn">
								<h4>Sam</h4>
								<p>Salah satu trainer terbaik di MySports</p>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!--//team-->
		</div>
	</div>
	<!--//about-->		
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