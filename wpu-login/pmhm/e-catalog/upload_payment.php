
<?php
include '../config.php';
session_start();
$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name

if(isset($_POST["submit1"]))
{
	date_default_timezone_set("Asia/Jakarta");
	$tanggal=date("Y/m/d")." Jam =".date("h:i:sa");

$no_order=$_POST['no_order'];
$image = $_FILES['gambar']['name'];
$lokasi="uploads/";
$gabungan=$lokasi.$image;
	$sql="UPDATE order_pmhm SET bukti_bayar='".$gabungan."',tanggal_bayar = '$tanggal' WHERE no_order=".$no_order."";

		if(mysqli_query($db, $sql)){
			echo "<p style='margin-top:200px;font-size:30px;margin-left:50px'>Your's Proof of Payment inserted successfully!   :)</p>";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

}



?>




<?php if(isset($_SESSION['username']) || !empty($_SESSION['username'])){?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Upload Payment</title>
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



	</header>


	<!-- Home -->

	<div class="home" style="height:300px">
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/payment.jpg);"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="breadcrumbs">
	<p style="font-size:30px;color:black;margin-left:57px">Upload Your proof of Payment Here</p>

</div>
	<!-- Cart Info -->

	<div class="cart_info">
		<div class="container">
			<div class="row" style="margin-right:110px">
				<div class="col">


				</div>
			</div>

			<div class="row row_cart_buttons">
				<div class="col">
					<div class="">

					<form action="upload_payment.php" method="post" enctype="multipart/form-data">
						<input type="file" name="gambar"/>
						<br><br>
						<h4>Input Your Order Number</h4>

						<input type="number" name="no_order" />
						<br>
						<br>
						<br>
						<input type="submit" class="button" name="submit1" value="Upload"/>

					</form>

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

<?php

?>
