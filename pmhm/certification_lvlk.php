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
		 #sesi_sertifikat{
			 margin-top:0px;
			 margin-bottom:0px;
			 background:#e9e4e9;
		 }
		 #sesi_sertifikat h1
		 {
		 margin-top:-70px;
		 }
		 #sesi_sertifikat #gambar_sertifikat{
		 width:900px;
		 }
		 
		.back_button{
			width:100px;
			top:150px;
			left:0;
			position:fixed;
			z-index:4;
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
	
	<div class="hero-wrap" style="background:#e9e4e9;"> <!--div kosong putih belakang menu -->
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            
	            
            </div>
          </div>
        </div>
      </div>
    </div>
  

  <a href="documentation.php" ><img class="back_button" src="images/back_button.png" style=""/></a>
    <section class="ftco-section ftco-degree-bg" id="sesi_sertifikat" style="">
		
      <div class="container" >
	  
		<h1 class="mb-4 bread" align="center" style="">VLK Certificate</h1>
		<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='lvlk_certificate'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
		?>
		<center><img src="<?php
				echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" id="gambar_sertifikat" alt="" class="img-fluid" style=""></center>
        <div class="row">		
          <div class="col-lg-8 ftco-animate order-md-last">

    

        </div>
      </div>
	  </div>
    </section> <!-- .section -->
	
	
	

	<?php
	include 'footer.php';
	?>
  
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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