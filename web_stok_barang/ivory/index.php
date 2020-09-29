 <?php  
 $connect = mysqli_connect("localhost", "root", "", "db_ivory");  
 session_start();  
  
 if(isset($_POST["register"]))  	  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);
		   $fullname = mysqli_real_escape_string($connect, $_POST["nama"]);
		   $position = mysqli_real_escape_string($connect, $_POST["posisi"]);
		   $hp = mysqli_real_escape_string($connect, $_POST["hp"]); 		   
           $query = "INSERT INTO users (username, password, fullname, position, hp) VALUES('$username', '$password', '$fullname', '$position', '$hp')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }
		  else{
			  echo '<script>alert("Gagal mendaftar")</script>';
		  }
      }  
   
 
 ?>  

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Input Data</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/form-basic.css">
		
	</head>
	<body>
		<div class="main-wrapper-first">
			<header>
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="index.php"><img src="img/logo.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="banner-area">
				<div class="container">
					<div class="row justify-content-center height align-items-center">
						<div class="col-lg-8">
							<div class="banner-content text-center">
								<br><br>
								<span class="text-white top text-uppercase">Hi, (username)</span>
								<h1 class="text-white">Registrasi</h1>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Start Feature Area -->
			<section class="amazing-works-area">
			    
    				<form class="form-basic" method="post">
    				    
                        <div class="form-row">
                            <label>
                                <span>Masukkan Username</span>
                                <input name="username" type="text" id="" placeholder="" value="" required /> </input>
                            </label>
                        </div>
						
						<div class="form-row">
                            <label>
                                <span>Masukkan Password</span>
                                <input name="password" type="password" id="" placeholder="" value="" required /> </input>
                            </label>
                        </div>
						
						 <div class="form-row">
                            <label>
                                <span>Masukkan Nama</span>
                                <input name="nama" type="text" id="" placeholder="" value="" required /> </input>
                            </label>
                        </div>
						
						<div class="form-row">
                            <label>
                                <span>Masukkan Position</span>
                                <input name="posisi" type="text" id="" placeholder="" value="" required /> </input>
                            </label>
                        </div>
						 <div class="form-row">
                            <label>
                                <span>Masukkan Nomor Handphone</span>
                                <input name="hp" type="text" id="" placeholder="" value="" required /> </input>
                            </label>
                        </div>
						
                        <div class="form-row justify-content-center">
                            <input type="submit" class="primary-btn d-inline-flex align-items-center " name="register" value="Register"></input>
							<button type="button" onclick="window.location.href = 'login.php';" class="primary-btn d-inline-flex align-items-center ">Login<span class="lnr lnr-arrow-right"></span></button>

                        </div>
            
                    </form>
			</section>
			<!-- End Feature Area -->
			
			<!-- Start Footer Widget Area -->
			<section class="footer-widget-area">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="single-widget d-flex flex-wrap justify-content-between">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="lnr lnr-pushpin"></span>
								</div>
								<div class="desc">
									<h6 class="title text-uppercase">Address</h6>
									<p>Gedung Graha Merah Putih <br> Jl. Jendral Sudirman,<br>Gatot Subroto kav 54<br>Jakarta Selatan, Jakarta 10210</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-widget d-flex flex-wrap justify-content-between">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="lnr lnr-earth"></span>
								</div>
								<div class="desc">
									<h6 class="title text-uppercase">Email Address</h6>
									<div class="contact">
										<a href="mailto:940071@telkom.co.id">940071@telkom.co.id</a> <br>
										<a href="mailto:940286@telkom.co.id">940286@telkom.co.id</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-widget d-flex flex-wrap justify-content-between">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="lnr lnr-phone"></span>
								</div>
								<div class="desc">
									<h6 class="title text-uppercase">WA/Telegram</h6>
									<div class="contact">
										<a href="tel:081320135038">081320135038 Kalam</a> <br>
										<a href="tel:081322447776">081322447776 Sarah</a>
									</div>
								</div>
							</div>
						</div>
					</div>
			</section>
			<!-- End Footer Widget Area -->
			<center><h6 style="color:white">&#169;Copyright by : Farhan Steven - Rillo Sen</h6></center>	
			
		</div>




		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/maintable.js"></script>
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/select2/select2.min.js"></script>
		
	</body>
</html>
