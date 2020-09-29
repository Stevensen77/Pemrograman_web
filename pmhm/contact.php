<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PT.PMHM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	
	<style>
	 @media (min-width: 991.98px) 
	 {
		 .navbar-collapse{
			 background:white;
			 margin-left:100px;
			 margin-right:-165px
		 }
		 #sesi_contact{
			 background-color:#e9e4e9;
			 height:1200px;
		 }
		 #div_contact{
			 margin-left:-150px;
			 margin-top:100px;
		 }
		  #div_contact h1{
		 margin-left:px;
		 margin-top:0px;
		  }
		  #p_contact_marketing_judul{
			  font-size:20px;
		  }
		  #p_contact_marketing_isi{
			  font-size:15px;
			  margin-top:0px;
		  }
		  #p_contact_factory_judul{
			  font-size:20px;
			  padding-top:15px;
		  }
		  #p_contact_factory_isi{
			  font-size:15px;
		  }
		  #div_email{
			  margin-top:-1050px;
			  margin-left:600px;
		  }
		  
		  .map-container{
			overflow:hidden;
			padding-bottom:56.25%;
			position:relative;
			width:50%;
		
			margin-left:-575px;
			margin-top:600px;
			}
			.map-container iframe{
			left:0;
			top:0;
			height:70%;
			width:100%;
			position:absolute;
			}
		  
	 }
	 </style>
	 
	 
	<?php
	include 'css/login_popup_css.php';
	?>
	 
	
</head>
<body>



	<?php
	include 'navbar.php';
	?>
    <!-- END nav -->

 
	
    <section class="ftco-section ftc-no-pb ftc-no-pt" id="sesi_contact" style="">
		<div class="container">
		<div class="row">
					
			<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate" id="div_contact" style="">
	 
				<h1 class="mb-4 bread" style="">Contact Information</h1>
 
				<div class="pb-md-5" style="margin-top:0px;">
					<p id="p_contact_marketing_judul" style=""><b>Marketing Office</b> 
					  <p id="p_contact_marketing_isi" style="">Jalan Griya Agung Blok O No.71,<br>Kompleks Pertokoan Griya Inti Sentosa,
					  <br>Jakarta Utara 14350<br>Indonesia<br>
					  </p>
					  </p>
					  
					  <p id="p_contact_factory_judul" style=""><b>Factory</b> </p>
					  <p id="p_contact_factory_isi" style="">Jalan Lintas Sumatera km 8,<br>Kotabumi, Lampung Utara 34581,<br>Indonesia<br>
					  </p>
        
				</div>
			</div>
	
	
		<div id="map-container" class="z-depth-1-half map-container" style="">
		  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.8671399366405!2d104.93846382915498!3d-4.860865999779389!
		  2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e38aa281f48d3d1%3A0xceb7c6705ed1c278!2sPuncak+Menara+Hijau+Mas%2C+PT!5e0!3m2!1sid!2sid!4v1548664844484" 
		  frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	
		<div class="ftco-animate" id="div_email" style="" >
				 
			<div >
			  <div class="">
				<form action="mailto:rubberwood@pt-pmhm.com"  method="post"  enctype="text/plain" class="bg-white p-5 contact-form">
				  <div class="form-group">
					<input type="text" class="form-control" placeholder="Your Name" name="Name">
				  </div>
				  <div class="form-group">
					<input type="text" class="form-control" placeholder="Your Email" name="Email">
				  </div>
				  <div class="form-group">
					<input type="text" class="form-control" placeholder="Subject" name="Subject">
				  </div>
				  <div class="form-group">
					<textarea cols="30" rows="7" class="form-control" placeholder="Message" name="Message"></textarea>
				  </div>
				  <div class="form-group">
					<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
				  </div>
				</form>
			  
			  </div>
			</div>
				 
		</div>
		
		
		
		</div>
		</div>
	</section>
	
 	<?php
	include 'footer.php';
	?>
  
    
  

  <!-- loader -->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>