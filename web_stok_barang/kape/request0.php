<?php
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	
}
include "Connection.php";


$tanggal			= $_POST['tanggal'];
$from				= $_POST['city'];
$to					= $_POST['city2'];
$type			= $_POST['type'];
$session = $_SESSION['username'];


if (mysql_query("INSERT INTO `request` (tanggal,from1,to1,type,session) VALUES('$tanggal','$from','$to','$type','$session')"))
{
	  echo "<script>alert('data berhasil dikirim'); 
		document.location.href='trunk.php'</script>\n";
}	
else {
	echo "<script>alert('data gagal dikirim'); 
		document.location.href='trunk.php'</script>\n";
		}

			
?>