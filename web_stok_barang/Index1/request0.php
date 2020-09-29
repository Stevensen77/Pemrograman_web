<?php
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	
}
include 'Connection.php';

$tanggal			= $_POST['tanggal'];
$from				= $_POST['city'];
$to					= $_POST['city2'];
$capacity			= $_POST['capacity'];
$session            = $_SESSION['username'];

$queryrequest = "INSERT INTO request (tanggal,from1,to1,capacity,session) VALUES('$tanggal','$from','$to','$capacity','$session')";

if (mysqli_query($connect, $queryrequest))
{
	  echo "<script>alert('data berhasil dikirim'); 
		document.location.href='trunk.php'</script>\n";
}	
else {
	echo "<script>alert('data gagal dikirim'); 
		document.location.href='trunk.php'</script>\n";
		}

			
?>