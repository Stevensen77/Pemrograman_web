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

	$query = mysql_query("SELECT * FROM input3 WHERE id ='".$id."'");
	 $data = mysql_fetch_array($query);
	 

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
	 
	if (mysql_query("INSERT INTO `history` (nama_barang,type,spesification,tanggal_in,tanggal_out,amount,note,length,capacity,upload,session) 
		VALUES('$nama','$type','$spesification','$tanggal',NOW(),'$amount','$note','$length','$capacity','$image','$session')")
		&&
		mysql_query("DELETE FROM `input3` WHERE id ='".$id."'"))
	{
		  echo "<script>alert('data berhasil dikirim'); 
			document.location.href='take.php'</script>\n";
	}	
	
}
?>