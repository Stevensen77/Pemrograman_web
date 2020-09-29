<?php
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	
}
include "Connection.php";

$nama_barang       	= $_POST['nama_barang'];
$type				= $_POST['type'];
$spesification		= $_POST['spesification'];
$length				= $_POST['length'];
$note				= $_POST['note'];
$capacity			= $_POST['capacity'];
$serial_number		= $_POST['serial_number'];
$product_number		= $_POST['product_number'];
$session = $_SESSION['username'];

/*
	
	mysqli_query($mysqli, "INSERT INTO `input3` (nama_barang,type,spesification,tanggal,length,note,capacity,serial_number,product_number,session) 
	VALUES('$nama_barang','$type','$spesification',NOW(),'$length','$note','$capacity','$serial_number','$product_number','$session')");
	  echo "<script>alert('data berhasil diinput'); 
	  document.location.href='input.php'</script>\n";
*/	


$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST["submitInput"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
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
	mysqli_query($mysqli, "INSERT INTO `input3` (nama_barang,type,spesification,tanggal,length,note,capacity,serial_number,product_number,upload,session) 
	VALUES('$nama_barang','$type','$spesification',NOW(),'$length','$note','$capacity','$serial_number','$product_number','" .$_FILES["fileToUpload"]["name"] ."','$session')");
	 echo "<script>alert('data berhasil dikirim'); 
	 document.location.href='input.php'</script>\n";
	
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

		
?>