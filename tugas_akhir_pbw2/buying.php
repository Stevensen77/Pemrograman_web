

<!DOCTYPE html>
<html lang="en">
<head>
<title>TanahSubur.com | Buying</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400-Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/jquery.faded.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js2.js"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, .logo, .extra-banner');</script>
<![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
</head>
<body>
<!-- START PAGE SOURCE -->
<header>
<div class="atas" style="background-image: url('images/login_image.jpg');">

<?php 
echo"<style>
	
.col-sm-3.header_right {
	padding-left: 0;
	padding-top: 10px;
}

ul.header_right_box{
	
	padding:10;
	
	margin: 0 0 -7% 70%;
	list-style:none;
	
}
ul.header_right_box li{
	float:left;
	margin: 0 3%;
}
ul.header_right_box li p{
	font-size:1.2em;
font-weight: 600;

margin-top: 4px;
}
ul.header_right_box li p a{
	color:#3f444e;
}
ul.header_right_box li p a:hover{
	text-decoration:none;
	color:#d8232a;
}

}
ul.header_right_box li.last{
	margin-right:0;
}

	
	</style>";


// Initialize the session
session_start();

if(isset($_SESSION['username']))
{

 
 $username=$_SESSION['username'];

 echo "
		<div class='col-sm-3 header_right'>
			   <ul class='header_right_box'>
				 <li ><img style='width:25px;' src='images/user.png' alt=''/></li>
				 <li ><p><a href=''>".$_SESSION['username']."</a></p></li>
				 <li> <a href='login/logout.php' class='myButton' style='font-size:15px;padding:4px 16px;' >LOG OUT</a></li>
				 <li class='last'><i class='edit'> </i></li>
				 <div class='clearfix'> </div>
			   </ul>
			</div>
			";
 
 
 
}
else{
	
	//echo"Silahkan Login";
}

?>

<?php 
if(!isset($_SESSION['username'])){
	
?>
<div style="float:right;padding-right:20px;padding-top:30px;"><a href="login/login.php" class="myButton">LOGIN</a><a href="login/register.php" class="myButton">SIGN UP</a></div>
<?php
}

?>

  <div class="container_16">
    <div class="logo">
      <h1><a href="#"><img width="240px"; src="images/tanahsubur.png"></a></h1>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="selling.php" >Selling</a></li>
        <li><a href="buying.php" class="current">Buying</a></li>
       
        <li><a href="contacts.php">Contacts</a></li>
        <li><a href="privacy.php">Privacy</a></li>
      </ul>
    </nav>
    <div id="faded">
      <div class="rap"> <a href="#"><?php
				// Include the database configuration file
				 include "login/config.php";

				// Get images from the database
				$query = $link->query("SELECT * FROM data_lahan ORDER BY harga ASC");
				$x=0;
				if($query->num_rows > 0){
					while($rows = $query->fetch_assoc()){
						$imageURL[$x] = 'uploads/'.$rows["gambar_name"];
						$x++;
				?>
				<?php }
				}
				else{ ?>
					<p>No image(s) found...</p>
				<?php } ?>
				
				
					<?php
					
					
						?>
						
					<img  width="571" height="398" src="
					<?php
					echo $imageURL[0];
					
					?>" alt="" />
					
					</a> 		
					
					<a href="#"><img src="<?php
					echo $imageURL[1];
					
					?>" alt="" width="571" height="398"></a> 
					
		<a href="#"><img src="<?php
					echo $imageURL[2];
					
					?>" alt="" width="571" height="398"></a> </div>
      
	  <ul class="pagination">
    <marquee class="GeneratedMarquee" direction="left" scrollamount="10" behavior="scroll">Welcome to TanahSubur.com, paradise of arable land... ~Enjoy your journey~</marquee>
		
		<li> <a href="#" rel="0"> 
		<img style="width:100px;height:80px" src="<?php
					echo $imageURL[0]; ?>" alt=""> 
		<span class="left">
		<?php
					//$q = "SELECT * FROM data_lahan ORDER BY harga ASC LIMIT 3";
				
					//$hasil = mysqli_query($link, $q);
					//$rows = array();
					
					$q = $link->query("SELECT * FROM data_lahan ORDER BY harga ASC");
					$x=0;
					if($q->num_rows > 0){
					while($rows = $q->fetch_assoc()){
						$baris_lokasi[$x] = $rows['lokasi'];
						$baris_luas[$x] = $rows['luas'];
						$baris_sertifikat[$x] = $rows['sertifikat'];
						$baris_harga[$x] = $rows['harga'];
						$x++;
					}}
			
		
		
					echo "<p class='jarak'>Lokasi     : "."<br></p>";
					echo "<p class='jarak'>Luas       : "."<br></p>";
					echo "<p class='jarak'>Sertifikat : "."<br></p>";
					echo "<p class='jarak'>Harga      : "."<br></p>";
					
					
					?>
		
          </span>
		<span class="right">
		<?php
		echo "<p class='jarak'>".$baris_lokasi[0]."<br></p>";
		echo "<p class='jarak'>".$baris_luas[0]."<br></p>";
		echo "<p class='jarak'>".$baris_sertifikat[0]."<br></p>";
		echo  "<p class='jarak'>".$baris_harga[0]."<br></p>";
		
		
		
		
		?>
		</span>

		  </a> </li>
		  
        <li> <a href="#" rel="1"> 
		<img style="width:100px;height:80px" src="<?php
		echo $imageURL[1]; ?>" alt=""> 
		<span class="left"><?php
					
					echo "<p class='jarak'>Lokasi     : "."<br></p>";
					echo "<p class='jarak'>Luas       : "."<br></p>";
					echo "<p class='jarak'>Sertifikat : "."<br></p>";
					echo "<p class='jarak'>Harga      : "."<br></p>";
					
					?></span> 
					
		<span class="right"> 
		<?php
		
		
		echo "<p class='jarak'>".$baris_lokasi[1]."<br></p>";
		echo "<p class='jarak'>".$baris_luas[1]."<br></p>";
		echo "<p class='jarak'>".$baris_sertifikat[1]."<br></p>";
		echo  "<p class='jarak'>".$baris_harga[1]."<br></p>";
		
		
		
		?> </span>  </a> </li>
		  
        <li> <a href="#" rel="2"> 
		<img style="width:100px;height:80px" src="<?php
			echo $imageURL[2];
			?>" alt="">
		<span class="left"> <?php
					
					echo "<p class='jarak'>Lokasi     : "."<br></p>";
					echo "<p class='jarak'>Luas       : "."<br></p>";
					echo "<p class='jarak'>Sertifikat : "."<br></p>";
					echo "<p class='jarak'>Harga      : "."<br></p>";
					
					
					?> </span> 
		<span class="right">
		<?php
		echo "<p class='jarak'>".$baris_lokasi[2]."<br></p>";
		echo "<p class='jarak'>".$baris_luas[2]."<br></p>";
		echo "<p class='jarak'>".$baris_sertifikat[2]."<br></p>";
		echo  "<p class='jarak'>".$baris_harga[2]."<br></p>";
		
		?></span> </a> </li> 
		  
      </ul>
      </div>
  </div>
  </div>
</header>
<section id="content">
  <div class="container_16">
    <div class="clearfix">
      <section id="mainContent" class="grid_10">
        <div class="wrapper">
            
            <dl class="address">
              
			  <dt>
			  <p style="text-align:center;font-size:30px;font-family:Comic Sans MS, cursive, sans-serif", Times, serif;">DAFTAR PROFILE LAHAN YANG TERSEDIA</p>
			  <br><br>
			   <?php
				// Include the database configuration file
				 //include "login/config.php";

				// Get images from the database
				$query = $link->query("SELECT * FROM data_lahan ORDER BY uploaded_on ASC");
				$x=0;
				if($query->num_rows > 0){
					while($rows = $query->fetch_assoc()){
						$imageURL[$x] = 'uploads/'.$rows["gambar_name"];
						$x++;
				?>
				<?php }
				}
				else{ ?>
					<p>No image(s) found...</p>
				<?php } ?>
				
			  <?php 
			 
					
				
			 
				// eksekusi query
				// hitung hasil dan cek ada atau tidaknya data
					
				$q = "SELECT * FROM data_lahan";
				
				$hasil = mysqli_query($link, $q);
				
				$y=0;
				while($row=mysqli_fetch_array($hasil)){
					
					$lokasi=$row['lokasi'];
					$luas=$row['luas'];
					$sertifikat=$row['sertifikat'];
					$harga=$row['harga'];
					$keterangan=$row['keterangan'];
					$username=$row['username'];
					$idbuying=$row['id_lahan'];
					
					
					
					?>
					
					<img style="width:300px;height:200px;" src="<?php echo $imageURL[$y];?>" alt="" />
					
					<?php
					$y++;
					
					
					echo "<br><br>";
					echo "<pre>";
					echo "<p style='font-size:20px;'>";
					echo "Lokasi     : ".$lokasi."<br>";
					echo "Luas       : ".$luas."<br>";
					echo "Sertifikat : ".$sertifikat."<br>";
					echo "Harga      : ".$harga."<br>";
					echo "Keterangan : ".$keterangan."<br>";
					echo "Pemilik    : ".$username."<br>";
					//echo $lemparlahan;
					echo "</p>";
					echo "</pre>";
					echo "<br>";
					

					$_SESSION['userbuying'] = $username;
					$_SESSION['userid'] = $idbuying;
					
					
					?>	
					

					<a href="contacts.php?userbuying=<?php echo $username?>&userid=<?php echo $idbuying?>" class='button' >Contact Penjual</a>
					
					<!--<script>
					
					function tampil_penjual(){
					 document.getElementsByClassName("last").style.display="block";
					
						function js2();
					
					}

					</script>	-->
					
					<?php
					echo "<br><br><br><br><br>";
				}	

				
			  ?>
			  
			  </dt>
             
			  <dd> <br></dd>
			  </dl>
			    </div>
      </section>
      <aside class="grid_6">
        <div class="prefix_1">
          <article>
            <div class="box">
              <h2>Tips antisipasi Penipuan</h2>
              <h3>Agar terhindar dari segala bentuk penipuan mohon lakukan tips berikut:</h3>
              <p style='font-size:12px; text-align:left';>1. Jangan Tergiur dengan Barang yang Murah<br>
              2. Simpan dengan Baik Segala Bukti dan Transaksi<br>
			  3. jangan Berpatokan pada Testimoni<br>
			  4. Pastikan foto lahan Asli<br>
			  5. Selalu Utamakan COD (Cash on Delivery)</p>
            </div>
          </article>
          <div class="box"><article class="last">
            <h2>Taukah kamu?</h2>
			<h3>Terdapat macam - macam jenis tanah :</h3>
            <h3>Lahan Basah :</h3>
			<p style='font-size:14px; text-align:justify';>tanah pada lahan pertanian basah ini memiliki kandungan air yang tinggi, bahkkan tidak jarang lahan pertanian basah ini tergenang oleh air sepanjang waktu. Atau bisa juga lahan pertanian basah ini tidak pernah mengalami kekeringan yang berarti karena memiliki kandungan air yang berlimpah secara alami.</p>
            <h3>Lahan Kering :</h3>
			<p style='font-size:14px; text-align:justify';>pertanian lahan kering merupakan jenis pertanian yang dilakukan pada sebuah lahan yang kering, yaitu lahan yang memilki kandungan air yang rendah, hal ini disebabkan karena cuaca yang panas, sehingga membuat banyak sumber air yang berkurang dan juga sedikit. Namun demikian, biasanya sebuah pertanian lahan kering ini memanfaatkan crah hujan untuk membantu meningkatkan hasil pertanian yang dimilikinya.</p>
            <a href="https://ilmugeografi.com/ilmu-sosial/pertanian-lahan-basah-dan-lahan-kering" class="button">Read More</a> </article></div>
        </div>
      </aside>
    </div>
  </div>
</section>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2018 <a href="#">TanahSubur.com</a> - All Rights Reserved</p>
        <p style="color:white;" class="rf">Design by <a style="color:white;" href="#">Kelompok 6</a></p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
