<?php
// Initialize the session
session_start();

?>


<?php
if(isset($_POST['form'])){

    switch ($_POST['form']) {
        case "A":
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
										header("location: certification_lvlk.php");
										
									
								}
							} else{
								// Display an error message if username doesn't exist
								$kode_verifikasi_err = 'No account found with that username.';
							}
						} else{
						echo "<p style='font-size:40px'>Oops! Something went wrong. Please try again later.</p>";
						
					}
		
				}

			}
			
            break;

        case "B":
            include 'verifikasi_login.php';
            break;

        default:
            echo "What are you doing?";
    } 
} 
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
	
	 <link rel="stylesheet" href="css/style_popup.css">
	
	<style>
	 @media (min-width: 991.98px) 
	 {
		 .navbar-collapse{
			 background:white;
			 margin-left:100px;
			 margin-right:-165px
		 }
		 
		.folder {
	
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
		
		.back_button{
		width:110px;
		top:120px;
		margin-left:0px;
		z-index:3;
		}
		
		#folder2 img{
			width:80%;  
			position: absolute;
			top: 50%;
			left: 50%;
			-moz-transform: translateX(-50%) translateY(-50%);
			-webkit-transform: translateX(-50%) translateY(-50%);
			transform: translateX(-50%) translateY(-50%);
		}
		#sertifikat{
			width:900px;
		}
		#awards{
			width:100%;
		}
		.gambar_awards{
			float:left;
			margin-left:5%;
			margin-top:5%;
		  -webkit-box-flex: 0;
		  -ms-flex: 0 0 25%;
		  flex: 0 0 25%;
		  max-width: 25%; 
		  width: 25%;
		  height: 200px;
		}

	
	 } 
	 .pages-stack{
		 
		 height:100%;
		 background-color:white;
		 display:none;
		 margin:0 auto;
		 
		-webkit-animation: fadein 2s; 
       -moz-animation: fadein 2s; 
        -ms-animation: fadein 2s; 
         -o-animation: fadein 2s; 
            animation: fadein 2s;
	}


	/* Firefox < 16 */
	@-moz-keyframes fadein {
		from { opacity: 0; }
		to   { opacity: 1; }
	}

	/* Safari, Chrome and Opera > 12.1 */
	@-webkit-keyframes fadein {
		from { opacity: 0; }
		to   { opacity: 1; }
	}

	/* Internet Explorer */
	@-ms-keyframes fadein {
		from { opacity: 0; }
		to   { opacity: 1; }
	}

	/* Opera < 12.1 */
	@-o-keyframes fadein {
		from { opacity: 0; }
		to   { opacity: 1; }
		
	}
	
	 </style>

	<?php
	include 'css/login_popup_css.php';
	?>
	 
  </head>
<body>

  
<?php

?>

<!--  ---------------------------------------------------------------------------------------------------------------------------------------------- -->


	<?php
	include 'navbar.php';
	?>
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
        <div class="row" > 
			
			<div class="folder" id="folder1"><p >Awards</p></div>
			
			<div align="center" class="pages-stack" id="awards" style="">
				<a href="#" class="kembali"> <img class="back_button" src="images/back.png" /></a>
				 <h3 style="font-size:20px" align="center"><i>AWARDS</i></h3>
				 <img src="images/paramakarya.jpg" class="gambar_awards">
				 <img src="images/sertifikat_lvlk.jpg" class="gambar_awards" >
				 <img src="images/sertifikat_lvlk.jpg" class="gambar_awards" >
				  <img src="images/sertifikat_lvlk.jpg" class="gambar_awards" >
			</div>

<!--  ============================================================================================================================================================ -->	
			
			<div class="folder" id="folder2">
			<img src="images/sertifikat_lvlk.jpg" style="">
			<p style="">Certificate</p>
			</div>
					
			<div class="pages-stack" id="certificate" style="">
				<a href="#" class="kembali"> <img class="back_button" src="images/back.png" /></a>
				 <h3 style="font-size:20px" align="center"><i>LVLK Certification</i></h3>
				 <img id="sertifikat" src="images/sertifikat_lvlk.jpg" class="" >
				 
				 
	
			</div>
		
			
			
<!--  ============================================================================================================================================================ -->		
			
			<div class="folder" id="folder3"><p >Gallery Product</p></div>
			
			<div align="center" class="pages-stack" id="gallery" style="">
				<a href="#" class="kembali"> <img class="back_button" src="images/back.png" /></a>
				 <h3 style="font-size:20px" align="center"><i>Scroll Mouse in the picture to Zoom in</i></h3>
				 <img src="images/sertifikat_lvlk.jpg" class="" width="600px">
				 <p style="font-size:20px" align="center"><i>(LVLK Certification)</i></p>

			</div>
			
<!--  ============================================================================================================================================================ -->	
			
			<input type="checkbox" id="modal" />
			<label for="modal" class="folder">
				<p >Legal Documents</p>
			 </label>
			 <label for="modal" class="modal-bg"></label>
					<div class="modal-content-hidden">
						<label for="modal" class="close">
							<i class="fa fa-times" aria-hidden="true"></i>
						</label>
						<header>
							<h2>Warning</h3>
						</header>
						<article class="content">
							<p>You must enter a verification code before you can view this file</p>
						<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<input type="text" name="kode_verifikasi">
							
						</article>
						<footer>
							<input type="hidden" name="form" value="A">
							<button href="" target="_parent" class="button success">Accept</button>
						</form>
							<label for="modal" class="button danger">Decline</label>
						</footer>
					</div>
			
			
		
        
      </div>

    </section>
	
	
    
	<?php
	include 'footer.php';
	?>
  

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