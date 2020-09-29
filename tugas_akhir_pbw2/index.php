<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  //header("location: login/login.php");
  //exit;
}
?>

<html lang="en">
<head>
<title>TanahSubur.com</title>
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
<header >

 <div class="page-header">
        <!--<h1>Hi, <b><?php//echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome to our site.</h1> -->
    </div>

	
    

<div class="atas" style="background-image: url('images/login_image.jpg');">



<?php 
echo"<style>
	
.col-sm-3.header_right {
	padding-left: 0;
	
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
//session_start();

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
<div style="float:right; padding-right:20px;padding-top:30px;"><a href="login/login.php" class="myButton">LOGIN</a><a href="login/register.php" class="myButton">SIGN UP</a></div>
<?php
}

?>

  <div class="container_16">
    <div class="logo">

      <h1><a href="#"><img width="240px"; src="images/tanahsubur.png"></a></h1>
    </div>
    <nav>
      <ul>
        <li><a href="index.php" class="current">Home</a></li>
        <li><a href="selling.php">Selling</a></li>
        <li><a href="buying.php">Buying</a></li>
  
        <li><a href="contacts.php">Contacts</a></li>
        <li><a href="privacy.php">Privacy</a></li>
      </ul>
    </nav>
	
	
	
    <div id="faded">
	
        <div class="rap"> <a href="#">
		
		<?php
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
        <article>
          <p style="font-size:25px">Explore the Best Indonesia's Arable Land</p>
          <h2 style="text-align: center;">Temukan berbagai macam jenis lahan subur dan siap tanam dari seluruh pelosok Negeri Nusantara</h2>
		  <br>
          <h3>Melihat kendala dalam dunia pertanian Indonesia saat ini, terutama mengenai penyediaan lahan, maka kami memiliki inovasi untuk membantu menyediakan sistem jual beli lahan subur 
		  bagi para pengusaha atau petani agar membantu meningkatkan potensi hasil tani Indonesia melalui pembuatan sebuah aplikasi terpadu.</h3>
          
          <a href="privacy.php" class="button">Baca selanjutnya..</a> </article>
        
		
		<article class="last">
          <h2>Lahan-lahan populer</h2>
          <h5>Terdapat berbagai macam pilihan lahan subur siap tanam untuk keperluan pertania,perkebunan, dan sejenisnya. </h5>
          <ul class="img-list clearfix">
            <li>
			<a href="#">
				<?php
				 
				// Get images from the database
				$query = $link->query("SELECT * FROM data_lahan ORDER BY harga ASC");
				$x=0;
				if($query->num_rows > 0){
					while($rows = $query->fetch_assoc()){
						
						$imageURL[$x] = 'uploads/'.$rows["gambar_name"];
						$x++;
						
				 }
				}
				?>
						
					<img width="130px" height="100px" src="
					<?php
					echo $imageURL[0];
					?>" alt="" />
					
			</a> 		
			</li>
			
            <li>
			<a href="#">
				
					<img width="130px" height="100px" src="
					<?php
					echo $imageURL[1];
					?>" alt="" />
					
			</a> 
			</li>
			
			
            <li>
			<a href="#">
	
					<img width="130px" height="100px" src="
					<?php
					echo $imageURL[2];
					?>" alt="" />
					
			</a> 
			</li>
			
			
            <li>
			<a href="#">
	
					<img width="130px" height="100px" src="
					<?php
					echo $imageURL[3];
					?>" alt="" />
					
			</a> 
			</li>
			
            <li>
			<a href="#">
	
					<img width="130px" height="100px" src="
					<?php
					echo $imageURL[4];
					?>" alt="" />
					
			</a> 
			</li>
			
            <!--<li><a href="#"><img src="images/thumb6.jpg" alt=""></a></li>
            <li><a href="#"><img src="images/thumb7.jpg" alt=""></a></li>
            <li><a href="#"><img src="images/thumb8.jpg" alt=""></a></li>
            <li><a href="#"><img src="images/thumb9.jpg" alt=""></a></li>-->
          </ul>
          <a href="buying.php" class="button">Read More</a> 
		  
		</article>
      </section>
      <aside class="grid_6">
        <div class="prefix_1">
          <article>
            <div class="box">
              <h2>LOGIN</h2>
			  
				<table>
				<form method="post" action="login.php" style="text-align:center;margin: 0;">

					<tr>
					<td style="color:black">Tertarik membeli? </td>
					</tr>
					<tr>
					<td style="color:black">Butuh info lebih lanjut? </td>
					</tr>
					<tr>
					<td></td><td><a href="login/login.php" class="tombol_login">LOGIN</a></td>
					</tr>
					<tr> <td><br></td></tr>
					
					
					<tr> <td><br></td></tr>
					
					
					<tr>
						<tr> <td><br><br></td></tr>
					<td><p style="color:black"> Belum mendaftar?</p></td>
					<td><a href="login/register.php" class="tombol_login">DAFTAR DISINI</a></td>
					</tr>

				</form>
				</table>
			  <!--
              <dl class="accordion">
                <dt><img src="images/icon1.gif" alt=""><a href="#">Prospecting</a></dt>
                <dd>Orta augueimperdiet massa uslerisec felise lecm id lorem ipsum.</dd>
                <dt><img src="images/icon2.gif" alt=""><a href="#">Listing Appointments</a></dt>
                <dd>Orta augueimperdiet massa uslerisec felise lecm id lorem ipsum.</dd>
                <dt><img src="images/icon3.gif" alt=""><a href="#">Open House</a></dt>
                <dd>Orta augueimperdiet massa uslerisec felise lecm id lorem ipsum.</dd>
                <dt><img src="images/icon4.gif" alt=""><a href="#">Buyer's Appointment</a></dt>
                <dd>Orta augueimperdiet massa uslerisec felise lecm id lorem ipsum.</dd>
                <dt><img src="images/icon5.gif" alt=""><a href="#">Thank You</a></dt>
                <dd>Orta augueimperdiet massa uslerisec felise lecm id lorem ipsum.</dd>
              </dl>-->
            </div>
          </article>
          <article class="last">
            <h2>Find Our Office</h2>
            <p><img src="images/map2.jpg" alt="" style="width:400px"></p>
            <div class="wrapper">
              <ul class="list1 grid_3 alpha">
                <li><a href="#">Jakarta</a></li>
                <li><a href="#">Bandung</a></li>
                <li><a href="#">Yogyakarta</a></li>
              </ul>
              <ul class="list1 grid_2 omega">
                <li><a href="#">Surabaya</a></li>
                <li><a href="#">Lampung</a></li>
                <li><a href="#">Papua</a></li>
              </ul>
            </div>
          </article>
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
<script type="text/javascript">
$(function () {
    //accordion
    $(".accordion dt").toggle(function () {
        $(this).next().slideDown();
    }, function () {
        $(this).next().slideUp();
    });
})
</script>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>