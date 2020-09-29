<?php
session_start();

?>

<?php if(isset($_SESSION['username']) || !empty($_SESSION['username'])){?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>e-Catalog Rubberwood PT.PMHM</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" href="../css/style.css">
 <link rel="stylesheet" href="styles/style_left_sidebar.css">
 <link rel="stylesheet" type="text/css" href="styles/responsive_left_sidebar.css">

 
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
 
 <script>
function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
 
 </script>
 
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
							
							<div class="logo"><a href="#">e-Catalog PMHM</a></div>
							<nav class="main_nav">
								<ul>
									<li >
										<a href="index.php">Home</a>
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
											 <li><img style='width:26px;' src='images/user.png' alt=''/></li>
											 <li><p><a href="#">
											 <?php echo $username; ?>
											 </a></p></li>
											 <li><a href="logout.php" class="myButton">LOG OUT</a></li>
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

	<!-- Menu -->


	
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
								
			<!-- Home Slider -->
			<div class="" style="">
			<img src="images/parket.jpg" style="width:90%; height:500px;">
			</div>
			
		
		</div>
		
	</div>

	<!-- Ads -->

	<div class="avds">
		<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
			<div class="avds_small">
				<?php
						//$db = mysqli_connect("localhost","root","","pmhm"); 
					//	$sql = "SELECT * FROM ecatalog WHERE nama_produk ='veneer'";
						//$sth = $db->query($sql);
						//$result=mysqli_fetch_array($sth);
				?>
				<div class="avds_background"> <img class="avds_background" src="images/export.jpg"/>
				<?php// echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).' )';	 ?>
				
				</div>
				<div class="avds_small_inner">
					<div class="avds_discount_container">
						
						
					</div>
					<div class="avds_small_content">
						<div class="avds_title">Best Quality</div>
						
					</div>
				</div>
			</div>
			<div class="avds_large">

				<div class="avds_background" style="background-image:url(images/parket.jpg)"></div>
				<div class="avds_large_container">
					<div class="avds_large_content">
						<div class="avds_title">New Product</div>
						<div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viver ra velit venenatis fermentum luctus.</div>
						<div class="avds_link avds_link_large"><a href="#">See More</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	
	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
			
			<div class="col-lg-3">
			<div class="left_sidebar_area">
			<aside class="left_widgets cat_widgets">
										<div class="l_w_title">
											<h3>Browse Categories</h3>
										</div>
										<div class="widgets_inner">
											<ul class="list">
												<li><a href="#" onclick="return false;" id="btn1">All Products</a></li>
												<li><a href="#" onclick="return false;" id="btn2">Sawn Timber</a></li>
												<li>
													<a href="#">Moulding</a> >
													<ul class="list">
														<li><a href="#" onclick="return false;" id="btn3">S4S</a></li>
														<li><a href="#" onclick="return false;" id="btn4">Dowel</a></li>
														<li><a href="#" onclick="return false;" id="btn5">Profile</a></li>
														<li><a href="#" onclick="return false;" id="btn6">Finger Jointed Stick</a></li>
														<li><a href="#" onclick="return false;" id="btn7">Finger Jointed Laminating Board</a></li>
														<li><a href="#" onclick="return false;" id="btn8">Finger Jointed Laminating Block</a></li>
													</ul>
												</li>
												<li><a href="#">Component</a> >
													<ul class="list">
														<li><a href="#" onclick="return false;" id="btn9">Stair Pillar</a></li>
														<li><a href="#" onclick="return false;" id="btn10">Wooden Part</a></li>
													</ul>
												</li>
												<li><a href="#">Veneer</a> >
													<ul class="list">
														<li><a href="#" onclick="return false;" id="btn11">Core</a></li>
														<li><a href="#" onclick="return false;" id="btn12">Face / back</a></li>
													</ul>
												</li>
												<li><a href="#" onclick="return false;" id="btn13">Plywood</a></li>
												<li><a href="#" onclick="return false;" id="btn14">Finished Product / Furniture</a> >
													<ul class="list">
														<li><a href="#" onclick="return false;" id="btn15">Parket</a></li>
														<li><a href="#">Chopping Board</a></li>
														<li><a href="#" onclick="return false;" id="btn16">Cutting Board</a></li>
														<li><a href="#">Knife Block</a></li>
														<li><a href="#" onclick="return false;" id="btn18">Door</a></li>
														<li><a href="#">Dining Table</a></li>
														<li><a href="#">Wardrobe</a></li>
													</ul>
												</li>
											</ul>
										</div>
							</aside>
						</div>
				</div>
				
				<div class="col">
					<center><h1>Our Catalog</h1></center>
					
					<div class="product_grid all">
				
						<?php
						
						 include "../login/config.php";

						
						$q = $link->query("SELECT * FROM ecatalog WHERE kategori!='header'");
							
							if($q->num_rows > 0){
							
								while(	$result=mysqli_fetch_array($q)){
								
								
								?>
								
								<div class="product">
								<form class="" action="detail.php" method="post" enctype="multipart/form-data">
									<input type="hidden" size="55" name="kueri" value="<?php
									$no_id=	$result['id_produk'];								
									 echo "" ."SELECT * FROM ecatalog WHERE id_produk =$no_id". " "; ?>" ></input>
									
										<div class="product_image">
										
										<?php echo '<img width="200px" src="'.$result['link_gambar'].'"/>'; ?> 
										
										</div>
										<div class="product_content">
											<div class="product_title"><?php echo $result['nama_produk'];?></div>
											<div class="product_price"><?php echo '<span class="numbers"> IDR '.$result['harga'].'</span>';?> </div>
											<p><?php echo $result['satuan_beli'];?></p>
											<input type="submit" class="button" name="submit_detail" value="See details"></input>
										</div>
								</div>
								 </form>
								<?php
								}
							}
						?>
						
						
						
					
						
					</div>
<!-- ================================================================================================================================================================= -->					
					
				<div class="product_grid sawn_timber" style="display:none">
					
						<?php
			
						$q = $link->query("SELECT * FROM ecatalog WHERE kategori='sawn_timber'");
						
						
						
							if($q->num_rows > 0){
							
								while(	$result=mysqli_fetch_array($q)){
									
									
								?>
									<form class="" action="detail.php" method="post" enctype="multipart/form-data">
									<input type="hidden" size="55" name="kueri" value="<?php
									$no_id=	$result['id_produk'];								
									 echo "" ."SELECT * FROM ecatalog WHERE id_produk =$no_id". " "; ?>" ></input>
									 
									<div class="product">
										<div class="product_image"><a href="detail.php">	
										<?php echo '<img width="200px" src="'.$result['link_gambar'].'"/>'; ?> 
										</a>
										</div>
										<div class="product_content">
											<div class="product_title"><a href="detail.php"><?php echo $result['nama_produk'];?> </a></div>
											<div class="product_price"><?php echo 'IDR '.$result['harga'];?>,00 </div><p><?php echo $result['satuan_beli'];?></p>
											<input type="submit" class="button" name="submit_detail" value="See details"></input>
										</div>
									</div>
									</form>
								<?php
								}
	
							}
						?>
						
				</div>
<!-- ================================================================================================================================================================= -->
				<div class="product_grid s4s" style="display:none">
					
						<?php
			
						$q = $link->query("SELECT * FROM ecatalog WHERE nama_produk='s4s'");
							
							if($q->num_rows > 0){
							
								while(	$result=mysqli_fetch_array($q)){
									
									
								?>
									<form class="" action="detail.php" method="post" enctype="multipart/form-data">
									<input type="hidden" size="55" name="kueri" value="<?php
									$no_id=	$result['id_produk'];								
									 echo "" ."SELECT * FROM ecatalog WHERE id_produk =$no_id". " "; ?>" ></input>
									 
									<div class="product">
										<div class="product_image"><a href="detail.php">
										<?php echo '<img width="200px" src="'.$result['link_gambar'].'"/>'; ?> 
										</a>
										</div>
										<div class="product_content">
											<div class="product_title"><a href="detail.php"><?php echo $result['nama_produk'];?> </a></div>
											<div class="product_price"><?php echo 'IDR '.$result['harga'];?>,00 </div><p><?php echo $result['satuan_beli'];?></p>
											<input type="submit" class="button" name="submit_detail" value="See details"></input>
										</div>
									</div>
									</form>
								<?php
								}
	
							}
						?>
						
				</div>
<!-- ================================================================================================================================================================= -->				
				<div class="product_grid dowel" style="display:none">
					
						<?php
			
						$q = $link->query("SELECT * FROM ecatalog WHERE nama_produk='dowel'");
							
							if($q->num_rows > 0){
							
								while(	$result=mysqli_fetch_array($q)){
									
									
								?>
									<form class="" action="detail.php" method="post" enctype="multipart/form-data">
									<input type="hidden" size="55" name="kueri" value="<?php
									$no_id=	$result['id_produk'];								
									 echo "" ."SELECT * FROM ecatalog WHERE id_produk =$no_id". " "; ?>" ></input>
									 
									<div class="product">
										<div class="product_image"><a href="detail.php">
										<?php echo '<img width="200px" src="'.$result['link_gambar'].'"/>'; ?> 
										
										</a>
										</div>
										<div class="product_content">
											<div class="product_title"><a href="detail.php"><?php echo $result['nama_produk'];?> </a></div>
											<div class="product_price"><?php echo 'IDR '.$result['harga'];?>,00 </div><p><?php echo $result['satuan_beli'];?></p>
											<input type="submit" class="button" name="submit_detail" value="See details"></input>
										</div>
									</div>
									</form>
								<?php
								}
	
							}
						?>
						
				</div>
<!-- ================================================================================================================================================================= -->				
				<div class="product_grid core" style="display:none">
					
						<?php
			
						$q = $link->query("SELECT * FROM ecatalog WHERE nama_produk='core'");
							
							if($q->num_rows > 0){
							
								while(	$result=mysqli_fetch_array($q)){
									
									
								?>
									<form class="" action="detail.php" method="post" enctype="multipart/form-data">
									<input type="hidden" size="55" name="kueri" value="<?php
									$no_id=	$result['id_produk'];								
									 echo "" ."SELECT * FROM ecatalog WHERE id_produk =$no_id". " "; ?>" ></input>
									
									<div class="product">
										<div class="product_image"><a href="detail.php">
										<?php echo '<img width="200px" src="'.$result['link_gambar'].'"/>'; ?> 
										</a>
										</div>
										<div class="product_content">
											<div class="product_title"><a href="detail.php"><?php echo $result['nama_produk'];?> </a></div>
											<div class="product_price"><?php echo 'IDR '.$result['harga'];?>,00 </div><p><?php echo $result['satuan_beli'];?></p>
											<input type="submit" class="button" name="submit_detail" value="See details"></input>
										</div>
									</div>
									</form>
								<?php
								}
	
							}
						?>
						
				</div>
<!-- ================================================================================================================================================================= -->				
				<div class="product_grid door" style="display:none">
					
						<?php
			
						$q = $link->query("SELECT * FROM ecatalog WHERE nama_produk='door'");
							
							if($q->num_rows > 0){
							
								while(	$result=mysqli_fetch_array($q)){
									
									
								?>
									<form class="" action="detail.php" method="post" enctype="multipart/form-data">
									<input type="hidden" size="55" name="kueri" value="<?php
									$no_id=	$result['id_produk'];								
									 echo "" ."SELECT * FROM ecatalog WHERE id_produk =$no_id". " "; ?>" ></input>
									
									<div class="product">
										<div class="product_image"><a href="detail.php">	
										<?php echo '<img width="200px" src="'.$result['link_gambar'].'"/>'; ?> 
										</a>
										</div>
										<div class="product_content">
											<div class="product_title"><a href="detail.php"><?php echo $result['nama_produk'];?> </a></div>
											<div class="product_price"><?php echo 'IDR '.$result['harga'];?>,00 </div><p><?php echo $result['satuan_beli'];?></p>
											<input type="submit" class="button" name="submit_detail" value="See details"></input>
										</div>
									</div>
									</form>
								<?php
								}
	
							}
						?>
						
				</div>
<!-- ================================================================================================================================================================= -->				
<!-- ================================================================================================================================================================= -->				
				<div class="product_grid cutting_board" style="display:none">
					
						<?php
			
						$q = $link->query("SELECT * FROM ecatalog WHERE nama_produk='cutting_board'");
							
							if($q->num_rows > 0){
							
								while(	$result=mysqli_fetch_array($q)){
									
									
								?>
									<form class="" action="detail.php" method="post" enctype="multipart/form-data">
									<input type="hidden" size="55" name="kueri" value="<?php
									$no_id=	$result['id_produk'];								
									 echo "" ."SELECT * FROM ecatalog WHERE id_produk =$no_id". " "; ?>" ></input>
									
									<div class="product">
										<div class="product_image"><a href="detail.php">	
										<?php echo '<img width="200px" src="'.$result['link_gambar'].'"/>'; ?> 
										</a>
										</div>
										<div class="product_content">
											<div class="product_title"><a href="detail.php"><?php echo $result['nama_produk'];?> </a></div>
											<div class="product_price"><?php echo 'IDR '.$result['harga'];?>,00 </div><p><?php echo $result['satuan_beli'];?></p>
											<input type="submit" class="button" name="submit_detail" value="See details"></input>
										</div>
									</div>
									</form>
								<?php
								}
	
							}
						?>
						
				</div>
<!-- ================================================================================================================================================================= -->				
<!-- ================================================================================================================================================================= -->					
					
				<div class="product_grid parket" style="display:none">
					
						<?php
			
						$q = $link->query("SELECT * FROM ecatalog WHERE nama_produk='parket'");
						
						
						
							if($q->num_rows > 0){
							
								while(	$result=mysqli_fetch_array($q)){
									
									
								?>
									<form class="" action="detail.php" method="post" enctype="multipart/form-data">
									<input type="hidden" size="55" name="kueri" value="<?php
									$no_id=	$result['id_produk'];								
									 echo "" ."SELECT * FROM ecatalog WHERE id_produk =$no_id". " "; ?>" ></input>
									 
									<div class="product">
										<div class="product_image"><a href="detail.php">	
										<?php echo '<img width="200px" src="'.$result['link_gambar'].'"/>'; ?> 
										</a>
										</div>
										<div class="product_content">
											<div class="product_title"><a href="detail.php"><?php echo $result['nama_produk'];?> </a></div>
											<div class="product_price"><?php echo 'IDR '.$result['harga'];?>,00 </div><p><?php echo $result['satuan_beli'];?></p>
											<input type="submit" class="button" name="submit_detail" value="See details"></input>
										</div>
									</div>
									</form>
								<?php
								}
	
							}
						?>
						
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
  <script src="js/stellar.js"></script>
 <script src="js/theme.js"></script>


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
<script src="js/custom.js"></script>
</body>
</html>