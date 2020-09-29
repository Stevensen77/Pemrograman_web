<?php
include '../config.php';

session_start();

if(isset($_POST["submit1"]))
{
	$kueri = $_POST['kueri'];

	$sth = $link->query($kueri);
	$result=mysqli_fetch_array($sth);
	$nama=$result['nama_produk'];
	$kategori=$result['kategori'];
	$harga=$result['harga'];
	$satuan=$result['satuan_beli'];
	$gambar=$_POST['gambar'];

	$deskripsi=$result['deskripsi'];
	$kuantitas=$_POST['kuantitas_pesan'];
	$user=$_SESSION['username'];

	$tquery = "SELECT MAX(no_order) FROM order_pmhm;";
	$tresult = mysqli_query($link, $tquery);

   // get the query result without the while loop
	$row = mysqli_fetch_array($tresult);

	$no_order = $row['MAX(no_order)'] +1;
	

	$sql = "INSERT INTO cart (nama_produk, kuantitas,gambar,total_harga,satuan,user,no_order)
			VALUES ('".$nama."','".$kuantitas."','".$gambar."','".$harga."','".$satuan."','".$user."','".$no_order."')";


	if (mysqli_query($link, $sql)) {
		  echo "New record created successfully";
	} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($link);
	}
	mysqli_close($link);



}
else
{
}

?>



<?php if(isset($_SESSION['username']) || !empty($_SESSION['username'])){?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/cart.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">


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
							<div class="logo"><a href="index.php">e-Catalog PMHM</a></div>
							<nav class="main_nav">
								<ul>
									<li >
										<a href="index.php">Home</a>
									</li>
									<li><a href="#">Offers</a></li>
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
								<div class="search">
									<div class="search_icon">
										<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										viewBox="0 0 475.084 475.084" style="enable-background:new 0 0 475.084 475.084;"
										 xml:space="preserve">
										<g>
											<path d="M464.524,412.846l-97.929-97.925c23.6-34.068,35.406-72.047,35.406-113.917c0-27.218-5.284-53.249-15.852-78.087
												c-10.561-24.842-24.838-46.254-42.825-64.241c-17.987-17.987-39.396-32.264-64.233-42.826
												C254.246,5.285,228.217,0.003,200.999,0.003c-27.216,0-53.247,5.282-78.085,15.847C98.072,26.412,76.66,40.689,58.673,58.676
												c-17.989,17.987-32.264,39.403-42.827,64.241C5.282,147.758,0,173.786,0,201.004c0,27.216,5.282,53.238,15.846,78.083
												c10.562,24.838,24.838,46.247,42.827,64.234c17.987,17.993,39.403,32.264,64.241,42.832c24.841,10.563,50.869,15.844,78.085,15.844
												c41.879,0,79.852-11.807,113.922-35.405l97.929,97.641c6.852,7.231,15.406,10.849,25.693,10.849
												c9.897,0,18.467-3.617,25.694-10.849c7.23-7.23,10.848-15.796,10.848-25.693C475.088,428.458,471.567,419.889,464.524,412.846z
												 M291.363,291.358c-25.029,25.033-55.148,37.549-90.364,37.549c-35.21,0-65.329-12.519-90.36-37.549
												c-25.031-25.029-37.546-55.144-37.546-90.36c0-35.21,12.518-65.334,37.546-90.36c25.026-25.032,55.15-37.546,90.36-37.546
												c35.212,0,65.331,12.519,90.364,37.546c25.033,25.026,37.548,55.15,37.548,90.36C328.911,236.214,316.392,266.329,291.363,291.358z
												"/>
										</g>
									</svg>
									</div>
								</div>

							</div>
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


	<!-- Home -->

	<div class="home" >
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/cart.jpeg);"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="index.php">Home</a></li>
										<li>Shopping Cart</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cart Info -->

	<div class="cart_info">
		<div class="container">
			<div class="row" style="margin-right:110px">
				<div class="col">
					<!-- Column Titles -->
					<div class="cart_info_columns clearfix">
						<div class="cart_info_col cart_info_col_product">Product</div>
						<div class="cart_info_col cart_info_col_price">Price</div>
						<div class="cart_info_col cart_info_col_quantity">Quantity</div>
						<div class="cart_info_col cart_info_col_total">Total</div>
					</div>
				</div>
			</div>
			<div class="row cart_items_row">
				<div class="col">


					<?php
					$totalSum = 0;
					$no_id=1;
					$total_harga_semua=0;
					
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$q = $db->query("SELECT * FROM cart");

					if($q->num_rows > 0){

						while($result=mysqli_fetch_array($q)){

						$harga=$result['total_harga'];
						$totalSum += $harga;
					?>

					<!-- Cart Item -->

					<div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<!-- Name -->
						<div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
							<div class="cart_item_image">
								<div><img src="<?php echo $result['gambar'];?> " alt=""></div>
							</div>
							<div class="cart_item_name_container">
								<div class="cart_item_name"><a href="#"><?php echo $result['nama_produk'];?></a></div>
								<div class="cart_item_edit"><a href="#"><?php echo $result['satuan'];?></a></div>
							</div>
						</div>
						<!-- Price -->
						<div class="cart_item_price"><?php echo '<span class="numbers"> IDR '.$result['total_harga'].'</span>';?></div>
						<!-- Quantity -->
						<div class="cart_item_quantity">
							<div class="product_quantity_container">
								<div class="product_quantity clearfix">
									<span>Qty</span>
									<input id="quantity_input" type="number" pattern="[0-9]*" value="<?php echo $result['kuantitas'];?>">
									<div class="quantity_buttons">
										<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
										<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Total -->
						<?php

						$total_harga_satu_item=$result['total_harga']*$result['kuantitas'];
						?>

						<div class="cart_item_total"><?php echo '<span class="numbers"> IDR '.$total_harga_satu_item.'</span>';?></div>

						<?php
							$id_cart=$result['id_cart'];
								echo '<script>
								function myFunction2() {

								if (confirm(\'Make sure to delete this item?\')) {';

									if(isset($_POST[$id_cart]))
									{


										$q3 = $db->query("DELETE FROM cart WHERE id_cart='".$id_cart."'");

									}
								echo'

								  }
								}
								</script>
								';

								//echo "<meta http-equiv='refresh' content='0'>";

						?>

						<form action="cart.php" method="post" enctype="multipart/form-data">
							<input type="submit" name="<?php echo $id_cart?>" class="fa fa-close" onClick='return myFunction2();' style="margin-left:100px;font-size:36px"
							value="<?php echo $id_cart?>">
							</input>
						</form>
					</div>

					<?php
							
							$no_id++;
							$total_harga_semua+=$total_harga_satu_item;
					}
					}

					?>

				</div>
			</div>
			<div class="row row_cart_buttons">
				<div class="col">
					<div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="button continue_shopping_button"><a href="index.php">Continue shopping</a></div>
						<div class="cart_buttons_right ml-lg-auto">
							<?php


								echo '<script>
								function myFunction() {

								  if (confirm(\'Are you sure to delete all cart?\')) {';

								if(isset($_POST["submit2"]))
								{

									$q2 = $db->query("DELETE FROM cart");
								}
								echo'
								window.location.reload(false);
								  } else {

								  }
								}
								</script>
								';

								//echo "<meta http-equiv='refresh' content='0'>";

							?>

							<form class="" action="cart.php" method="post" enctype="multipart/form-data">
								<input onclick="myFunction()" type="submit" class="button" name="submit2" value="Clear cart"></input>

							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row row_extra">
				<div class="col-lg-4">

					<!-- Delivery -->
					<div class="delivery">
						<div class="section_title">Shipping :</div>
						<div class="section_title">we will accumulate on the purchase note</div>

					</div>


				</div>

				<div class="col-lg-6 offset-lg-2">
					<div class="cart_total">
						<div class="section_title">Cart Item (Exclude Tax and Shipment)</div>
						<div class="section_subtitle">Final info</div>
						<div class="cart_total_container">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Total</div>
									<?php if($q->num_rows > 0){

									echo '<div class="cart_total_value ml-auto"> <span class="numbers"> IDR '.$total_harga_semua.'</span></div>';
									}
									?>
								</li>

							</ul>
						</div>
						<div class="button checkout_button"><a href="success_checkout.php">Proceed to checkout</a></div>
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
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/cart.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
