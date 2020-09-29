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
	<title>Take Out</title>

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
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/maintable.css">
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
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="home.php">Home</a>
									<a href="input.php">Input</a>
									<a href="manage.php">Manage Item</a>
									<a href="takeout.php">Takeout</a>
									<a href="history.php">History</a>
									<a href="logout.php">Logout</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
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
								<h1 class="text-white">Take Out Items</h1>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Start Feature Area -->
			<section class="amazing-works-area">
					<div class="container-table100 ">
						<div class="wrap-table100">
						    <form method="post" action="" enctype="multipart/form-data">
							
								<!--
    							<div class="form-row justify-content-center">
                                    <label>
                                        <select name="nama_barang" class="form-control">
            							  <option value="Cable">Cable</option>
            							  <option value="SFP">SFP</option>
            							</select>
                                        <br>
                                        <button type="submit" class="btn btn-primary ">Apply Filter<span class="lnr"></span></button><br><br>
                                    </label>
                                </div>
								-->
    						</form>
							<div class="table100">
								<table>
								
								 <?php
									include "Connection.php";

									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "db_ivory";

									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
									}

									$sql = "SELECT * FROM input3";
									$result = $conn->query($sql);

										
									?>
								
									<thead>
											<tr class="table100-head">
											<th class="column1">No</th>
											<th class="column2">Nama barang</th>
											<th class="column3">Type</th>
											<th class="column5">Date Added</th>
											<th class="column4">Length</th>
											<th class="column5">Capacity</th>
											<th class="column6">Serial Number</th>
											<th class="column7">Product Number</th>
											<th class="column8">Note</th>
											<th class="column9">PIC</th>
											<th class="column10">Select</th>
										</tr>
									</thead>
									<tbody>
									
									<form method="post" action="submit1.php" enctype="multipart/form-data">
										<tr>
											
												<?php
													 $no = 1;
													while($row = $result->fetch_assoc()){
														
												?>
												<tr>
													<td><?php echo $no ?></td>
													<td><?php echo $row["nama_barang"];?></td>
													<td><?php echo $row["type"];?></td>
													<td><?php echo $row["tanggal"];?></td>
													<td><?php echo $row["length"];?></td>
													<td><?php echo $row["capacity"];?></td>
													<td><?php echo $row["serial_number"];?></td>
													<td><?php echo $row["product_number"];?></td>
													<td><?php echo $row["note"];?></td>
													
													
													<td><?php echo $row["session"];?></td>
													<td><input type="checkbox" name="cb_id[]" value='<?php echo $row["id"];?>'/></td>
													
												</tr>
												<?php $no++;  } ?>
												
											</tr>
											
									</tbody>
									
									   
								
								</table>
								
									<div class="form-row" id="upload" style="margin:0 auto;">>
											<label>
												<span>Upload</span>
												<input type="file" name="fileToUpload" id="fileToUpload"/>
											</label>
									</div>
								<br>
								<div class="form-row justify-content-center">
                                    <label>
                                        <input class="btn btn-primary" name="take_out" type="submit" value="Take Out" />
										<a class="btn btn-fourth" name="btn-primary" href="manage.php">Back</a></td>
                                    </label>
								</form>
                                </div>
							</div>
						</div>
					</div>
				</div>
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
