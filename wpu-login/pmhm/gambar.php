<html>
<head>
<title>Upload Data</title>


</head>

<body>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>Select File</td>
<td><input type="file" name="myfile"></td>
</tr>
<tr>


<form action="" target="_blank" method="POST">
<td><input type="text" name="isian"></td>
<td><input type="submit" name="submit1" value="upload"></td>
<td><input type="submit" name="submit2" value="display"></td>
</form>
</tr>


</table>
</form>



<?php
$dbh=new PDO("mysql:host=localhost;dbname=pmhm","root","");
//mysqli_connect("localhost","root","");


if(isset($_POST["submit1"]))
{
	$name=$_FILES['myfile']['name'];
	$type=$_FILES['myfile']['type'];
	$kategori=$_POST['isian'];
	$image = file_get_contents($_FILES['myfile']['tmp_name']);
//you keep your column name setting for insertion. I keep image type Blob.
$query = $dbh->prepare("INSERT INTO produk VALUES('',?,?,?,?)");  
$query->bindParam(3,$name);
$query->bindParam(4,$type);
$query->bindParam(2,$image);
$query->bindParam(1,$kategori);
$query->execute();
}


if(isset($_POST["submit2"]))
{	
	
$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
$sql = "SELECT * FROM produk WHERE kategori = 1";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'"/>';
}

?>

</body>
</html>