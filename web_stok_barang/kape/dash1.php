<?php
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cable</title>

  <!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/simple-sidebar.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"> </div>
	  <img src= "menu/telkom.JPG" width="250" height="200" alt="" class="img-circle gambar"/>
      <div class="list-group list-group-flush">
        <a href="home.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
		 <a href="input.php" class="list-group-item list-group-item-action bg-light">Input</a>
        <a href="trunk.php" class="list-group-item list-group-item-action bg-light">Trunk Request</a>
        <a href="manage.php" class="list-group-item list-group-item-action bg-light">Manage Item</a>
        <?php 
		
		if($_SESSION['position']=="admin" || $_SESSION['position']=="direksi")
        {echo '<a href="take.php" class="list-group-item list-group-item-action bg-light">Take Out</a>';}
		
		?>
        <a href="history.php" class="list-group-item list-group-item-action bg-light">History</a>
        <a href="logout.php" class="list-group-item list-group-item-action bg-light">Logout</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper"  >
<div style="background: #000080; color:#000080; padding: 10px 10px 10px 10px ">
<tr>
     <img src=menu/rno.jpg width="250" height="68" alt="" class="img-circle gambar"/>
     </tr>
</div>
     <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom" >    
		<button class="btn btn-primary" id="menu-toggle">Menu</button>   
     <h4 align= "right" style="padding-left: 70%"> <?php echo"Welcome ".$_SESSION['username']?></h4> 
     </nav>
	
	 <div class="container">
	<form method="post" action="submit0.php" name = "insert" enctype="multipart/form-data">
			<div id="form-contract">
			<h2> Cable </h2>
			<hr>
	<table width="1003" height="169" border="0" cellpadding="0" cellspacing="0" align=center>
						<br>
						<h3>1. Single Mode</h3>
						<tr align=center><td>
					 <button style="" type="button" class="btn"><img src= "menu/single.JPG" width="300" height="200" alt="" class="img-circle gambar"/></button>
						</td></tr>
						
						<tr>
							<td>
							<h4>Dilihat dari faktor properti sistem transmisinya, single mode adalah sebuah sistem transmisi data berwujud cahaya yang didalamnya hanya terdapat satu buah indeks sinar tanpa terpantul yang merambat sepanjang media tersebut dibentang.
							<br><br>
							Dilihat dari segi strukturalnya merupakan teknologi fiber optik yang bekerja menggunakan inti (core) serat fiber yang berukuran sangat kecil yang diameternya berkisar 8 sampai 10 mikrometer. Dengan ukuran core fiber yang sedemikian kecil, sinar yang mampu dilewatkannya hanyalah satu mode sinar saja
							<br><br>
							Single mode dapat membawa data dengan bandwidth yang lebih besar dibandingkan dengan multi mode fiber optik</h4>
														
							</td>
						</tr>
						<tr><td><br><br><br><br>
						<h3>2. Multi Mode</h3>
						<tr align=center><td>
					 <button style="" type="button" class="btn"><img src= "menu/multiple.JPG" width="300" height="200" alt="" class="img-circle gambar"/></button>
						</td></tr>
						
						<tr>
							<td>
							<h4>Dilihat dari faktor strukturalnya, teknologi Multi mode ini merupakan teknologi fiber optikyang menggunakan ukuran core yang cukup besar dibandingkan dengan single mode. Ukuran core kabel Multi mode secara umum adalah berkisar antara 50 sampai dengan 100 mikrometer.
							<br><br>
								Cahaya yang dibawanya tersebut akan mengalami pemantulan berkali-kali hingga sampai di tujuan akhirnya.Sinyal cahaya dalam teknologi Multi mode fiber optic dapat dihasilkan hingga 100 mode cahaya.</h4>
													
							</td>
						</tr>
						</td></tr>
						
						<tr align=center>
							
							<td><br><br><br><br><a class="btn btn-primary" name="btn-primary" type="submit" href="input.php">Input</a>
							<a class="btn btn-fourth" name="btn-primary" href="home.php">Back</a><br><br><br><br></td>
						</tr>

				</table>
		</div>
		</form>
	</div>
	 </form>
     
	   
	 
    </div>
    <!-- /#page-content-wrapper -->
 
  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery-1.10.2.js"></script>
  <link rel="stylesheet" href="assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">


  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>