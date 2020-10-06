<?php 
include 'config.php';
$id=$_POST['id'];
$nama=$_POST['nama'];
$tgl=$_POST['tgl'];

$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];

mysqli_query($con,"update barang_laku set nama='$nama', tanggal='$tgl', harga='$harga', jumlah='$jumlah' where id='$id'");
header("location:barang_laku.php");

?>