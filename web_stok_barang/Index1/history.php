<?php
//include 'index.php';
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

  <title>History</title>

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
	  <img src= "menu/orang.JPG" width="250" height="200" alt="" class="img-circle gambar"/>
      <div class="list-group list-group-flush">
        <a href="home.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
		<a href="input.php" class="list-group-item list-group-item-action bg-light">Input</a>
        <a href="trunk.php" class="list-group-item list-group-item-action bg-light">Trunk Request</a>
        <a href="manage.php" class="list-group-item list-group-item-action bg-light">Manage Item</a>
        <a href="take.php" class="list-group-item list-group-item-action bg-light">Take Out</a>
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
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom"  >
    
    <button class="btn btn-primary" id="menu-toggle">Menu</button>
        
	<h4 align= "right" style="padding-left: 70%"> <?php echo"Welcome ".$_SESSION['username']?></h4> 
      </nav></nav>
      <div class="container-fluid">
  <div class="col-md-4" align="center">
  
  <?php
include "Connection.php";

//$connect = mysqli_connect("localhost", "kalamadh_ivory", "Ivory-11", "kalamadh_ivory");

//mysql_connect("localhost","kalamadh_ivory","Ivory-11");
//mysql_select_db("kalamadh_ivory") or die( "Unable to select database");
$queryhis = mysqli_query($connect, "SELECT * FROM history");
?>
<form action="" method="post">
    <table id="customers" >
        <tr>
	<th>No</th>
	<th>Item Name</th>
	<th>Type</th>
	<th>Spesification</th>   
	<th>Date added</th>
    <th>Amount</th>
	<th>Date out</th>
	<th>Note</th>
	<th>Length</th>
	<th>Capacity</th>
	<th>Upload</th>
    <th>Pic</th>
        </tr>
        <?php if(mysqli_num_rows($queryhis)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($queryhis)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nama_barang"];?></td>
			<td><?php echo $data["type"];?></td>
			<td><?php echo $data["spesification"];?></td>
			<td><?php echo $data["tanggal_in"];?></td>
			<td><?php echo $data["amount"];?></td>
			<td><?php echo $data["tanggal_out"];?></td>
			<td><?php echo $data["note"];?></td>
			<td><?php echo $data["length"];?></td>
			<td><?php echo $data["capacity"];?></td>
			<td><a href="uploads/<?php echo $data["upload"]; ?>"><img style = "width: 100%;" src="uploads/<?php echo $data["upload"]; ?>"></a></td>
			<td><?php echo $data["session"];?></td>
          </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
     
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