

<!DOCTYPE html>
<html lang="en">
<head>
<title>TanahSubur | Contacts</title>
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
        
        <li><a href="contacts.php" class="current">Contacts</a></li>
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
      <section id="mainContent" class="grid_10" style="text-align:center">
	  
	  <?php 
	  if(isset($_SESSION['username'])){
	  ?>
        <article>
          <h2>Profilku</h2>
          <div style="font-size:20px;line-height:2" class="wrapper">
            <figure style="margin: 0 auto;"><img  src="images/profile.png" alt=""></figure>
            <dl class="address">
              
			  <dt><?php 
			  
			  
				$nama_user=$_SESSION['username'];
				
				
				$q = "SELECT * FROM users WHERE username='".$nama_user."'";
				// eksekusi query
				$hasil = mysqli_query($link, $q);
				// hitung hasil dan cek ada atau tidaknya data
				while($row=mysqli_fetch_array($hasil)){
					$username=$row['username'];
					$alamat=$row['alamat'];
					$no_hp=$row['no_hp'];
					$email=$row['email'];
				}
				
				
					echo "Nama   : ".$username."<br>";
					echo "Alamat : ".$alamat."<br>";
					echo "No Handphone / WA : ".$no_hp."<br>";
					echo "Email : ".$email."<br>";
					/*echo "Nego : ".$email."<br>";
					echo "Deal penjual : ".$email."<br>";*/
				
			  ?></dt>
             
			  <dd> <br></dd>
			   <a href="#" class="button">Read More</a> </div>
            </dl>
           
           
        </article>
		
		  <?php 
	  }
	  ?>
		
		
		<?php
		
		if(isset($_SESSION['username']) || !empty($_SESSION['username'])){
			if(isset($_GET['userbuying'], $_GET['userid'])){
				
				$username = $_GET['userbuying'];
				$idbuying = $_GET['userid'];
				
		$query = $link->query("SELECT * FROM data_lahan WHERE id_lahan='".$idbuying."' ORDER BY harga ASC");
			if($query->num_rows > 0)
			{
					while($rows = $query->fetch_assoc())
					{
						$imageURL = 'uploads/'.$rows["gambar_name"];
					}
			}
			
		$query2 = $link->query("SELECT * FROM users WHERE username='".$username."' ");
		
				while($rows = $query2->fetch_assoc())
				{
					$alamat_penjual = $rows['alamat'];
					$no_hp_penjual = $rows['no_hp'];
					$email_penjual = $rows['email'];
				}
		/*		
		$query3 = $link->query("SELECT * FROM nego_chat WHERE idlahan='".$idbuying."' ");
		
		
		
				while($rows = $query3->fetch_assoc())
				{
					$harganegonya = $rows['nego'];
					$dealpenjual = $rows['deal'];
				}
		*/
			
		echo "
			<article class='last'  style='display:block;'>
                    <h2>Profil Penjual</h2>
					<br>
					<p style='font-size:20px;color:red'>Hubungi Kontak Penjual Setelah Harga Deal Tercapai</p>
			<div style='font-size:20px;line-height:2' class='wrapper'>
            <figure style='margin: 0 auto;'><img style='width:300px;height:300px' src='".$imageURL."' alt=''></figure>
            <dl class='address'>
              
			  <dt>
			  
			";
		
			  ?>
			  
			  <?php 
			  $query3 = "SELECT * FROM nego_chat WHERE idlahan='".$idbuying."' ";
				$hasil = mysqli_query($link, $query3);
				
			  if(isset($_GET['userbuying'], $_GET['userid'])){
				  
				  //**--**--MEMILIH DATA LAHAN MILIKNYA**--**--//
				  if($_GET['userbuying']== $_SESSION['username'])
					{
						
					$query3 = "SELECT * FROM nego_chat WHERE idlahan='".$idbuying."' ";
					$hasil = mysqli_query($link, $query3);
				
					echo "Nama   : ".$username."<br>";
					echo "Alamat  : ".$alamat_penjual."<br>";
					echo "Nomor HP/WA   : ".$no_hp_penjual."<br>";
					echo "Email   : ".$email_penjual."<br>";
					
					$x=1;
					while($row=mysqli_fetch_array($hasil))
					{
						$harganegonya = $row['nego'];
						$dealpenjual = $row['deal'];
					if(!empty($harganegonya))
					{
					echo "Nego ".$x." : Rp. ".$harganegonya."<br>";
					}
						$x++;
					}
					if(!empty($dealpenjual)){
					echo "Deal   : Rp. ".$dealpenjual."<br>";
					}
					
						echo"<form method='post'>";
						echo " Masukkan harga deal anda <input type='text' id='textdeal' name='deal'> <input type='submit' class='button' id='tomboldeal' value='Deal'>";
						echo"</form>";
					}
				
				
				//**--**--MEMILIH DATA LAHAN BUKAN MILIKNYA**--**--//
				if(!($_GET['userbuying']== $_SESSION['username']))
				{
				echo "Nama   : ".$username."<br>";
				
				echo "Alamat  : ".$alamat_penjual."<br>";
				echo "Nomor HP/WA   : ".$no_hp_penjual."<br>";
				echo "Email   : ".$email_penjual."<br>";
				
				$x=1;
				while($row=mysqli_fetch_array($hasil))
				{
					$harganegonya = $row['nego'];
					$dealpenjual = $row['deal'];
					
				if(!empty($harganegonya))
				{					
				echo "Nego ".$x." : Rp. ".$harganegonya."<br>";
				}
					$x++;
				}
				if(!empty($dealpenjual))
				{
				echo "Deal   : Rp. ".$dealpenjual."<br>";
				}
				
					echo"<form method='post'>";
					echo " Masukkan harga nego anda <input type='text' id='textnego' name='nego'> <input type='submit' class='button' id='tombolnego' value='Nego'>";
					echo"<br><br><p style='font-size:20px;color:red'>Bertemu langsung dengan penjual adalah langkah selanjutnya yang sangat dianjurkan!</p>";
					echo"</form>";
					
				}
					
				
				
					
			  
			  }
			  ?>
			  <?php 
			  
			 
			  ?>
			  
			  
			  
			  <?php
			  if($_SERVER["REQUEST_METHOD"] == "POST")
			  {
				if(!($_GET['userbuying']== $_SESSION['username']))
				{
					$nego= trim($_POST['nego']);
					if(!empty($nego))
					{
						$insert = $link->query("INSERT INTO nego_chat (idlahan,userlahannya,nego,userpembelinya) 
						VALUES ('".$idbuying."','".$username."','".$nego."','".$_SESSION['username']."')");
					}
				}
				
				if($_GET['userbuying']== $_SESSION['username'])
				{
					$deal= trim($_POST['deal']);
					if(!empty($deal))
					{
						$sql = "UPDATE nego_chat SET deal='".$deal."' WHERE idlahan='".$idbuying."'";
						if(mysqli_query($link, $sql)){
							echo "Berhasil mengatur harga 'Deal'.";
						} else {
							echo "ERROR: Tidak berhasil mengekesekusi $sql. " . mysqli_error($link);
						}
						//$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
						//$update = $link->query("UPDATE nego_chat SET deal='". $deal."' WHERE idlahan='". $idbuying."'");
						
					}
				}
			  }
			  
			  ?>
			  
			  </dt>
             
			  <dd> <br></dd>
			   <!--<a href="#" class="button">Read More</a> --></div>
            </dl>
			</article>
      </section>
      <aside class="grid_6">
        <div class="prefix_1">
          <article>
            <div class="box">
              <h2>Perlu Bantuan?</h2>
              <h3>Hubungi kami di tanahsubur@gmail.com atau 0888 8888 8888</h3>
              <p>Penyedia Lahan Subur Berkompeten </p>
              <a href="privacy.php" class="button"> Read More </a> </div>
          </article>
          
        </div>
      </aside>
	  <?php
		}
	}
		else{
			echo "<p style='color:white; text-align:right; font-size:16px';'>Maaf, login terlebih dahulu untuk melihat informasi lebih lanjut!</p>";
		}
	
	  ?>
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