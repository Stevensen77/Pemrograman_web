<?php
// Initialize the session
session_start();

?>


<?php if(isset($_SESSION['username']) || !empty($_SESSION['username'])){?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADMIN SESSION</title>
	<meta name="description" content="Blueprint: A basic template for a page stack navigation effect" />
	<meta name="keywords" content="blueprint, template, html, css, page stack, 3d, perspective, navigation, menu" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/style_admin.css" />
	<script src="js/modernizr-custom.js"></script>
	<script src="js/modernizr-2.6.2.min.js"></script>
	
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/menu_bulat.css" />
		
		
	<style>
	
	 @media (min-width: 991.98px) 
	 {	
		.pages-nav{
			background-color: #8F8787;
		}
		#page-home{
			 background: linear-gradient(#CF081D,#09106C,#6C0914);
		}
		#page-product{
		  background: linear-gradient(#050F22,#0E3404);
		}
		#page-ecatalog{
			background: linear-gradient(#050F22,#0E3404)
		}
		#page-register{
		 	background: linear-gradient(#050F22,#0E3404)
		}
		
		
		.poster {
			bottom: 20vh;
			left: 60%;
			max-width: 100%;
			max-height: 80%;
		}
		
		.poster_gambar {
		width:600px;
		height:350px;
		}
		
					.col-sm-3.header_right {
						padding-left: 0;
						margin-left:30%;
						z-index:101;
					}

					ul.header_right_box{
						
						padding:10;
						margin: 0 0 -7% 68%;
						
						
					}
					ul.header_right_box li{
						float:left;
						margin: 0 2%;
						
					}
					ul.header_right_box li p{
						font-size:1.2em;
						font-weight: 600;
						margin-top: 4px;
					}
					ul.header_right_box li p a{
						color:white;
					}
					ul.header_right_box li p a:hover{
						color:red;
					}

					
					ul.header_right_box li.last{
						margin-right:0;
					}
						
					.myButton {
					-moz-box-shadow: 0px 0px 0px 2px #9fb4f2;
					-webkit-box-shadow: 0px 0px 0px 2px #9fb4f2;
					box-shadow: 0px 0px 0px 2px #9fb4f2;
					background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7892c2), color-stop(1, #476e9e));
					background:-moz-linear-gradient(top, #7892c2 5%, #476e9e 100%);
					background:-webkit-linear-gradient(top, #7892c2 5%, #476e9e 100%);
					background:-o-linear-gradient(top, #7892c2 5%, #476e9e 100%);
					background:-ms-linear-gradient(top, #7892c2 5%, #476e9e 100%);
					background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
					filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7892c2', endColorstr='#476e9e',GradientType=0);
					background-color:#7892c2;
					-moz-border-radius:10px;
					-webkit-border-radius:10px;
					border-radius:10px;
					border:1px solid #4e6096;
					display:inline-block;
					cursor:pointer;
					color:#ffffff;
					font-family:Arial;
					font-size:19px;
					padding:12px 37px;
					text-decoration:none;
					text-shadow:0px 1px 0px #283966;
					padding:4px 16px;
					}
					.myButton:hover {
						background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #476e9e), color-stop(1, #7892c2));
						background:-moz-linear-gradient(top, #476e9e 5%, #7892c2 100%);
						background:-webkit-linear-gradient(top, #476e9e 5%, #7892c2 100%);
						background:-o-linear-gradient(top, #476e9e 5%, #7892c2 100%);
						background:-ms-linear-gradient(top, #476e9e 5%, #7892c2 100%);
						background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
						filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#476e9e', endColorstr='#7892c2',GradientType=0);
						background-color:#476e9e;
					}
				.myButton:active {
					position:relative;
					top:1px;
				}
		
	 }
	 
	 .pages-stack{
		-webkit-animation: fadein 2s;
       -moz-animation: fadein 2s;
	}

	@-moz-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
	}

	
	.pages-stack{
		-webkit-animation: fadein 2s;
       -moz-animation: fadein 2s;
	}

	@-moz-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
	}
	

	</style>	
	
</head>

<body>



	<!-- navigation -->
	<nav class="pages-nav">
		<div class="pages-nav__item"><a class="link link--page" href="#page-home">Beranda Admin</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-product">Input Product Display</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-ecatalog">Menu E-catalog</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-software">Ubah Display</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-register">Register Account</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-training"></a>Setting</div>
		<div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-buy">Go to Website</a></div>
		<div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-blog">Blog &amp; News</a></div>
		<div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-contact">Contact</a></div>
		<div class="pages-nav__item pages-nav__item--social">
			<a class="link link--social link--faded" href="#"><i class="fa fa-twitter"></i><span class="text-hidden">Twitter</span></a>
			<a class="link link--social link--faded" href="#"><i class="fa fa-linkedin"></i><span class="text-hidden">LinkedIn</span></a>
			<a class="link link--social link--faded" href="#"><i class="fa fa-facebook"></i><span class="text-hidden">Facebook</span></a>
			<a class="link link--social link--faded" href="#"><i class="fa fa-youtube-play"></i><span class="text-hidden">YouTube</span></a>
		</div>
	</nav>
	<!-- /navigation-->
	<!-- pages stack -->
	<div class="pages-stack">
		<!-- page -->
		

		
		<div class="page" id="page-home" style="">
			
			<header class="bp-header cf">
				
					<?php 
		
					if(isset($_SESSION['username']))
					{

					 $username=$_SESSION['username'];

					 ?>
							<div class='col-sm-3 header_right'>
								   <ul class='header_right_box'>
									 <li ><img style='width:26px;' src='images/user.png' alt=''/></li>
									 <li ><p><a href="#">
									 <?php echo $username; ?>
									 </a></p></li>
									 <li> <a href="../logout.php" class="myButton" >LOG OUT</a></li>
									 <li class='last'><i class='edit'> </i></li>
									 <div class='clearfix'> </div>
								   </ul>
							</div>
								
					<?php }?>
					 
			
				<?php
					$db = mysqli_connect("localhost","root","","pmhm"); 
					$sql = "SELECT * FROM menu_admin WHERE kategori ='home' AND judul_gambar='logo_pmhm'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					
				?>
			
				<span class="bp-header__present">MAINTENANCE <span class="bp-tooltip bp-icon bp-icon--about" 
				data-content="Menu admin berisi control atas semua Content Management pada Website pt-pmhm.com."></span></span>
			
				<img src=" <?php echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" width=10% style="border-radius:30px"><h1 class="bp-header__title">PT.PUNCAK MENARA HIJAU MAS</h1>
				<p class="bp-header__desc">ADMIN <a href="http://pt-pmhm.com">| Go to Website</a></p>
			
			
			<div class="component">
				<h2>...</h2>
				<!-- Start Nav Structure -->
				<button class="cn-button" id="cn-button">Menu</button>
				<div class="cn-wrapper" id="cn-wrapper">
					<ul>
						<li><a href="../../input_product/index.php"><span>Input</span></a></li>
						<li><a href="#"><span>E-catalog</span></a></li>
						<li><a href="#"><span>Register</span></a></li>
						<li><a href="#"><span>Snippets</span></a></li>
						<li><a href="#"><span>Plugins</span></a></li>
						<li><a href="#"><span>Contact</span></a></li>
						<li><a href="#"><span>Follow</span></a></li>
					 </ul>
				</div>
				<!-- End of Nav Structure -->
			</div>
			</header>
			
		<?php
					$sql = "SELECT * FROM menu_admin WHERE kategori ='home' AND judul_gambar='admin'";
					$result=mysqli_fetch_array($db->query($sql));
					
		?>
		<img class="poster" src="<?php echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>"  style="margin-top:-300px" alt="img01" />
		</div>
		<!-- /page -->
		<div class="page" id="page-product" style="">
					<?php
					$sql = "SELECT * FROM menu_admin WHERE kategori ='menu_input_product' AND judul_gambar='input_product'";
					$result=mysqli_fetch_array($db->query($sql));
					?>
			<header class="bp-header cf">
				<h1 class="bp-header__title">Menu Input Product</h1>
			
				<p class="info">
					Berisi Form untuk menginput Gambar dan Deskripsi Tampilan Display Website
				</p>
			</header>
			<a href="../../input_product/input_product.php"> 
			<center><img class="poster_gambar"  src="<?php echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" style=""></center></a>
		</div>
		<!-- ================================================================================================================================================================= -->
		<div class="page" id="page-ecatalog">
					<?php
					$sql = "SELECT * FROM menu_admin WHERE kategori ='menu_ecatalog' AND judul_gambar='input_ecatalog'";
					$result=mysqli_fetch_array($db->query($sql));
					?>
			<header class="bp-header cf">
				<h1 class="bp-header__title"> Data E-Catalog</h1>
				<p class="bp-header__desc">E-catalog <a href="http://pt-pmhm.com">Go to Website</a></p>
				<p class="info">
					Form yang digunakan untuk Input,Edit,dan Delete data yang ada pada tabel E-Catalog
				</p>
			</header>
			<center>
			<a href="../../e-catalog/input_ecatalog/input_ecatalog.php" class="myButton" style="width:200px;height:100px; padding-top:45px;">INPUT</a><br>
			<a href="edit_catalog.php" class="myButton" style="width:200px;height:100px; padding-top:45px;">EDIT</a>
			<a href="delete.php" class="myButton" style="width:200px;height:100px; padding-top:45px;">DELETE</a>
			</center>
			
		</div>
		<!-- ================================================================================================================================================================= -->
		<div class="page" id="page-software">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Software &amp; Downloads</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"I decided to pick the diet that I thought would maximize my chances of long-term survival." &mdash; Al Gore
				</p>
			</header>
			<img class="poster" src="images/3.jpg" alt="img03" />
		</div>
		<!-- ================================================================================================================================================================= -->
		<div class="page" id="page-register">
					<?php
					$sql = "SELECT * FROM menu_admin WHERE kategori ='menu_register' AND judul_gambar='register'";
					$result=mysqli_fetch_array($db->query($sql));
					?>
			<header class="bp-header cf">
				<h1 class="bp-header__title">MENU DAFTAR AKUN ADMIN BARU</h1>
				<p class="bp-header__desc"> <a href="http://pt-pmhm.com">Go to Website</a></p>
				<p class="info">
					Daftar Akun Admin Baru Disini:
				</p>
			</header>
			<a href="../register.php"> 
			<center><img class="poster_gambar" src="<?php echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" alt="img04" /></center>
			</a>

		</div>
		<!-- ================================================================================================================================================================= -->
		<div class="page" id="page-training">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Training &amp; Learning Center</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"The moment I began to understand what was going on with the treatment of animals, it led me more and more in the way of the path I am [on] now, which is a complete vegan." &mdash; Bryan Adams
				</p>
			</header>
			<img class="poster" src="images/5.jpg" alt="img05" />
		</div>
		<!-- ================================================================================================================================================================= -->
		<div class="page" id="page-buy">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Where to buy</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"When people ask me why I don't eat meat or any other animal products, I say, 'Because they are unhealthy and they are the product of a violent and inhumane industry.'" &mdash;
				</p>
			</header>
			<img class="poster" src="images/6.jpg" alt="img06" />
		</div>
		<div class="page" id="page-blog">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Blog &amp; News</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"The question is not, 'Can they reason?' nor, 'Can they talk?' but rather, 'Can they suffer?" &mdash; Jeremy Bentham
				</p>
			</header>
			<img class="poster" src="images/1.jpg" alt="img01" />
		</div>
		<!-- ================================================================================================================================================================= -->
		<div class="page" id="page-contact">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Contact</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"Man is the only animal that can remain on friendly terms with the victims he intends to eat until he eats them." &mdash; Samuel Butler
				</p>
			</header>
			<img class="poster" src="images/4.jpg" alt="img04" />
		</div>
	</div>
	<!-- /pages-stack -->
	<button class="menu-button"><span>Menu</span></button>
<?php
  }
  else{
	   
    	  echo "
    	  
    	  <style>
          		
					.myButton {
					-moz-box-shadow: 0px 0px 0px 2px #9fb4f2;
					-webkit-box-shadow: 0px 0px 0px 2px #9fb4f2;
					box-shadow: 0px 0px 0px 2px #9fb4f2;
					background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7892c2), color-stop(1, #476e9e));
					background:-moz-linear-gradient(top, #7892c2 5%, #476e9e 100%);
					background:-webkit-linear-gradient(top, #7892c2 5%, #476e9e 100%);
					background:-o-linear-gradient(top, #7892c2 5%, #476e9e 100%);
					background:-ms-linear-gradient(top, #7892c2 5%, #476e9e 100%);
					background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
					filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7892c2', endColorstr='#476e9e',GradientType=0);
					background-color:#7892c2;
					-moz-border-radius:10px;
					-webkit-border-radius:10px;
					border-radius:10px;
					border:1px solid #4e6096;
					display:inline-block;
					cursor:pointer;
					color:#ffffff;
					font-family:Arial;
					font-size:19px;
					padding:12px 37px;
					text-decoration:none;
					text-shadow:0px 1px 0px #283966;
					padding:4px 16px;
					}
          
          </style>
          
    	  
    	  <center><h1 style='color:black;font-size:26px;'>Maaf, login terlebih dahulu untuk melihat informasi lebih lanjut!</h1>
    	  <a href='../login.php'><button class='myButton'>Login</button></a></center>";
  }
  ?>
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
		<script src="js/polyfills.js"></script>
		<script src="js/demo2.js"></script>
</body>

</html>
