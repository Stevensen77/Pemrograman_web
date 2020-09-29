<?php
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	
}
include "Connection.php";



if(isset($_POST["take_out"])) 

{
	$id_barang= $_POST['cb_id'];

	foreach ($id_barang as $id){ 

		echo $id;

	}

	$querysubmit1 = mysqli_query($connect, "SELECT * FROM input3 WHERE id ='".$id."'");
	 $data = mysqli_fetch_array($querysubmit1);
	 

		$nama=$data["nama_barang"];
		$type= $data["type"];
		$spesification= $data["spesification"];
		$tanggal= $data["tanggal"];
		$amount=$data["amount"];
		$note=$data["note"];
		$length=$data["length"];
		$capacity=$data["capacity"];
		$image=$data["upload"]; 
		$session = $_SESSION['username'];
	 
	if (mysqli_query($connect, "INSERT INTO `history` (nama_barang,type,spesification,tanggal_in,tanggal_out,amount,note,length,capacity,upload,session) 
		VALUES('$nama','$type','$spesification','$tanggal',NOW(),'$amount','$note','$length','$capacity','$image','$session')")
		&&
		mysqli_query($connect, "DELETE FROM `input3` WHERE id ='".$id."'"))
	{
		  echo "<script>alert('data berhasil dikirim'); 
			document.location.href='take.php'</script>\n";
	}	
	
}
?>