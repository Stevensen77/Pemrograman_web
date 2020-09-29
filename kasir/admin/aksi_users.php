<?php
session_start();
include "../config/koneksi.php";

$module=$_GET[module];
$act=$_GET[act];

// Input user
if ($module=='user' AND $act=='input'){
//  $pass=md5($_POST[password]);
  mysql_query("INSERT INTO users(username,
                                 password,
                                 nama_lengkap,
                                 email,
                                 no_telp,
                                 level,
                                 id_session,
                                 alamat_lengkap)
	                       VALUES('$_POST[username]',
                                '$_POST[password]',
                                '$_POST[nama]',
                                '$_POST[email]',
                                '$_POST[no_telp]',
                                '$_POST[level]',
                                '$_POST[id_session]',
                                '$_POST[alamat]')");
  header('location:media.php?module='.$module);
}

// Update user
elseif ($module=='user' AND $act=='update'){
  if (empty($_POST[password])) {
    mysql_query("UPDATE users SET nama_lengkap   = '$_POST[nama_lengkap]',
                                  email          = '$_POST[email]',
                                  username		= '$_POST[username]',
                                  no_telp        = '$_POST[no_telp]'
                           WHERE  id_session     = '$_POST[id]'");
    header('location:media.php?module='.$module);
  }}



  elseif ($module=='keranjang' AND $act=='hapus'){
  	mysql_query("DELETE FROM orders_temp WHERE id_orders_temp='$_GET[id]'");
  	header('Location:keranjang-belanja.html');
  }

  elseif ($module=='keranjang' AND $act=='update'){
    $id       = $_POST[id];
    $jml_data = count($id);
    $stok   = $_POST[stok];
    $jumlah   = $_POST[jml]; // quantity
  	$pembayaran=$_POST[pembayaran];
    for ($i=1; $i <= $jml_data; $i++){
  	if ($jumlah[$i] > $stok[$i]){
  		echo "<script>window.alert('Maaf, Stok Produk Tidak Mencukupi..');
  			window.location=('keranjang-belanja.html')</script>";
  	}
  // Apabila password diubah
  else{
    $pass=md5($_POST[password]);
    mysql_query("UPDATE users SET password        = '$pass',
                                 nama_lengkap    = '$_POST[nama_lengkap]',
                                 email           = '$_POST[email]',

                                 no_telp         = '$_POST[no_telp]'
                           WHERE id_session      = '$_POST[id]'");
  }

  header('location:media.php?module='.$module);
}
}
?>
