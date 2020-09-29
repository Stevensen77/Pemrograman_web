	
	<?php
	include 'verifikasi_login.php';
	?>

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
	<link rel="stylesheet" href="css/popup.css">
	 <link rel="stylesheet" href="css/style_popup.css">
	 
	
	<style>
	 @media (min-width: 991.98px) 
	 {
		 .navbar-collapse{
			 background:white;
			 margin-left:100px;
			 margin-right:-165px;
			
		 }
	 }
	 
	  @media (min-width: 991.98px) 
	 {
		 p#bawah_header{
			margin-top:18%
		 }
		 #about_home{
			 width:300px;
			 height:50%;
			 margin-top:30px;
		 }
		 #sesi_about_home{
			 height:350px;
		 }
		 .wrap-about{
			margin-left:80px;
		 }
		 .wrap-about h2{
			 margin-top:-78px;
			 margin-left:-45px;
		 }
		 .wrap-about .pb-md-5 p{
			 margin-top:-60px
		 }
		 a#link_sertifikat{
			 margin-top:300px;
			 margin-left:-250px;
			 font-size:20px;
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

    <section class="home-slider owl-carousel">
	
		<?php
					$db = mysqli_connect("localhost","root","","pmhm"); 
					$sql = "SELECT * FROM produk WHERE kategori ='header'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
		?>
	
      <div class="slider-item" style="background-image:url(
	  <?php
	  echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>
					)">
      	
        <div class="container">
          <div class="slider-text align-items-center justify-content-center">
          <!--  tempat text di dalam image header -->
		  </div>
        </div>
      </div>

      <?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='header_2'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
		?>
	
      <div class="slider-item" style="background-image:url(
	  <?php
	  echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>
					)">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          <!--  tempat text di dalam image header -->
          </div>
        </div>
        </div>
      </div>
    </section>

	<p class="mb-3" id="bawah_header"  align="center" style="font-size:22px;padding-bottom:1%;color:black;
				text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
				font-family: 'Georgia', Times, serif;"> <!-- css lain diatas -->
				“ Proudly Present World Quality Rubberwood Products From Kotabumi - North Lampung ”</p>

    <section class="ftco-section ftc-no-pb ftc-no-pt" id="sesi_about_home" style="background-color:#e9e4e9;">
			<div class="container">
			<div class="row">
					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='logo_certificate'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
		
					?>
				<a href="documentation.php">
				<div class="about_home" id="about_home">
				 <img src="<?php
				echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>">
				</div>
				</a>
				<a id="link_sertifikat" href="certification_lvlk.php">Link to Certification</a>
				
				
				<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate" id="wrap-about">
				  <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
					<div class="ml-md-0">
						<h2 class="mb-4">About Us</h2>
					</div>
				  </div>
				  <div class="pb-md-5">
								<p align="justify">
								<?php echo "".$result['deskripsi']."";?>
								<a href="about.php" >(Read more)</a>
								</p>
								
					</div>
				</div>
			</div>
			</div>
		</section>
		
	<p class="mb-3" align="center" style="font-size:22px;margin-top:30px;padding-bottom:20px;color:black;
				text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
				font-family: 'Georgia', Times, serif;">
				“ Ask us how we can customize rubberwood into your requirement. ”
	</p>
	<div style="background-color:#e9e4e9">
	<?php
		$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
		$sql = "SELECT * FROM produk WHERE kategori ='pameran'";
		$sth = $db->query($sql);
		$result=mysqli_fetch_array($sth);
					
	?>
	<center><img src="<?php
				echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>
				"></center>
	</div>
	
	
	<p class="mb-3" align="center" style="font-size:22px;margin-top:30px;padding-bottom:20px;color:black;
				text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
				font-family: 'Georgia', Times, serif;">
				“ We aim for competitive price, quality, punctual delivery, safe working environment and renewable forestry. ”
	</p>
	
    <section class="ftco-section bg-light">
    	<div class="container" >
		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4" style="margin-top:-80px">Our Products</h2>
          </div>
        </div>    		
    		<div class="row" style="margin-top:-60px">
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate"> <!--col-lg-4 untuk lebar 25% -->
    				<div class="room">
					
					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='Sawn_timber'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					?>
					
    				<a href="product.php#legal_sawn_timber" class="img d-flex justify-content-center align-items-center" >
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
					?>
    				</a>
					
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">Sawn Timber</a></h3>
 
    					</div>
    				</div>
    			</div>
				
<!-- ================================================================================================================================================ -->	
	
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
    					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='s4s'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
				
					?>
					
    				<a href="product.php#moulding" class="img d-flex justify-content-center align-items-center" >
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
					?>
    					</a>
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">Moulding</a></h3>
    					</div>
    				</div>
    			</div>
<!-- ================================================================================================================================================ -->	
					
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
    				<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='finger_joint'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					
					?>
					
    				<a href="product.php#moulding" class="img d-flex justify-content-center align-items-center" >
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
					?>	
    				</a>
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">Finger Joint</a></h3>
    						
    					</div>
    				</div>
    			</div>
<!-- ================================================================================================================================================ -->	
	    		
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='component'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					
					?>
    					<a href="product.php#component" class="img d-flex justify-content-center align-items-center";">
    					<?php
						echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
						?>		
    					</a>
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">Component</a></h3>
    						
    					</div>
    				</div>
    			</div>
<!-- ================================================================================================================================================ -->	
	
				<div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='veneer'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
					?>
    					<a href="product.php#veneer" class="img d-flex justify-content-center align-items-center">
    					<?php
						echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
						?>		
    					</a>
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
     						<h3 class="mb-3"><a href="product.php">Veneer</a></h3>
    						
    					</div>
    				</div>
    			</div>
<!-- ================================================================================================================================================ -->	
					
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='plywood'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					?>
    					<a href="product.php#plywood" class="img d-flex justify-content-center align-items-center">
    					<?php
						echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
						?>		
    					</a>
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">Plywood</a></h3>
    						
    					</div>
    				</div>
    			</div>
<!-- ================================================================================================================================================ -->	
					
				<div class="col-sm ftco-animate">
    				<div class="room">
					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='furniture'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					?>
    					<a href="product.php#furniture" class="d-flex justify-content-center align-items-center"> <!--  class img yang mengatur batasan frame image -->
    					<?php
						echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar']).'" style="width:100%;height:100%"/>';
						?>		
    					</a>
    					<div class="text p-3 text-center" style="background-color:#e9e4e9;width:100%">
    						<h3 class="mb-3"><a href="product.php">Finished Product/Furniture</a></h3>
    						
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
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
  <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
  <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
   <script src="menu_responsive.js"></script>
  

    
  </body>
</html>