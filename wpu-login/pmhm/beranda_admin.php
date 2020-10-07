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
	
	 <link rel="stylesheet" href="css/style_popup.css">
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	<style>
	 @media (min-width: 991.98px) 
	 {
		 .navbar-collapse{
			 background:white;
			 margin-left:100px;
			 margin-right:-165px
		 }
		 
		.folder {
		max-width: 33%; 
		width: 150px;
		height: 105px;
		margin: 0 auto;
		margin-top: 50px;
		position: relative;
		background-color: #708090;
		border-radius: 0 6px 6px 6px;
		box-shadow: 4px 4px 7px rgba(0, 0, 0, 0.59);
		}
		.folder p{
		color:red;
		font-size:15px;
		margin-left:30%;
		margin-top:80%;
		
		}

		.folder:before {
			content: '';
			width: 50%;
			height: 12px;
			border-radius: 0 20px 0 0;
			background-color: #708090;
			position: absolute;
			top: -12px;
			left: 0px;
		}

	 }
	 </style>

	 
	 
  </head>
  <body>

  
<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$kode_verifikasi ="";
$kode_verifikasi_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if code verification is empty
    if(empty(trim($_POST["kode_verifikasi"]))){
        $kode_verifikasi_err = 'Please enter Verification Code.';
    } else{
        $kode_verifikasi = trim($_POST["kode_verifikasi"]);
    }
    
   
    
    // Validate credentials
    if(empty($kode_verifikasi_err)){
        // Prepare a select statement
        $sql = "SELECT kode FROM kode_verifikasi WHERE kode = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_kode_verifikasi);
            
            // Set parameters
            $param_kode_verifikasi = $kode_verifikasi;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $kode_verifikasi);
                    
                            session_start();
                            $_SESSION['kode_verifikasi'] = $kode_verifikasi;      
                            header("location: documentation_detail.php");
                        
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $kode_verifikasi_err = 'No account found with that username.';
                }
            } else{
			echo "<p style='font-size:40px'>Oops! Something went wrong. Please try again later.</p>";
            
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!--  ---------------------------------------------------------------------------------------------------------------------------------------------- -->


   <nav class="navbar navbar-expand-lg bg-dark ftco-navbar-light" id="ftco-navbar"> <!--class:ftco-navbar untuk menu mengikuti scroll kebawah  -->
	    <div class="container" style="background-color:white;opacity:0.8;margin-left:2%;">
			<a class="navbar-brand" style="color:#da1919;font-size:1.8vw">
			<?php
			$db = mysqli_connect("localhost","root","","pmhm"); 
			$sql = "SELECT * FROM produk WHERE kategori ='logo_pmhm'";
			$sth = $db->query($sql);
			$result=mysqli_fetch_array($sth);			
			?>
			<img src="<?php
			echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" width="22%" style="opacity: 0.8;">
	
			PT.PUNCAK MENARA HIJAU MAS</a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu" style="color:red;"></span> Menu
			</button>
			
			
			<div class="collapse navbar-collapse" id="ftco-nav" style="opacity:1;<!-- css lain diatas -->">
				<ul class="navbar-nav ml-auto" style="width:100%;">
				  <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
				  <li class="nav-item"><a href="about.php" class="nav-link">Introduction</a></li>
				  <li class="nav-item"><a href="product.php" class="nav-link">Products</a></li>
				  <li class="nav-item"><a href="documentation.php" class="nav-link">Documentation</a></li>
				  <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
				</ul>
			</div>
	    </div>
	</nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background:#e9e4e9;""> <!--div kosong putih belakang menu -->
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


   
	
    <section class="ftco-section"  style="background-color:#e9e4e9">
      <div class="container">
		
	  
		<img src="login/images/admin.png" style="margin:0 auto;">
		
	
	
        
      </div>
	  <div align="center">
	  
	  <!--
		<h3 style="font-size:20px" align="center"><i>Scroll Mouse in the picture to Zoom in</i></h3>
         <img src="images/sertifikat_lvlk.jpg" class="zoom" width="600px">
		 <p style="font-size:20px" align="center"><i>(LVLK Certification)</i></p>
         <img src="images/sawn_timber_3.jpg" class="zoom2" width="600px">
		 <p style="font-size:20px" align="center"><i>(Sawn Timber)</i></p>
		
		
		 <br><br>
		 
		 <input type="checkbox" id="modal" />
		 <label for="modal" class="modal-btn">
			<i class="fa fa-fire" aria-hidden="true"></i>
		</label>
		 <p style="font-size:20px" align="center"><i>Perijinan Perusahaan</i></p>
		 <label for="modal" class="modal-bg"></label>
				<div class="modal-content">
					<label for="modal" class="close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</label>
					<header>
						<h2>Warning</h3>
					</header>
					<article class="content">
						<p>You must enter a verification code before you can view this file</p>
						<form method="post">
						<input type="text" name="kode_verifikasi">
						
					</article>
					<footer>
						<button href="" target="_parent" class="button success">Accept</button>
						</form>
						<label for="modal" class="button danger">Decline</label>
					</footer>
				</div>
		-->
      </div>
    </section>
	
	
    
	
<footer class="ftco-footer ftco-bg-dark ftco-section" style="height:45%">
      <div class="container" style="margin-top:-8%;margin-bottom:-8%">
        <div class="row mb-5">
      
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2" style="font-size:30px">Shortcut Links</h2>
              <ul class="list-unstyled" style="margin-top:-30px;font-weight:bold">
                <li><a href="index.php" class="py-2 d-block">Home</a></li>
				<li><a href="about.php" class="py-2 d-block">Introduction</a></li>
                <li><a href="product.php" class="py-2 d-block">Products</a></li>
				<li><a href="documentation.php" class="py-2 d-block">Documentation</a></li>
                <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
		  
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2" style="font-size:30px">Contact Us</h2>
            	<div class="block-23 mb-3">
	              <ul style="margin-top:-20px">
					<li><span class="text" style="font-weight:bold">Factory</span></li>
	                <li><span class="text">Jalan Lintas Sumatera km 8,<br> Kotabumi, Lampung Utara<br>Post Code 34581<br>Indonesia</span></li>
	              </ul>
	            </div>
            </div>
          </div>
		  

          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2" style="color:#0a0a29">.</h2>
            	<div class="block-23 mb-3">
	              <ul>
					<li><span class="text" style="font-weight:bold">Marketing Office</span></li>
	                <li><span class="text">Jalan Griya Agung Blok O No.71,<br> Kompleks Pertokoan Griya Inti Sentosa<br>Jakarta Utara
					<br>Post Code 14350<br>Indonesia</span></li>
					<li><a href="mailto:rubberwood@pt-pmhm.com"><span class="text">rubberwood@pt-pmhm.com</span></a></li>
	                <!--  <li><a href="#"><span class="icon icon-phone"></span><span class="text">08 - </span></a></li> -->
	                
	              </ul>
	            </div>
            </div>
			<div class="col-md">
					<div class="ftco-footer-widget mb-4" style="margin-top:-60px">
					  <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
						<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
						<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
						<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
					  </ul>
					</div>
				</div>
          </div>
        </div>
        <div class="row" style="margin-top:-30px;">
          <div class="col-md-12 text-center">

	<p style="font-family:verdana">
	Copyright &copy;2019 All rights reserved | PT.Puncak Menara Hijau Mas
	</p>
          </div>
        </div>
      </div>
	  <a href="https://colorlib.com" target="_blank" style="float:right;font-size:20px;color:#0a0a29;margin-top:-10%">Colorlib</a>
  
 </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

	
	
	<script src="js/wheelzoom.js"></script>
	<script src="js/wheelzoom2js"></script>
	<script>
		wheelzoom(document.querySelector('img.zoom'));
	</script>
	<script>
		wheelzoom(document.querySelector('img.zoom2'));
	</script>
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
  <script src="js/mapbox.min.js"></script>
    
  </body>
</html>