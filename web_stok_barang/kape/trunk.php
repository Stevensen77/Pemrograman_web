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

  <title>Trunk Request</title>

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
	<form method="post" action="request0.php" name = "insert" enctype="multipart/form-data">
			<div id="form-contract">
			<h2> Request </h2>
			<hr>
	<table width="473" height="169" border="0" cellpadding="0" cellspacing="0" align=center>
						<br>
						<tr>
						<td width="192" height="32">Tanggal</td>
						<td width="281">
							<input type="date" name="tanggal" placeholder="DDMMYYYY" class="form-control datepicker" type="text"  required>
                               <span class="help-block"></span>
							</td>
						</tr>
						<tr>
						<td>&nbsp;</td>
						<tr>
							<td width="192" height="32">From</td>
							<td width="281">
							<select name="city" id="city" class="form-control">
							  <option value="banten">Banten</option>
							  <option value="bekasi">Bekasi</option>
							  <option value="bogor">Bogor</option>
							  <option value="jakbar">Jakbar</option>
							  <option value="jakpus">Jakpus</option>
							  <option value="jaksel">Jaksel</option>
							  <option value="jaktim">Jaktim</option>
							  <option value="jakut">Jakut</option>
							  <option value="tanggerang">Tanggerang</option>
							</select></td></tr>
						
						<tr>
						<td>&nbsp;</td>
						<tr>
							<td width="192" height="32">To</td>
							<td width="281">
							<select name="city2" id="city2" class="form-control">
							  <option value="banten">Banten</option>
							  <option value="bekasi">Bekasi</option>
							  <option value="bogor">Bogor</option>
							  <option value="jakbar">Jakbar</option>
							  <option value="jakpus">Jakpus</option>
							  <option value="jaksel">Jaksel</option>
							  <option value="jaktim">Jaktim</option>
							  <option value="jakut">Jakut</option>
							  <option value="tanggerang">Tanggerang</option>
							</select>							
							</td>
						</tr>

						<td>&nbsp;</td>						
						<tr>
							<td width="192" height="32">Type</td>
							<td width="281">
							<select name="type" class="form-control">
							  <option value="Single Mode">Single Mode</option>
							  <option value="Multi Mode">Multi Mode</option>
							  <option value="GLC-T">GLC-T</option>
							  <option value="GLC-SX">GLC-SX</option>
							  <option value="GLC-EX">GLC-EX</option>
							</select></td></tr>						
						
						
						
						
												
						
						<tr>
							<td height="60"> </td>
							<td><input class="btn btn-primary" name="req" type="submit" value="Save" />
							<a class="btn btn-fourth" name="btn-primary" href="home.php">Back</a></td>
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
  
  		
	<script>
$('select').on('change', function() {
    
    $('select').find('option').prop('disabled', false);
    
    $('select').each(function() {
       $('select').not(this).find('option[value="' + this.value + '"]').prop('disabled', true); 
    });
    
});
	</script>
</body>
</html>