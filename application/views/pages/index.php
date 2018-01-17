<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>MySport</title>
<link href="<?php echo base_url(); ?>css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo base_url(); ?>css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
		<div class="banr-info">
			<div class="logo">
				<a class="<?php echo base_url();?>Welcome/index" href><?=$judul ?></a>
			</div>
			<div class="bnr-text">
				<div class="container">
					<h2><?=$h2_1 ?></h2>
					<h1><?=$h1_1 ?></h1>
					<h4><?=$h4_1 ?></h4>
				</div>
			</div>
		</div>
	</div>
	<!--//banner-->
	<!--navigation-->
	<div class="top-nav">
		<span class="menu">MENU</span>		
		<ul class="nav1 cl-effect-16">
			<li><a href="<?php echo base_url();?>Welcome/index" class="active" >Home</a></li>
			<li><a href="<?php echo base_url();?>Welcome/about" data-hover="About">About</a></li>					
			<li><a href="#gallery" class="scroll" data-hover="Gallery">Gallery</a></li>
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
	<!--banner-bottom-->
	<div class="bnr-botom">			
		<div class="col-md-5 bnr-botom-left">
			<div class="bnr-botom-info">
				<!-- banner-text Slider starts Here -->
				<script src="<?php echo base_url(); ?>js/responsiveslides.min.js"></script>
				<script>
					// You can also use "$(window).load(function() {"
						$(function () {
						// Slideshow 3
							$("#slider3").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
							}
						});	
					});
				</script>
				<!--//End-slider-script -->
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<h3><?=$h3_1 ?></h3>
							<p><?=$p_1 ?></p>						
						</li>
						<li>					
							<h3><?=$h3_2 ?></h3>
							<p><?=$p_2 ?></p>
						</li>
						<li>					
							<h3><?=$h3_3 ?></h3>
							<p><?=$p_3 ?></p>
						</li>
					</ul>
				</div>
			</div>
		</div>	
		<div class="col-md-7 bnr-botom-right">
			<img src="<?php echo base_url(); ?>images/img1.jpg" alt="">
		</div>
		<div class="clearfix"> </div>
	</div>			
	<!--//banner-bottom-->
	<!--home-about-->
	<div class="home-about">	
		<div class="container">
			<h4 class="title">About Us</h4>
			<div class="hm-about-grids">
				<div class="col-md-6 hm-grids-info">
					<h5><?=$hb_1 ?></h5>
					<p><?=$pb_1 ?></p>
				</div>
				<div class="col-md-6 hm-grids-info">
				<h5><?=$hb_2 ?></h5>
				<p><?=$pb_2 ?></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//home-about-->
	<!--work-->
	<div class="work" id="gallery">	
		<div class="container">
			<h4 class="title">Gallery</h4>
		</div>
		<!--light-box-js -->
			<script src="<?php echo base_url(); ?>js/jquery.chocolat.js"></script>
			<link rel="stylesheet" href="<?php echo base_url(); ?>css/chocolat.css" type="text/css" media="all" charset="utf-8" />
			<!--light-box-files -->
			<script type="text/javascript" charset="utf-8">
			$(function() {
				$('.moments-bottom a').Chocolat();
			});
			</script> 
		<!--//end-gallery js-->
		<div class="work-grids">
			<div class="col-md-4 work-left moments-bottom">
				<a href="<?php echo base_url(); ?>images/img2a.jpg">
					<img class="img-responsive" src="<?php echo base_url(); ?>images/img2.jpg" alt="">
					<div class="captn">
						<span>Click Me!</span>
					</div>
				</a>				
				<a href="<?php echo base_url(); ?>images/img3a.jpg">
					<img class="img-responsive" src="<?php echo base_url(); ?>images/img3.jpg" alt="">
					<div class="captn">
						<span>Click Me!</span>
					</div>
				</a>
			</div>
			<div class="col-md-8 work-right">
				<div class="work-img-left moments-bottom">	
					<a href="<?php echo base_url(); ?>images/img4a.jpg">
						<img class="img-responsive" src="<?php echo base_url(); ?>images/img4.jpg" alt="">
						<div class="captn">
							<span>Click Me!</span>
						</div>
					</a>
				</div>
				<div class="work-img-right moments-bottom">	
					<a href="<?php echo base_url(); ?>images/img5a.jpg">
						<img class="img-responsive" src="<?php echo base_url(); ?>images/img5.jpg" alt="">
						<div class="captn">
							<span>Click Me!</span>
						</div>
					</a>
				</div>				
				<div class="work-img-left2 moments-bottom">	
					<a href="<?php echo base_url(); ?>images/img6a.jpg">
						<img class="img-responsive" src="<?php echo base_url(); ?>images/img6.jpg" alt="">
						<div class="captn">
							<span>Click Me!</span>
						</div>
					</a>
				</div>
				<div class="work-img-right2 moments-bottom">	
					<a href="<?php echo base_url(); ?>images/img7a.jpg">
						<img class="img-responsive" src="<?php echo base_url(); ?>images/img7.jpg" alt="">
						<div class="captn">
							<span>Click Me!</span>
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//work-->
	<!--testimonial-->
	<div class="testi">		
		<div class="container">
			<h4 class="title">Testimonials</h4>
			<div class="testi-info">
				<div class="col-md-4 testi-grids">
					<span>1</span>
					<p><?=$pt1_1 ?></p>
					<p><?=$pt1_2 ?></p>
					<h5><?=$c1 ?>, CLIENT </h5>
				</div>
				<div class="col-md-4 testi-grids">
					<span>2</span>
					<p><?=$pt2_1 ?></p>
					<p><?=$pt2_2 ?></p>
					<h5><?=$c2 ?>, CLIENT </h5>
				</div>
				<div class="col-md-4 testi-grids">
					<span>3</span>
					<p><?=$pt3_1 ?></p>
					<p><?=$pt3_2 ?></p>
					<h5><?=$c3 ?>, CLIENT </h5>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//testimonial-->
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
			<p>Copyright © 2018 MySport . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>					
		</div>
	</div>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
	<!--//footer-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/bootstrap.js"> </script>
</body>
</html>