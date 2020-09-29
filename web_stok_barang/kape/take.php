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

  <title>Take Out</title>

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
			<div id="form-contract">
			<h2> Take Out </h2>
			<hr>
	<table width="473" height="169" border="0" cellpadding="0" cellspacing="0" align=center>
						<br>
						<tr>
						<form method="post" action="" enctype="multipart/form-data">
							<td width="192" height="32">Nama Barang</td>
							<td width="281">
							<select name="nama_barang" class="form-control">
							  <option value="Cable">Cable</option>
							  <option value="SFP">SFP</option>
							</select>
							</td>
						</tr>
						<tr>
						<td>&nbsp;</td>
						<tr>
						<td><input class="btn btn-primary" name="searching" type="submit" value="Searching" /></td>
						</form>
						</tr>
						<tr>
							<table  id="customers" class="" border="1" align = "center">
								<tr>
								<th>No</th>
								<th>Item Name</th>
								<th>Type</th>
								<th>Spesification</th>   
								<th>Date added</th>
								<th>Amount</th>
								<th>Note</th>
								<th>Length</th>
								<th>Capacity</th>
								<th>Upload</th>
								</tr>
								
					<form method="post" action="submit1.php" enctype="multipart/form-data">
								<?php
								
								if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
									
								}
								include "Connection.php";
								
								if(isset($_POST["searching"])) {
									$nama_barang= $_POST['nama_barang'];
									$no=1;
									$cari=mysql_query("SELECT * FROM `input` WHERE nama_barang ='".$nama_barang."'");

									if(mysql_num_rows($cari)>0){
										while($data = mysql_fetch_array($cari)){
										  ?>
										<tr>
											<td><?php echo $no ?></td>
											<td><?php echo $data["nama_barang"];?></td>
											<td><?php echo $data["type"];?></td>
											<td><?php echo $data["spesification"];?></td>
											<td><?php echo $data["tanggal"];?></td>
											<td><?php echo $data["amount"];?></td>
											<td><?php echo $data["note"];?></td>
											<td><?php echo $data["length"];?></td>
											<td><?php echo $data["capacity"];?></td>
											<td><a href="uploads/<?php echo $data["upload"]; ?>"><img style = "width: 100%;" src="uploads/<?php echo $data["upload"]; ?>"></a></td>
											<td><input type="checkbox" name="cb_id[]" value='<?php echo $data["id"];?>' /></td>
											<td><?php echo $data["id"];?></td>
										</tr>
										<?php $no++; } 
										 } 
								}
								?>
							</table></tr>
						
						

						<tr>
							<td height="60"> </td>
							<td><input class="btn btn-primary" name="take_out" type="submit" value="Take Out" />
							<a class="btn btn-fourth" name="btn-primary" href="manage.php">Back</a></td>
							
						</tr>
						</form></table></div></div></form>
     
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