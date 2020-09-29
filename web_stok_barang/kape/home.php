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

  <title>Inventory System</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

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
     <img src= "menu/rno.jpg" width="250" height="68" alt="" class="img-circle gambar"/>
     </tr>
</div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>

		  <h4 align= "right" style="padding-left: 70%"> <?php echo"Welcome ".$_SESSION['username']?></h4> 
      </nav>
		

      <div class="container-fluid">
	  <div class="row" style="">
				<div class="col-md-baru">
				<br /><br /><br />
				<table cellpadding="15">
					<tr><td>
					<a href="dash1.php"><button style="" type="button" class="btn"><img src= "menu/d3_1.JPG" width="400" height="300" alt="" class="img-circle gambar"/></button>
					 						</a></td></tr>					<tr><td>
						
						</a></td></tr>
						<tr><td>
				</table>
				</div>
				<div class="col-md-baru">
				<br /><br /><br />
				<table cellpadding="15">
					<tr><td>
					 <a href="dash2.php"><button style="" type="button" class="btn" ><img src= "menu/d1_1.JPG" width="400" height="300" alt=""  class="img-circle gambar"/></button>
						</a></td></tr>
					</table>
				</div>
				
			</div>
			</div>
			
		</div>
    </div></div></div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>