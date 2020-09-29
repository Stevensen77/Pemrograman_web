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
	<title>EDIT CATALOG</title>
	<meta name="description" content="Blueprint: A basic template for a page stack navigation effect" />
	<meta name="keywords" content="blueprint, template, html, css, page stack, 3d, perspective, navigation, menu" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
	
	
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/menu_bulat.css" />
		
		
	<style>
	
	 @media (min-width: 991.98px) 
	 {	
		
		#page-home{
			 background: linear-gradient(#CF081D,#09106C,#6C0914);
			
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
	 
	
	#table_catalog {
	
	  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 90%;
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


		
		<div class="page" id="page-home" style="">
			
			<header class="bp-header cf">
				
				<a href="menu_admin.php" ><img class="back_button" src="images/back.png" style=""/></a>
				
				<h1>Edit Daftar Produk E-catalog</h1>
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
		
		
		
		if(isset($_POST['update'])){
		
		

			$total = count($_POST['id_produk']);
			$id_produk = $_POST['id_produk'];
			$nama_produk = $_POST['nama_produk'];
			$kategori = $_POST['kategori'];
			$stok_produk = $_POST['stok_produk'];
			$harga = $_POST['harga'];
			$satuan_beli = $_POST['satuan_beli'];
			//$image = file_get_contents($_FILES['coba']['tmp_name']);
			$deskripsi = $_POST['deskripsi'];
			
			for($i = 0; $i < $total; $i++){
				$id_produk2 = $id_produk[$i];
				$nama_produk2 = $nama_produk[$i];
				$kategori2 = $kategori[$i];
				$stok_produk2 = $stok_produk[$i];
				$harga2 = $harga[$i];
				$satuan_beli2 = $satuan_beli[$i];
				//$image2 = 	$image[$i];
				$deskripsi2 = $deskripsi[$i];
					
				
				
				$set = "UPDATE ecatalog SET nama_produk= '".$nama_produk2."',kategori= '".$kategori2."',
						stok_produk= '".$stok_produk2."',harga= '".$harga2."',satuan_beli= '".$satuan_beli2."',
						deskripsi= '".$deskripsi2."'
						WHERE id_produk= '".$id_produk2."'";  
			
				$retval = mysqli_query($db,$set );
				if(! $retval )
				{
				  die('Could not update data: ' . mysqli_error());
				}
				echo "Updated data successfully\n";
			}
			
		
		}


		$result = mysqli_query($db,"SELECT * FROM ecatalog");
		
		
		echo "<form action='' method='post' enctype='multipart/form-data'>
		<center><table border='2' id='table_catalog'>
		<col width='10px'/>
		<col width='30px' />
		<col width='30px' />
		<col width='15px' />
		<col width='30px' />
		<col width='30px' />
		<col width='20px' />
		<col width='60px' />
		
		<tr>
		<th>Id</th>
		<th>Nama Produk</th>
		<th>Kategori</th>
		<th>Stok Produk</th>
		<th>Harga</th>
		<th>Satuan Beli</th>
		<th>Gambar</th>
		<th>Deskripsi</th>
		
		</tr>";

		while($row = mysqli_fetch_array($result))
		{
		
		echo "<tr  height='100'>";
		echo "<td><input type='text' name='id_produk[]' value='" . $row['id_produk'] . "'/></td>";
		echo "<td><input type='text' name='nama_produk[]' value='" . $row['nama_produk'] . "'/></td>";
		echo "<td><input type='text' name='kategori[]' value='" . $row['kategori'] . "'/></td>";
		echo "<td><input type='text' name='stok_produk[]' value='" . $row['stok_produk'] . "'/></td>";
		echo "<td><input type='text' name='harga[]' value='" . $row['harga'] . "'/></td>";
		echo "<td><input type='text' name='satuan_beli[]' value='" . $row['satuan_beli'] . "'/></td>";
		echo "<td><img style='width:100px' src='data:image/jpeg;base64,".base64_encode($row['gambar'] )." ' </td>";
		echo "<td><input type='text' name='deskripsi[]' style='width:100%' value='" . $row['deskripsi'] . "'/></td>";
		echo "</tr>";
		echo "";
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
	
</body>

</html>
