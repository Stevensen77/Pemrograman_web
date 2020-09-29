<?php
  session_start();
  ?>
<head>
<title>Laporan - KELOMPOK 4 MART</title>
<style>
.input1 {
	height: 20px;
	font-size: 12px;
	padding-left: 5px;
	margin: 5px 0px 0px 5px;
	width: 97%;
	border: none;
	color: red;
}
table {
	border: 1px solid #cecece;
}
.td {
	border: 1px solid #cecece;
}
#kiri{
width:50%;
float:left;
}

#kanan{
width:50%;
float:right;
padding-top:20px;
margin-bottom:9px;
}
</style>
</head>

<body onLoad="window.print()">
<?php
  include "../config/koneksi.php";
  include "../config/fungsi_indotgl.php";
  include "../config/library.php";
  include "../config/fungsi_rupiah.php";

  $filter = $_POST['tahun'].'-'.$_POST['bulan'];
  $bulan = Bulan($_POST['bulan']);

  if($bulan=="Januari")
  {
    $bulan_terpilih=01;
  }
  else if($bulan=="Februari")
  {$bulan_terpilih='02';}
  else if($bulan=="Maret")
  {$bulan_terpilih='03';}
  else if($bulan=="April")
  {$bulan_terpilih='04';}
  else if($bulan=="Mei")
  {$bulan_terpilih='05';}
  else if($bulan=="Juni")
  {$bulan_terpilih='06';}
  else if($bulan=="Juli")
  {$bulan_terpilih='07';}
  else if($bulan=="Agustus")
  {$bulan_terpilih='08';}
  else if($bulan=="September")
  {$bulan_terpilih='09';}
  else if($bulan=="Oktober")
  {$bulan_terpilih='10';}
  else if($bulan=="November")
  {$bulan_terpilih='11';}
  else if($bulan=="Desember")
  {$bulan_terpilih='12';}


  $no=0;

if (isset($_POST['submit'])){
echo "<center><h2 style='margin-bottom:3px;'>KELOMPOK 4 MART</h2>
    Laporan Daftar belanja Pada KELOMPOK 4 MART pada : $bulan $_POST[tahun]</center><hr/>

		  <table width=100% cellpadding=6>
          <tr style='color:#fff; height:35px;' bgcolor=#000>
          <th>No</th>
          <th>No.order</th>
          <th>Nama Kasir</th>
          <th>Nama Produk</th>
          <th>Jumlah Beli</th>
          <th>Total Bayar</th>
          <th>Tgl. Pesan</th>
          <th>Jam</th>
          </tr>";


      $tampil=mysql_query("SELECT *
      FROM orders
      INNER JOIN orders_detail
      ON orders.id_orders = orders_detail.id_orders
      INNER JOIN produk
      on orders_detail.id_produk = produk.id_produk
      where tgl_order like '%$bulan_terpilih%' GROUP BY orders.id_orders
      ");


      $total_pemasukan=0;
      $total_produk=0;

		  $no = $no+1;
		  while ($r=mysql_fetch_array($tampil))
      {
        $total_produk=$total_produk+$r['jumlah'];
        $total_pemasukan=$total_pemasukan+$r['total_bayar'];
		  $tanggal=tgl_indo($r['tgl_order']);
		  echo "<tr>
				<td align=center>$no</td>
				<td align=center>$r[id_orders]</td>
                <td>$r[nama_kustomer]</td>
                <td>$r[nama_produk]</td>
                <td>$r[jumlah]</td>
                <td>$r[total_bayar]</td>
                <td>$tanggal</td>
                <td>$r[jam_order]</td>

                </tr>";

				$no++;
}
echo "</table><tr><td><br/>
<span style='font-size:30px'>Total Pemasukan :
".$total_pemasukan."</span><br>
<span style='font-size:30px'>Total Produk Terjual:
".$total_produk."</span>
<span style='float:right; text-align:center;'> KELOMPOK 4 MART , $tgl_sekarang <br/>
										Karyawan<br/></br></br>
								(.............................................)
								<br/>$_SESSION[namalengkap]</span></td></tr>";
}else{
echo "<center><h2 style='margin-bottom:3px;'>KELOMPOK 4 MART</h2>
    Laporan Transaksi Pembelian Pada KELOMPOK 4 MART : $bulan $_POST[tahun]</center><hr/>

		  <table width=100% cellpadding=6>
          <tr style='color:#fff; height:35px;' bgcolor=#000><th>No</th><th>No.order</th><th>Nama Produk</th><th>Berat</th><th>Jumlah</th><th>Harga</th><th>Subtotal</th></tr>";

		  $tampil=mysql_query("SELECT orders_detail.jumlah * produk.harga as total, sum(orders_detail.jumlah) as jumlahh,  orders.id_orders, orders.nama_kustomer, orders.telpon, orders.tgl_order, orders.jam_order, orders.status_order, orders_detail.jumlah, produk.nama_produk, produk.berat, produk.harga
      FROM orders left join orders_detail on orders.id_orders=orders_detail.id_orders
		  left join produk on orders_detail.id_produk=produk.id_produk where tgl_order like '$filter%' GROUP BY orders.id_orders");
		  $no = $no+1;
		  while ($r=mysql_fetch_array($tampil)){
		  $tanggal=tgl_indo($r['tgl_order']);
		  echo "<tr>
				<td align=center>$no</td>
				<td align=center>$r[id_orders]</td>
                <td>$r[nama_produk]</td>
				<td>$r[berat] Kg</td>
				<td>$r[jumlah]</td>
                <td>Rp $r[harga]</td>
                <td>Rp $r[total]</td></tr>";
				$no++;
}
echo "</table><tr><td><br/><span style='float:right; text-align:center;'> KELOMPOK 4 MART , $tgl_sekarang <br/>
										Karyawan<br/></br></br>
								(.............................................)
								<br/>$_SESSION[namalengkap]</span></td></tr>";
}
?>
