
<!DOCTYPE html>
<html lang="en">
<head>
<title>TanahSubur | Selling</title>
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
		<link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="skeleton.css" > 
        



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
        <li><a href="selling.php" class="current">Selling</a></li>
        <li><a href="buying.php" >Buying</a></li>
        
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
			
		
		
					echo "<p style='line-height:0;'>Lokasi     : "."<br></p>";
					echo "<p style='line-height:0;'>Luas       : "."<br></p>";
					echo "<p style='line-height:0;'>Sertifikat : "."<br></p>";
					echo "<p style='line-height:0;'>Harga      : "."<br></p>";
					
					
					?>
		
          </span>
		<span class="right">
		<?php
		echo "<p style='line-height:0;'>".$baris_lokasi[0]."<br></p>";
		echo "<p style='line-height:0;'>".$baris_luas[0]."<br></p>";
		echo "<p style='line-height:0;'>".$baris_sertifikat[0]."<br></p>";
		echo  "<p style='line-height:0;'>".$baris_harga[0]."<br></p>";
		
		
		
		
		?>
		</span>

		  </a> </li>
		  
        <li> <a href="#" rel="1"> 
		<img style="width:100px;height:80px" src="<?php
		echo $imageURL[1]; ?>" alt=""> 
		<span class="left"><?php
					
					echo "<p style='line-height:0;'>Lokasi     : "."<br></p>";
					echo "<p style='line-height:0;'>Luas       : "."<br></p>";
					echo "<p style='line-height:0;'>Sertifikat : "."<br></p>";
					echo "<p style='line-height:0;'>Harga      : "."<br></p>";
					
					?></span> 
					
		<span class="right"> 
		<?php
		
		
		echo "<p style='line-height:0;'>".$baris_lokasi[1]."<br></p>";
		echo "<p style='line-height:0;'>".$baris_luas[1]."<br></p>";
		echo "<p style='line-height:0;'>".$baris_sertifikat[1]."<br></p>";
		echo  "<p style='line-height:0;'>".$baris_harga[1]."<br></p>";
		
		
		
		?> </span>  </a> </li>
		  
        <li> <a href="#" rel="2"> 
		<img style="width:100px;height:80px" src="<?php
			echo $imageURL[2];
			?>" alt="">
		<span class="left"> <?php
					
					echo "<p style='line-height:0;'>Lokasi     : "."<br></p>";
					echo "<p style='line-height:0;'>Luas       : "."<br></p>";
					echo "<p style='line-height:0;'>Sertifikat : "."<br></p>";
					echo "<p style='line-height:0;'>Harga      : "."<br></p>";
					
					
					?> </span> 
		<span class="right">
		<?php
		echo "<p style='line-height:0;'>".$baris_lokasi[2]."<br></p>";
		echo "<p style='line-height:0;'>".$baris_luas[2]."<br></p>";
		echo "<p style='line-height:0;'>".$baris_sertifikat[2]."<br></p>";
		echo  "<p style='line-height:0;'>".$baris_harga[2]."<br></p>";
		
		?></span> </a> </li> 
		  
      </ul>
      </div>
  </div>
	
  </div>
  </div>
</header>
<section id="content">
<?php if(isset($_SESSION['username']) || !empty($_SESSION['username'])){?>
  <div class="container_16">
    <div class="clearfix">
      <section id="mainContent" class="grid_10">
        
		 <div class="container2">
            <div class="form-container">
                <h1>
                    Jual Lahan Anda Disini!
                </h1>
                <form style="font-size:15px" method="post" id="reused_form" enctype="multipart/form-data">
                     <label for="name">Lokasi Tanah:</label>
                    <input id="lokasi" type="text" name="lokasi">
                    <label for="email">Luas:</label>
                    <input id="luas" type="text" name="luas" >
					 <label for="email">Sertifikat :</label>
                    <input id="sertifikat" type="text" name="sertifikat" >
					 <label for="email">Harga:</label>
                    <input id="harga" type="text" name="harga" >
                    <label for="message">Keterangan:</label>
                    <textarea id="keterangan" name="keterangan" rows="10" maxlength="600" required></textarea>
                    <label for="name"> Image Upload:</label>
                    <input type="file" class="form-control" id="image" name="image" >
                    <button class="button-primary" type="submit" >Post</button>
                </form>
                <div id="success_message" style="display:none">
                    <h3>Submitted the form successfully!</h3> 
                    <p> We will get back to you soon. </p>
                </div>
                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
            </div>
        </div>
		
		
      </section>
       <aside class="grid_6">
        <div class="prefix_1">
          <article>
            <div class="box">
              <h2>Syarat dan Ketentuan</h2>
              <h3><a href="#"></a></h3>
              <p >
			  <ol style='font-size:14px; text-align:left';>
			  <li>Website ini hanya menyediakan media jual beli tanah subur.</li>
			  <li>Segala bentuk pelanggaran hukum akan diproses pihak berwajib.</li>
              <li>Setiap lahan yang akan dijual harus memiliki sertifikat yang diakui negara indonesia.</li>
			  <li>Setiap lahan harus memiliki data yang lengkap.</li>
			  <li>jika Anda ingin menanyakan status lahan Anda, silakan kirim email ke tanahsubur@gmail.com atau hubungi 0888 8888 8888 SMS/WhatsApp)</li></ol></p>
            </div>
          </article>
         
        </div>
      </aside>
    </div>
  </div>
  <?php
  }
  else{
	  echo "<p style='color:white;font-size:16px';>Maaf, login terlebih dahulu untuk melihat informasi lebih lanjut!</p>";
  }
  ?>
</section>

<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2018 <a href="#">TanahSubur.com</a> - All Rights Reserved</p>
      <p style="color:white;" class="rf">Design by <a style="color:white;" href="#">Kelompok 6</a></p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>

<?php
// Include config file
require_once 'login/config.php';
 
// Define variables and initialize with empty values
$username = $lokasi = $lokasi_err = $harga = $keterangan =$sertifikat = $gambar =$luas = "";
$sertifikat_err = $harga_err = $luas_err = $keterangan_err = "";
$gambar = $gambar_name = $gambar_type= "";
$gambar_size ="";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate lokasi
    if(empty(trim($_POST["lokasi"]))){
        $lokasi_err = "Please enter a lokasi.";
    } else{
        // Prepare a select statement
		
        $sql = "SELECT id_lahan FROM data_lahan WHERE lokasi = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_lokasi);
            
            // Set parameters
            $param_lokasi = trim($_POST["lokasi"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $lokasi_err = "Lokasi ini sudah dijual sebelumnya! Jika tidak, tulis alamat tanah dengan lengkap.";
                } else{
                    $lokasi = trim($_POST["lokasi"]);
				
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    //VALIDATE LAIN2
	if(empty(trim($_POST['luas'])))
	{
		$luas_err = "Masukkan luas tanah!";
	}
	else{
		$luas = trim($_POST['luas']);
	}
	
	
	if(empty(trim($_POST['sertifikat'])))
	{
	$sertifikat_err = "Masukkan jenis sertifikat.";
	}
	else{
		$sertifikat= trim($_POST['sertifikat']);
	}
	
	if(empty(trim($_POST['harga'])))
	{
	$harga_err = "Masukkan harga.";
	}
	else{
		$harga = trim($_POST['harga']);
	}
	
	
    // Validate ket.
    if(empty(trim($_POST['keterangan']))){
        $keterangan_err = "Masukkan keterangan penjualan.";
    } else{
        $keterangan = trim($_POST['keterangan']);
    }
    
    $username=$_SESSION['username'];
	

	
	
	
    // Check input errors before inserting in database
   
		$statusMsg = '';

// File upload path
		$targetDir = "uploads/";
		$fileName = basename($_FILES["image"]["name"]);
		$targetFilePath = $targetDir . $fileName;
		$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

		if(empty($lokasi_err) && empty($harga_err) && empty($keterangan_err) && !empty($_FILES["image"]["name"]))
		{
			// Allow certain file formats
			$allowTypes = array('jpg','png','jpeg','gif','pdf');
			if(in_array($fileType, $allowTypes)){
				// Upload file to server
				if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
					// Insert image file name into database
					$insert = $link->query("INSERT INTO data_lahan (lokasi, luas, sertifikat, harga, keterangan, gambar_name, uploaded_on,username) VALUES ('".$lokasi."','".$luas."','".$sertifikat."','".$harga."','".$keterangan."','".$fileName."', NOW(),'".$username."')");
					if($insert){
						$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
					}else{
						$statusMsg = "File upload failed, please try again.";
					} 
				}else{
					$statusMsg = "Sorry, there was an error uploading your file.";
				}
			}else{
				$statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
			}
		}else{
			$statusMsg = 'Please select a file to upload.';
		}

		
		echo $statusMsg;
		
		
   
	    // Close connection
    mysqli_close($link);
	
	}
?>
<!-- END PAGE SOURCE -->
</body>
</html>
