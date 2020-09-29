	
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
	<style>
	 @media (min-width: 991.98px) 
	 {
		 .navbar-collapse{
			 background:white;
			 margin-left:100px;
			 margin-right:-165px;
		 }
		 #legal_sawn_timber{
			 margin-left:280px;
		 }
		 #legal_sawn_timber h2{
			 margin-top:-10px;
		 }
		 #menu_kategori{
			 margin-top:-30px;
		 }
		 .pb-md-5{
			 text-align:justify;
		 };
		 #moulding{
			 margin-left:280px;
			 margin-top:50px;
		 }
		 #rubberwood_log{
			 background-color:#e9e4e9;
			 height:350px;
			 margin-top:-20px;
		 }
		 #rubberwood_log img{
			 width:450px;
			 height:350px;
			 margin-top:30px;
		 }
		 #rubberwood_log h2{
			 margin-top:-78px;
			 margin-left:-45px;
		 }
		 #rubberwood_log p{
			 margin-top:-60px;
		 }
		 .sesi_legal_rubberwood{
			 background-color:#e9e4e9;
			 height:350px;
		 }
		 .sesi_legal_rubberwood h2{
		 margin-top:-78px;margin-left:-45px
		}
		 .sesi_legal_rubberwood img{
		 width:450px;
		 height:350px;
		 margin-top:30px
		  }
		 .sesi_legal_rubberwood p{ 
		  margin-top:-60px;
		  }
		  #sesi_moulding{
			  background-color:#e9e4e9;
			  height:650px;
			  margin-top:-20px;
			  margin-bottom:20px;
		  }
		  #sesi_moulding .row{
		  margin-top:-65px;
		  }
		  #component{
			  margin-left:280px;
			  margin-top:-10px;
		  }
		  #sesi_component{
			  background-color:#e9e4e9;
			  height:370px;
			  margin-bottom:20px;
		  }
		  #veneer{
			  margin-left:280px;
			  margin-top:20px;
		  }
		  #sesi_veneer{
			  background-color:#e9e4e9;
			  height:370px;
			  margin-bottom:20px;
		  }
		  #sesi_veneer .room{
			  height:350px;
		  }
		  .lebar_foto{
			  margin: 0 auto;
		  }
		  #plywood{
			  margin-left:280px;
			  margin-top:20px;
		  }
		  #sesi_plywood{
			  background-color:#e9e4e9;
			  height:320px;
			  margin-top:-20px;
			  margin-bottom:50px;
		  }
		  #sesi_plywood img{
			  width:450px;
			  height:320px;
			  margin-top:30px;
		  }
		  #sesi_plywood h2{
			  margin-top:-78px;
			  margin-left:-45px;
		  }
		  #sesi_plywood p{
		  margin-top:-60px
			}
		  #furniture{
			margin:0 auto;
			}
		  #sesi_furniture{
			background-color:#e9e4e9;
			height:560px;
		  }
		  #quote_penutup{
			  background-color:#e9e4e9;
			  font-size:22px;
			  margin-top:0px;
			  margin-bottom:-10px;
			  padding-bottom:33px;
			  color:black;
			text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
			font-family: 'Georgia', Times, serif;
		  }
	 }
	 </style>
	 
	 <?php
	include 'css/login_popup_css.php';
	?>
	
	
  </head>
 <!-- ================================================================================================================================================ -->	 
  
  <body>
	<!-- class menu yang mengikuti ketika scroll kebawah = ftco_navbar-->
   
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

<!-- ================================================================================================================================================ -->	
     
	  <div class="ftco-section bg-light" style="margin-top:-50px;margin-bottom:-130px"> <center><a href="e-catalog/login.php"><img src="images/ecatalog.jpg" style="width:1200px;height:120px;"></a></center>
	 </div>  
    <section class="ftco-section bg-light">
	  
    	<div class="row">
	      <div class="col-lg-9">
				<div class="pixel-projects-menu" id="menu_kategori" style="">
						<div class="text-center" id="portfolio-menu">
							<button class="btn_kategori active" id="btn1">All Products</button>
							<button class="btn_kategori" id="btn2" >Legal Sawn Timber</button>
							<button class="btn_kategori" id="btn3" >Moulding</button>
							<button class="btn_kategori" id="btn4" >Component</button>
							<button class="btn_kategori" id="btn5" >Veneer</button>
							<button class="btn_kategori" id="btn6" >Plywood</button>
							<button class="btn_kategori" id="btn7" >Finished Product / Furniture</button>
						</div>
				</div>
					
					
		<div class="row " id="pixel-portfolio">

<!-- ================================================================================================================================================ -->	
			
<!-- ================================================================================================================================================ -->	
			
			<div class="col-md-7 heading-section text-center ftco-animate satu" id="legal_sawn_timber" style="">
            <h2 class="mb-4" style="">Legal Sawn Timber</h2>
			</div>
		 
			<section class="ftco-section ftc-no-pb ftc-no-pt ftco-animate satu" id="rubberwood_log" style="">
			
			<div class="container">
			<div class="row">
				
				<a href="#">
				
				<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='mobilisasi'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
				?>
				<img src="<?php
				echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" style="">
				
				</a>
				
			<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate" style="">
	          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4" style="">Rubberwood Log</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p style=""><?php echo "".$result['deskripsi']."";?>
							</p>

				</div>
			</div>
			</div>
			</div>
			</section>
			
<!-- ================================================================================================================================================ -->	
						
			<section class="ftco-section ftc-no-pb ftc-no-pt satu sesi_legal_rubberwood" style="">
			<div class="container">
			<div class="row">
				
				<a href="#">
				<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='sawmill'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
				?>
			
				<img src="<?php
				echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" style="">
				
				</a>
				
			<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate" style="">
	          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4" style="">Saw Mill</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p style="">Rubberwood log is processed into sawn timber using saw mill as soon as possible
							since its arrival because it is susceptible to insect and fungi attack. Blue staining fungi is commonly seen
							when the log is left for later than three days. Saw mill remains a preferable method for processing rubberwood log 
							since it results in relatively better-quality sawn timber and higher yield. Nevertheless, 
							it requires seasoned operators to run the operation effectively and efficiently.
							</p>
	
			
				</div>
			</div>
			</div>
			</div>
			</section>
	
<!-- ================================================================================================================================================ -->	
						
			<section class="ftco-section ftc-no-pb ftc-no-pt satu sesi_legal_rubberwood" style="">
			<div class="container">
			<div class="row">
				
				<a href="#">
				<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='vacuum'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
				?>
			
				<img src="<?php
				echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" style="">
				
				</a>
				
			<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate" style="">
	          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4" style="">Vacuum & Pressure Treatment</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p style="">Rubberwood sawn timber is preserved with boron containing solution using vacuum and pressure treatment. 
							This is a common method to ensure the preservative solution penetrate fully. Our vacuum and pressure treatment operates
							all day long to enable us to process fresh sawn timber completely within the same day.
							</p>
							
				</div>
			</div>
			</div>
			</div>
			</section>
			
	
<!-- ================================================================================================================================================ -->	
						
			<section class="ftco-section ftc-no-pb ftc-no-pt satu sesi_legal_rubberwood" style="">
			<div class="container">
			<div class="row">
				
				<a href="#">
				<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='curcumin'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
				?>
			
				<img src="images/obat.jpg" style="">
				
				</a>
				
			<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate" style="">
	          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4" style="">Curcumin Test</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p style="">Curcumin test is carried out daily right after vacuum and pressure treatment 
							for testing the penetration and concentration of preservative solution. A distinct red color indicates 
							that boron concentration is adequate, and the center position of red color is evidence that boron penetration is completed.
							</p>
							
				</div>
			</div>
			</div>
			</div>
			</section>

		
<!-- ================================================================================================================================================ -->	
			
			<section class="ftco-section ftc-no-pb ftc-no-pt satu sesi_legal_rubberwood" style="">
			
			<div class="container">
			<div class="row">
				
				<a href="#">
				
				<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='sawn_timber_2'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
				?>
				<img src="<?php
				echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" style="">
				
				</a>
				
			<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4" style="">Kiln Dried Sawn Timber</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p style="">After rubberwood sawn timber passes the preservative treatment, 
							it is stacked with sticks laid in between each stack to allow air passage during air-drying in 
							open atmosphere and forced-drying in kiln drier. Control of temperature and humidity in kiln drier 
							is key factor in producing sound sawn with minimum warping, cracking and fungi attack. 
							Our kiln dried sawn timber is also tested with curcumin solution to see whether the boron preservative is 
							retained inside prior to leaving our storage.

							</p>

				</div>
			</div>
			</div>
			</div>
			</section>

<!-- ================================================================================================================================================ -->	
			
<!-- ================================================================================================================================================ -->	
			
			<div class="col-md-7 heading-section text-center ftco-animate dua" id="moulding" style="">
            <h2 class="mb-4">Moulding</h2>
			</div>
			
			<section class="ftco-section bg-light dua" id="sesi_moulding" style="">
				<div class="row" style="">
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate dua" id="sesi_moulding_pertama"> <!--col-lg-4 untuk lebar 25% -->
    				<div class="room" >
					
					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); 
					$sql = "SELECT * FROM produk WHERE kategori ='s4s_2'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					
					?>
					
    				<a href="product.php" class="img d-flex justify-content-center align-items-center" >
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
					?>
    				</a>
					
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">S4S</a></h3>
 
    					</div>
    				</div>
    			</div>
	<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->	
		
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate dua">
    				<div class="room">
    					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='dowel'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
				
					?>
					
    				<a href="product.php" class="img d-flex justify-content-center align-items-center" >
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
					?>
    					</a>
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">Dowel</a></h3>
    					</div>
    				</div>
    			</div>
	<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->	
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate dua">
    				<div class="room">
    				<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='profile'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					
					?>
					
    				<a href="product.php" class="img d-flex justify-content-center align-items-center" >
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
					?>	
    				</a>
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">Profile</a></h3>
    						
    					</div>
    				</div>
    			</div>
	<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->				
				<div class="col-sm col-md-6 col-lg-4 ftco-animate dua"> <!--col-lg-4 untuk lebar 25% -->
    				<div class="room">
					
					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='finger_joint_stick'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
					?>
					
    				<a href="product.php" class="img d-flex justify-content-center align-items-center" >
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
					?>
    				</a>
					
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">Finger Jointed Stick</a></h3>
 
    					</div>
    				</div>
    			</div>
	<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->				
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate dua">
    				<div class="room">
    					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='finger_jointed_board'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
				
					?>
					
    				<a href="product.php" class="img d-flex justify-content-center align-items-center" >
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
					?>
    					</a>
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">Finger Jointed Laminating Board </a></h3>
    					</div>
    				</div>
    			</div>
	<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->				
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate dua">
    				<div class="room">
    				<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='finger_jointed_block'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					
					?>
					
    				<a href="product.php" class="img d-flex justify-content-center align-items-center" >
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
					?>	
    				</a>
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">Finger Jointed Laminating Block</a></h3>
    						
    					</div>
    				</div>
    			</div>
				</div>
			</section>
			
			
<!-- ================================================================================================================================================ -->	
	
			
<!-- ================================================================================================================================================ -->				
<!-- ================================================================================================================================================ -->				
	
			<div class="col-md-7 heading-section text-center ftco-animate tiga" id="component" style="">
            <h2 class="mb-4">Component</h2>
			</div>
			
			<section class="ftco-section ftc-no-pb ftc-no-pt tiga" id="sesi_component" style="">
			<div class="container" >
			<div class="row" style="margin-top:10px">
			
				<div class="col-sm col-md-6 lebar_foto ftco-animate tiga" style="margin: 0 auto;"> <!--col-lg-4 untuk lebar 25% -->
    				<div class="room" style="height:350px;">
					
					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='stair_pillar'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
					?>
					
    			
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
					?>
    				
					
    					<div class="text text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="#">Stair Pillar</a></h3>
 
    					</div>
    				</div>
    			</div>
	<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->	
		
    			<div class="col-sm col-md-6 lebar_foto ftco-animate tiga" style="">
    				<div class="room" style="height:350px">
    					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='component'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
				
					?>
					
    				
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
					?>
    				
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">Wooden Part</a></h3>
    					</div>
    				</div>
    			</div>
			
			</div>
			</div>
			</section>


<!-- ================================================================================================================================================ -->		
<!-- ================================================================================================================================================ -->				
	
		<div class="col-md-7 heading-section text-center ftco-animate empat" id="veneer" style="">
        <h2 class="mb-4">Veneer</h2>
		</div>

		
		
		<section class="ftco-section ftc-no-pb ftc-no-pt empat" id="sesi_veneer" style="">
			<div class="container" >
			<div class="row" >
			
				<div class="col-sm col-md-6 lebar_foto ftco-animate empat" style=""> <!--col-lg-4 untuk lebar 25% -->
    				<div class="room" style="">
					
					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='core'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
					?>
					
    			
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
					?>
    				
					
    					<div class="text text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="#">Core</a></h3>
 
    					</div>
    				</div>
    			</div>
	<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->	
		
    			<div class="col-sm col-md-6 ftco-animate lebar_foto empat" style="">
    				<div class="room" style="">
    					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='face_back'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
				
					?>
					
    				
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
					?>
    				
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">Face / Back</a></h3>
    					</div>
    				</div>
    			</div>
			
			</div>
			</div>
			</section>



<!-- ================================================================================================================================================ -->		
<!-- ================================================================================================================================================ -->				
	
			<div class="col-md-7 heading-section text-center ftco-animate lima" id="plywood" style="">
            <h2 class="mb-4">Plywood</h2>
			</div>
			
		<section class="ftco-section ftc-no-pb ftc-no-pt ftco-animate lima " id="sesi_plywood" style="">
			<div class="container">
			<div class="row">
				
			<a href="#">
			<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='plywood_2'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
				?>
				<img src="<?php
				echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" style="">	
			</a>
				
			<div class="col-md-7 py-5 wrap-about pb-md-5 lima" >
	          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
		          	
		            <h2 class="mb-4" style="">Multiplex Plywood</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p style="">Our multiplex plywood utilizes both rubberwood and mixed wood veneers. 
							The higher percentage of rubberwood veneer contributes to the increase of weight and hardness.
							This feature makes our plywood suitable for construction work and other application which relies 
							on strength of screw jointing. We offer customized plywood to meet customer specific application, 
							for example, ratio of rubberwood and mixed wood veneer, addition of phenolic film face, dimension of plywood, etc.
							</p>
							

				</div>
			</div>
			</div>
			</div>
			</section>
			
<!-- ================================================================================================================================================ -->		
<!-- ================================================================================================================================================ -->				
	
			<div class="col-md-7 heading-section text-center ftco-animate enam" id="furniture" style="">
            <h2 class="mb-4">Finished Product / Furniture</h2>
			</div>
			

		
		<section class="ftco-section ftc-no-pb ftc-no-pt enam" id="sesi_furniture" style="">
			<div class="container">
			<div class="row" >
			
					<div class="col-sm col-md-6 col-lg-4 ftco-animate enam"> <!--col-lg-4 untuk lebar 25% -->
    				<div class="room">
					
					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='chopping_board'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
					?>
					
    				<a href="product.php" class="img d-flex justify-content-center align-items-center" >
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:300px;height:100%"/>';
					?>
    				</a>
					
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">Chopping Board</a></h3>
 
    					</div>
    				</div>
    			</div>
	<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->	
		
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate enam"> <!--col-lg-4 untuk lebar 25% -->
    				<div class="room">
					
					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='cutting_board'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
					?>
					
    				<a href="product.php" class="img d-flex justify-content-center align-items-center" >
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
					?>
    				</a>
					
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">Cutting Board</a></h3>
 
    					</div>
    				</div>
    			</div>
			
		
	<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->	
		
     			<div class="col-sm col-md-6 col-lg-4 ftco-animate enam"> <!--col-lg-4 untuk lebar 25% -->
    				<div class="room">
					
					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='knife_block'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
					?>
					
    				<a href="product.php" class="img d-flex justify-content-center align-items-center" >
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:200px;height:100%"/>';
					?>
    				</a>
					
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">Knife Block</a></h3>
 
    					</div>
    				</div>
    			</div>	

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->	
		
       			<div class="col-sm col-md-6 col-lg-4 ftco-animate enam"> <!--col-lg-4 untuk lebar 25% -->
    				<div class="room">
					
					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='door'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
					?>
					
    				<a href="product.php" class="img d-flex justify-content-center align-items-center" >
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
					?>
    				</a>
					
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">Door</a></h3>
 
    					</div>
    				</div>
    			</div>	
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->	
	    			<div class="col-sm col-md-6 col-lg-4 ftco-animate enam"> <!--col-lg-4 untuk lebar 25% -->
    				<div class="room">
					
					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='dining_table'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
					?>
					
    				<a href="product.php" class="img d-flex justify-content-center align-items-center" >
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:100%;height:100%"/>';
					?>
    				</a>
					
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">Dining Table</a></h3>
 
    					</div>
    				</div>
					</div>	
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->	
	    			<div class="col-sm col-md-6 col-lg-4 ftco-animate enam"> <!--col-lg-4 untuk lebar 25% -->
    				<div class="room">
					
					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='wardrobe'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
					?>
					
    				<a href="product.php" class="img d-flex justify-content-center align-items-center" >
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" style="width:350;height:100%"/>';
					?>
    				</a>
					
    					<div class="text p-3 text-center" style="background-color:#e9e4e9">
    						<h3 class="mb-3"><a href="product.php">Wardrobe</a></h3>
 
    					</div>
    				</div>
					</div>						
			
			</div>
			</div>
			</section>
			
		
		 </div>
					
					
		</div>
				

			
		    </div>
    	
    </section>
	
		<p align="center" id="quote_penutup" style="">
				“ PMHM have complete machineries and we are ready to customize rubberwood into your requirements. ”
		</p>


   
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