<?php
session_start();
include "../config/koneksi.php";
include "../config/library.php";
include "../config/session_member.php";

$module=$_GET['module'];
$act=$_GET['act'];

if ($module=='keranjang' AND $act=='tambah'){
	$sid = $_SESSION['namauser'];
	$sql2 = mysql_query("SELECT stok FROM produk
			WHERE id_produk='$_GET[id]'");

	$sqlj = mysql_query("SELECT jumlah FROM orders_temp
			WHERE id_produk='$_GET[id]'");

	$r=mysql_fetch_array($sql2);
	$st=mysql_fetch_array($sqlj);

	$tStok = $st['jumlah'] + 1;

  if ($r['stok'] == 0){
      echo "<script>window.alert('Maaf, Stok Produk Habis..');
			window.location=('keranjang-belanja.html')</script>";
  }elseif ($tStok > $r['stok']){
	  echo "<script>window.alert('Maaf, Stok Produk Tidak Mencukupi..');
			window.location=('keranjang-belanja.html')</script>";
  }
  else{
	// check if the product is already
	// in cart table for this session
	$sql = mysql_query("SELECT id_produk FROM orders_temp
			WHERE id_produk='$_GET[id]' AND id_session='$sid'");
	$ketemu=mysql_num_rows($sql);
	if ($ketemu==0){
		// put the product in cart table
		mysql_query("INSERT INTO orders_temp (id_produk, jumlah, id_session, tgl_order_temp, jam_order_temp)
				VALUES ('$_GET[id]', 1, '$sid', '$tgl_sekarang', '$jam_sekarang')");
	} else {
		// update product quantity in cart table
		mysql_query("UPDATE orders_temp
		        SET jumlah = jumlah + 1
				WHERE id_session ='$sid' AND id_produk='$_GET[id]'");
	}
	deleteAbandonedCart();
	header('Location:keranjang-belanja.html');
  }
}

elseif ($module=='keranjang' AND $act=='hapus'){
	mysql_query("DELETE FROM orders_temp WHERE id_orders_temp='$_GET[id]'");
	header('Location:keranjang-belanja.html');
}

elseif ($module=='keranjang' AND $act=='update'){
  $id       = $_POST[id];
  $jml_data = count($id);
  $stok   = $_POST[stok];
  $jumlah   = $_POST[jml]; // quantity
	$pembayaran   = $_POST[pembayaran];
	$total_bayar= $_POST[total_bayar];

  for ($i=1; $i <= $jml_data; $i++){
	if ($jumlah[$i] > $stok[$i]){
		echo "<script>window.alert('Maaf, Stok Produk Tidak Mencukupi..');
			window.location=('keranjang-belanja.html')</script>";
	}else{
    mysql_query("UPDATE orders_temp SET jumlah = '".$jumlah[$i]."',cara_pembayaran='".$pembayaran."'
								,total_bayar='".$total_bayar."'
                WHERE id_orders_temp = '".$id[$i]."'");


}
}
	header('Location:keranjang-belanja.html');
}


/*
	Delete all cart entries older than one day
*/
function deleteAbandonedCart(){
	$kemarin = date('Y-m-d', mktime(0,0,0, date('m'), date('d') - 1, date('Y')));
	mysql_query("DELETE FROM orders_temp
	        WHERE tgl_order_temp < '$kemarin'");
}
?>
