

<!DOCTYPE html>
<html lang="en">
<head>
<title>TanahSubur | Privacy</title>
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
        <li><a href="selling.php">Selling</a></li>
        <li><a href="buying.php">Buying</a></li>
        
        <li><a href="contacts.php">Contacts</a></li>
        <li><a href="privacy.php" class="current">Privacy</a></li>
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
	<table>
	<tr>
    <td><h2 style="font-size:40px">Tentang...</h2></td> <td style="padding-left:30px;"><img width="240px"; src="images/tanahsubur.png"></td>
	</tr>
	</table>
	<br><br>
    <p style="text-align:justify;font-size:20px;padding-right:40px">Indonesia juga dikenal sebagai negara agraris karena sebagian besar penduduknya bermata pencaharian dalam bidang pertanian dan bercocok tanam. 
	Sebagai negara agraris yang besar, dengan  kekayaan alam yang melimpah, posisi Indonesia dinilai amat strategis. Mulai dari sisi geografis, 
	Indonesia terletak pada daerah tropis yang memiliki curah hujan yang tinggi sehingga banyak jenis tumbuhan yang dapat hidup dan tumbuh dengan cepat. 
	Selain itu dari sisi geologi, Indonesia terletak pada titik pergerakan lempeng tektonik sehingga banyak terbentuk pegunungan yang kaya akan mineral. 
	Daerah perairan di Indonesia kaya sumber makanan bagi berbagai jenis tanaman, ikan, dan hewan laut, dan juga mengandung berbagai jenis sumber mineral.

<br><br>
Pertanian di Indonesia sudah menghasilkan berbagai macam komoditas ekspor, antara lain padi, jagung, kedelai, sayur-sayuran, aneka cabai, ubi, dan singkong. 
Selain itu, Indonesia juga dikenal dengan hasil perkebunannya, antara lain karet, kelapa sawit, tembakau, kapas, kopi, dan tebu. Sejarah mencatat Indonesia 
pernah mengalami masa swasembada pangan, khususnya komoditas beras, pada dekade 1980-an. Namun di sisi lain, Indonesia kerap mengimpor bahan pangan dari 
negara-negara lain. Persoalannya cukup dinamis, mulai dari persediaan yang terbatas, harga berbagai komoditas pangan yang sering bergejolak, praktik nakal 
dalam rantai distribusi pangan, hingga terbatasnya lahan pertanian..

<br><br>
Akibat dari terbatasnya lahan, pertanian di Indonesia mengalami stagnasi dan tidak berkembang. Bila ada peningkatan produksi jagung, akan ada penurunan 
produksi beras. Begitu juga bila produksi tebu naik, maka ada komoditas lain yang dikorbankan seperti jagung. Petani Indonesia pun dinilai masih banyak 
yang mengelola lahan kecil. Bahkan ada beberapa petani yang tidak memiliki lahan, apalagi lahan yang terbilang subur.
Lahan subur adalah lahan yang bisa dimanfaatkan untuk menanam tanaman. Menurut Future Directions International, "Tanah sangat penting untuk pertanian dan 
oleh karena itu hubungan antara tingkat lahan subur dan keamanan pangan patut dipertimbangkan. Diproyeksikan bahwa pada tahun 2050 dunia akan memiliki 
total sembilan miliar mulut untuk diberi makan, yang mewakili meningkat sekitar 40 persen pada tingkat saat ini. Ini akan menuntut tambahan satu miliar 
ton sereal dan 200 juta ton daging akan diproduksi setiap tahun pada tahun 2050. Namun, pertanyaannya apakah dunia memiliki cukup lahan subur untuk 
menyediakan makanan bagi populasi sebesar ini? "

Melihat kendala dalam dunia pertanian Indonesia saat ini, terutama mengenai penyediaan lahan, maka kami memiliki inovasi untuk membantu menyediakan 
sistem jual beli lahan subur bagi para pengusaha atau petani agar membantu meningkatkan potensi hasil tani Indonesia melalui pembuatan sebuah aplikasi terpadu.

</p>

E-mail: <a href="#">tanahsubur@gmail.com</a> </div>
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