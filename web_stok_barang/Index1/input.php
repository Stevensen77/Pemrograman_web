<?php
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
include 'Connection.php';	
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Input</title>

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
			<h2> Input </h2>
			<hr>
	<table width="473" height="169" border="0" cellpadding="0" cellspacing="0" align=center>
						<br>
						<tr>
							<td width="192" height="32">Nama Barang</td>
							<td width="281">
							<select name="nama_barang" id="nama_barang" class="form-control">
							  <option value="Cable" name="Cable">Cable</option>
							  <option value="SFP" name="SFP">SFP</option>
							</select>
							</td>
						</tr>
						<tr>
						<td>&nbsp;</td>
						<tr>
							<td width="192" height="32">Type</td>
							<td width="281">
							<select name="type" class="form-control">
							  <option value="1">1</option>
							  <option value="2">2</option>
							</select>
							
							</td>
						</tr>
						
						<td>&nbsp;</td>
						<tr>
							<td width="192" height="32">Length</td>
							<td width="281">
							<select name="length" class="form-control">
							  <option value="1">1</option>
							  <option value="2">2</option>
							</select>
							
							</td>
						</tr>
						
						<td>&nbsp;</td>
						
						<tr>
							<td width="192" height="32">Capacity</td>
							<td width="281">
							<select name="capacity" class="form-control">
							  <option value="1">1</option>
							  <option value="2">2</option>
							</select>
							
							</td>
						</tr>
						<td>&nbsp;</td>
											
						<tr>
							<td width="192" height="32">Spesification</td>
							<td width="281">
							<input name="spesification" type="text" id="spesification" placeholder="Spesification" value = "" class="form-control" required /> 
							</td>
						</tr>
						
						<tr>
							<td>&nbsp;</td>
						</tr>
						
						<tr>
						<td>&nbsp;</td>
						</tr>
						<tr>
							<td width="192" height="32">Amount</td>
							<td width="281">
							<input name="amount" type="text" id="amount" placeholder="Amount" value = "" class="form-control" pattern="(?=.*[1-9]).{1,}" required />
							</td>
						</tr>
						<tr>
						<td>&nbsp;</td>
						</tr>
						<tr>
							<td width="192" height="32">Note</td>
							<td width="281">
							<textarea name="note" type="text" id="note" placeholder="Note" value = "" class="form-control" required /> </textarea>
							</td>
						</tr>
						<tr>
						<td>&nbsp;</td>
						</tr>
						<tr>
							<td width="192" height="32">Upload</td>
							<td width="281">
							<input type="file" name="fileToUpload" id="fileToUpload" required />
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>

						<tr>
							<td height="60"> </td>
							<td><input class="btn btn-primary" name="btn-primary" type="submit" value="Save" />
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
    $(function(){
      // bind change event to select
      $('#nama_barang').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url+".php"; // redirect
          }
          return false;
      });
    });
</script>

</body>

</html>