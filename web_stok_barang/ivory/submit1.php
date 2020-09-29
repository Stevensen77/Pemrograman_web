<?php
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	
}
include "Connection.php";



if(isset($_POST["take_out"])) 

{
	$id_barang= $_POST['cb_id'];
		
	if($id_barang==null){
		echo "<script>alert('Checklist data terlebih dahulu!'); 
			document.location.href='takeout.php'</script>\n";
	}else{
		foreach ($id_barang as $id)
		{ 

		echo $id;

		}
	  
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "db_ivory";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT * FROM input3 WHERE id ='".$id."'";
				$result = $conn->query($sql);

					
				
	//$query = mysql_query("SELECT * FROM input3 WHERE id ='".$id."'");
	// $data = mysql_fetch_array($query);
	$data= $result->fetch_assoc();

		$nama=$data["nama_barang"];
		$type= $data["type"];
		$tanggal= $data["tanggal"];
		$serial_number=$data["serial_number"];
		$product_number=$data["product_number"];
		$note=$data["note"];
		$length=$data["length"];
		$capacity=$data["capacity"];
		
		$status="out";
		
		$session = $_SESSION['username'];
	
	
$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}



else{
	$sql2="INSERT INTO `history` (nama_barang,type,tanggal_in,tanggal_out,serial_number,product_number,note,length,capacity,session,status,upload) 
	VALUES('$nama','$type','$tanggal',NOW(),'$serial_number','$product_number','$note','$length','$capacity','$session','$status','" .$_FILES["fileToUpload"]["name"] ."')";
	 echo "<script>alert('data berhasil dikirim'); 
	 document.location.href='input.php'</script>\n";
	 
	 	$sql3="DELETE FROM `input3` WHERE id ='".$id."'";
		
		mysqli_query($conn, $sql2);
		mysqli_query($conn, $sql3);
	
		echo "<script>alert('Takeout berhasil!'); 
		document.location.href='history.php'</script>\n
		";
	
}

	
	}
}


?>