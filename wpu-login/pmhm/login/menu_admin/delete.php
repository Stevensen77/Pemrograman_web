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
	<title>DELETE CATALOG</title>
	<meta name="description" content="Blueprint: A basic template for a page stack navigation effect" />
	<meta name="keywords" content="blueprint, template, html, css, page stack, 3d, perspective, navigation, menu" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	
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
	
	#table_catalog {
	
	  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 85%;
	  
	  table-layout: fixed;
	}
	
	#table_catalog th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  font-size:20px;
	  background-color: #4CAF50;
	  color: black;
	}
	#table_catalog input{
	
	  font-size:17px;
	}
	
	@media (min-width: 576px) {
	.back_button{
		width:100px;
		top:10px;
		left:0;
		position:fixed;
	}
	}
		
	</style>	
	
</head>

<body>



	<!-- navigation -->
	
	<!-- /navigation-->
	<!-- pages stack -->
	<div class="pages-stack">
		<!-- page -->
		
		
		
		<div class="page" id="page-home" style="">
			
			<header class="bp-header cf">
				
				<a href="menu_admin.php" ><img class="back_button" src="images/back.png" style=""/></a>
				
				<h1>Delete Daftar Produk E-catalog</h1>
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
					 
			
		
			
		
			</header>
			
		<?php
		
		
		$db = mysqli_connect("localhost","root","","pmhm");
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		
		

		
		


		$result = mysqli_query($db,"SELECT * FROM ecatalog");
		
		
		echo "<form action='' method='post'>
		<center><table border='2' id='table_catalog'>
		
		
		<tr>
		<th>Id</th>
		<th>Nama Produk</th>
		<th>Kategori</th>
		<th>Stok Produk</th>
		<th>Harga</th>
		<th>Satuan Beli</th>
		<th>Deskripsi</th>
		
		</tr>";

		while($row = mysqli_fetch_array($result))
		{
		$id_produk= $row['id_produk'];
		
			echo '<script>
				function myFunction2() {
								  
				if (confirm(\'Make sure to delete this item?\')) {';
								
				if(isset($_POST[$id_produk]))
				{
				$q3 = $db->query("DELETE FROM ecatalog WHERE id_produk='".$id_produk."'");
				}
				echo'
				window.location.reload(false); 
				} else {
				}
				}
				</script>
				';
				
		echo "<tr>";
		echo "<td>".$row['id_produk'] . "</td>";
		echo "<td>" . $row['nama_produk'] . "</td>";
		echo "<td>" . $row['kategori'] . "</td>";
		echo "<td>" . $row['stok_produk'] . "</td>";
		echo "<td>" . $row['harga'] . "</td>";
		echo "<td>" . $row['satuan_beli'] . "</td>";
		echo "<td>" . $row['deskripsi'] . "</td>";
		echo "<td>
		<form action='delete.php' method='post' enctype='multipart/form-data'>
		<input type='submit' name='".$id_produk."' class='fa fa-close' onclick='myFunction2()' style='font-size:36px' 
		value='".$id_produk."'>
		</input>
		</form>
		</td>";
		echo "</tr>";
		
		}
		echo "</table></center>";
		echo "<center><br><br><input type='submit' class='myButton' name='update' value='UPDATE' /></center>";
		echo "</form>";
		
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
    	  <a href='../login.php'><button class='myButton'>Login</button></a></center>";
  }
  ?>
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
		<script src="js/polyfills.js"></script>
		<script src="js/demo2.js"></script>
</body>

</html>
