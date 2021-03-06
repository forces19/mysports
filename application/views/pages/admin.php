<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Sportz a Sports Category Flat bootstrap Responsive website Template | Typo :: w3layouts</title>
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
				<a href="<?php echo base_url(); ?>index.html">Sportz</a>
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
			<li><a href="<?php echo base_url(); ?>Welcome/login" class="active">Login</a></li>
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
	<!--typography-page -->
	<div class="typo">
		<div class="container">
			<h3 class="typo-title">Tabel Konten</h3>
			<table border="1px" align="center" width="100%" style="text-align: center;">
				<tr>
					<th>Nama</font></th>
					<th>Deskripsi</th>					
					<th colspan="2">Aksi</th>
				</tr>
				<?php foreach ($sql->result() as $obj1) {
				?>
				<tr>
					<td><?php echo $obj1->name; ?></td>
					<td><?php echo $obj1->description; ?></td>
					<td align="center">
					<a href="<?php echo base_url(); ?>admin/ubah/<?php echo $obj1->id; ?>" class="btn btn-success btn-sm" role="button">Edit</a>
					<a href="<?php echo base_url(); ?>admin/hapus/<?php echo $obj1->id; ?>" class="btn btn-danger btn-sm" role="button">Delete</a>
					</td>
				</tr>
			<?php } ?>
			</table>
			<center class="btn-bot">
			<span>
				<a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/tambah'); ?>">Tambah</a>
				<a class="btn btn-sm btn-primary" href="<?php echo base_url('login/logout'); ?>">Logout</a>
			</span>
			</center>			
		</div>
	</div>
	<!-- //typography-page -->		
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-row">
				<div class="col-md-3 footer-grids">
					<h2><a href="<?php echo base_url(); ?>index.html">Sportz</a></h2>
					<p><a href="mailto:example@mail.com">mail@example.com</a></p>
					<p>+2 000 222 1111</p>
				</div>
				<div class="col-md-3 footer-grids">
					<h4>Navigation</h4>					
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About us</a></li>
						<li><a href="index.html">Gallery</a></li>
						<li><a href="typo.html">Typo</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grids">
					<h4>Support</h4>
					<ul>
						<li><a href="services.html">Services</a></li>
						<li><a href="#">Help Center</a></li>
						<li><a href="#">Lemollisollis</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grids">	
					<h4>Newsletter</h4>
					<p>It was popularised in the 1960s with the release Ipsum. <p>
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