<?php
include_once('mysql2i.class.php');

$server = "localhost";
$username = "root";
$password = "";
$database = "kasir";

$cc=mysql_connect($server,$username,$password) or die ("Gagal");
mysql_select_db($database) or die ("Database tidak ditemukan");
?>