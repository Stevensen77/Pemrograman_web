<?php
// Initialize the session

$db = mysqli_connect("localhost","root","","pmhm"); 

	if(isset($_POST['update'])){
		
			$id_produk = $_POST['id_produk'];
			$nama_produk = $_POST['nama_produk'];
			$kategori = $_POST['kategori'];
			$stok_produk = $_POST['stok_produk'];
			$harga = $_POST['harga'];
			$satuan_beli = $_POST['satuan_beli'];
			$deskripsi = $_POST['deskripsi'];
			
			
				$query = "UPDATE ecatalog SET nama_produk= '$nama_produk',kategori= '$kategori',
						stok_produk= '$stok_produk',harga= '$harga',satuan_beli= '$satuan_beli',
						deskripsi= '$deskripsi'
						WHERE id_produk= '$id_produk";  
				$retval = mysqli_query($db,$query );
				if(! $retval )
				{
				  die('Could not update data: ' . mysqli_error());
				}
				echo "Updated data successfully\n";

		 
		}
?>

