<?php
include '../config.php';


session_start();


if(isset($_POST["submit_detail"]))
{					
	$kueri = $_POST['kueri'];

	$sth = $link->query($kueri);
	$result=mysqli_fetch_array($sth);
	$nama=$result['nama_produk'];
	$kategori=$result['kategori'];
	$harga=$result['harga'];
	$satuan=$result['satuan_beli'];
	$gambar=$result['gambar'];
	
	$deskripsi=$result['deskripsi'];


}
else
{
	
}	
?>



<?php if(isset($_SESSION['username']) || !empty($_SESSION['username'])){?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/product.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" href="../css/style.css">

<style>
.col-sm-3.header_right {
					padding-left: 0;
					margin-right:-130px;
					z-index:2;
					}

ul.header_right_box{	
						width:200px;
						padding:0;
						margin-left:30px;	
					}
ul.header_right_box li{
						display: inline;
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
				
</style>


</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo"><a href="#">Details Product</a></div>
							<nav class="main_nav">
								<ul>
									<li class="active">
										<a href="index.php">Home</a>
									</li>
									<li >
										<a href="upload_payment.php">Upload Proof of Payment</a>
									</li>
								</ul>
							</nav>
							<div class="header_extra ml-auto">
								<div class="shopping_cart">
									<a href="cart.php">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
											<g>
												<path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
													c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
													C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
													H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
													c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z"/>
											</g>
										</svg>
										<?php
										$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
										$q = $db->query("SELECT COUNT(*) FROM cart");
										$row = mysqli_fetch_array($q);
										$total = $row[0]
										?>
							
										
										<div>Cart <span>(<?php echo $total  ?>)</span></div>
									</a>
								</div>

								<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
							</div>
							<div >
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
											 <li> <a href="logout.php" class="myButton" >LOG OUT</a></li>
											 <li class='last'><i class='edit'> </i></li>
											 
										   </ul>
									</div>
										
							<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Search Panel -->
		<div class="search_panel trans_300">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
							<form action="#">
								<input type="text" class="search_input" placeholder="Search" required="required">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>


	</header>

	<!-- Menu -->

	<div class="menu menu_mm trans_300">
		<div class="menu_container menu_mm">
			<div class="page_menu_content">
							
				<div class="page_menu_search menu_mm">
					<form action="#">
						<input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
					</form>
				</div>
				<ul class="page_menu_nav menu_mm">
					<li class="page_menu_item has-children menu_mm">
						<a href="index.php">Home</a>
					</li>
					<li class="page_menu_item menu_mm"><a href="#">Offers<i class="fa fa-angle-down"></i></a></li>
					
				</ul>
			</div>
		</div>

		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>


	</div>
	
	<!-- Home -->

	<div class="home" style="height:400px">
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/veneer.jpeg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title"><?php echo $nama ?><span>.</span></div>
								<div class="home_text"><p></p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Product Details -->

	<div class="product_details">
		<div class="container">
			<div class="row details_row">

<!-- ================================================================================================================================================================================== -->
				<!-- Product Image -->

			<div class="col-lg-6">
				<div class="details_image">
			<form class="" action="cart.php" method="post" enctype="multipart/form-data">
				
					<?php
							$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
							$sql = "SELECT * FROM ecatalog WHERE nama_produk ='".$nama."'";
							//echo " \" ".$sql." \" ";
							$sth = $db->query($sql);
							$result=mysqli_fetch_array($sth);
					?>
						<div class="details_image_large"><?php echo '<img width="600px" src="'.$result['link_gambar'].'" name="foto"/>'; ?>  
						<div class="product_extra product_new"><a href="categories.html">New</a></div>
						</div>
						<div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
							<div class="details_image_thumbnail active" data-image="<?php echo $result['link_gambar']; ?>" ><?php echo '<img width="200px" src="'.$result['link_gambar'].'"/>'; ?></div>
							<div class="details_image_thumbnail" data-image="images/veneer1.jpg"><img src="images/veneer1.jpg" alt=""></div>
							<div class="details_image_thumbnail" data-image="images/veneer2.jpg"><img src="images/veneer2.jpg" alt=""></div>
							<div class="details_image_thumbnail" data-image="images/veneer3.jpg"><img src="images/veneer3.jpg" alt=""></div>
							
						</div>
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name"><?php echo $nama ?></div>
						
						<div class="details_price">
						<?php 
						
							echo '<span class="numbers"> IDR '.$result['harga'].'</span>';
						?>
						</div>

						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Availability:</div>
											<?php
											if($result['stok_produk']!=0)
											{
											?>
											
											<span>In Stock</span>
											
											<?php
											}
											else{
											?>
											
											<span style="color:red">Out Stock</span>
											
											<?php
											}
											?>
								
						</div>
						<div class="details_text">
							<p><?php echo $result['deskripsi'];?></p>
							
						</div>

						<!-- Product Quantity -->
						
						<div class="product_quantity_container">
						
						<div class="in_stock_container">
								<div class="availability">Stock of Product = </div><span><?php echo $result['stok_produk'];?></span>
						</div>
							<div class="product_quantity clearfix" style="width:180px">
							
								<span>Qty</span>
								<input id="quantity_input" type="text" pattern="[0-9]*" name="kuantitas_pesan" value="" 
								style="width:400px" required>
								<div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
								</div>
							
							</div>
							
							<?php echo $result['satuan_beli'];?>
							<input type="hidden" name="gambar" value='<?php echo $result['link_gambar'] ?>' ></input>
							<input type="hidden" size="55" name="kueri" value="<?php  
							$tes="'plywood'";
							 echo "" ."SELECT * FROM ecatalog WHERE nama_produk ='".$nama."'". " "; ?>" ></input>
							 
							
							
							
							<?php if ($result['stok_produk'] > '0'){ ?>
							
							<input type="submit" class="button" name="submit1" 
							title="Product is on of stock" value="Add To Cart" style="color:green;width:100px"></input> <?php   } else {?>
							
							<input type="hidden" name="status" value="PreOrder" ></input>
							<input type="submit" class="button" name="submit_PO" 
							title="Pre Order this Product" value="Out of stock! You must PreOrder" style="color:red;width:300px" >
							</input>
							
							 <?php   }?>
							
							 
						</div>
					
			</form>
<!-- ================================================================================================================================================================================== -->
						<!-- Share -->
					<div class="col-md">
						<div class="ftco-footer-widget mb-4" style="margin-top:20px">
						  <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							
							<h2 style="margin-bottom:10px;margin-left:0px">Share This Website</h2>
							<!-- AddToAny BEGIN -->
							<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
							<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
							<a class="a2a_button_facebook"></a>
							<a class="a2a_button_whatsapp"></a>
							<a class="a2a_button_line"></a>
							<a class="a2a_button_twitter"></a>
							<a class="a2a_button_yahoo_mail"></a>
							<a class="a2a_button_google_gmail"></a>
							</div>
							<script async src="https://static.addtoany.com/menu/page.js"></script>
							<!-- AddToAny END -->
							
						  </ul>
						</div>
					</div>
					</div>
				</div>
				
			</div>
			
		
			<div class="row description_row">
				<div class="col">
					<div class="description_title_container">
						<div class="description_title">Description</div>
						
					</div>
					<div class="description_text">
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_border"></div>
					
				</div>
			</div>
			
	<!--  KIRIM EMAIL JIKA LOCALHOST AKAN ERROR SMRTP, MAKA SIMULASIKAN DENGAN ONLINE DI HOSTINGAN,PASTI BISA-->		
				<?php 
				if(isset($_POST['submit'])){
					$to = "rubberwood@pt-pmhm.com"; // this is your Email address
					$from = $_POST['email']; // this is the sender's Email address
					$message = $_POST['pesan'];
					
					$subject = "Form submission";
					$subject2 = "Copy of your form submission";
					$message = $message . " wrote the following:" . "\n\n" . $_POST['message'];
					$message2 = "Here is a copy of your message " . $message . "\n\n" . $_POST['message'];

					$headers = "From:" . $from;
					$headers2 = "From:" . $to;
					mail($to,$subject,$message,$headers);
					mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
					echo "Mail Sent. Thank you " . $message . ", we will contact you shortly.";
					// You can also use header('Location: thank_you.php'); to redirect to another page.
					}
				?>

			
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_content text-center">
						<div class="newsletter_title">Message to our Email (rubberwood@pt-pmhm)</div>
						<div class="newsletter_text"><p>Enter Your Question or Order here.</p></div>
						<div class="newsletter_form_container">
							<form action="" method="post">
								Your Email : <input type="text" name="email" class="newsletter_input" required="required">
								Message : <input type="textarea" name="pesan" class="newsletter_input" required="required">
								<button class="newsletter_button trans_200" type="submit"><span>Send</span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	
	<div class="footer_overlay"></div>
	<?php
	include 'footer.php';
	?>
   
</div>

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
    	  <a href='login.php'><button class='myButton'>Login</button></a></center>";
  }
  ?>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/product.js"></script>
<script src="js/custom.js"></script>
</body>
</html>