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
$amount				= $_POST['amount'];
$session = $_SESSION['username'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST["submit0"])) {
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
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	 echo "<script>alert('Input Failed. Only JPG, JPEG, PNG & GIF files'); 
		document.location.href='input.php'</script>\n";
    $uploadOk = 0;
}
else{
	
	mysql_query("INSERT INTO `input` (nama_barang,type,spesification,tanggal,length,note,capacity,amount,upload,session) 
	VALUES('$nama_barang','$type','$spesification',NOW(),'$length','$note','$capacity','$amount','" .$_FILES["fileToUpload"]["name"] ."','$session')");
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