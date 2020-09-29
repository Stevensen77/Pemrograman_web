<?php
$mysql_hostname = "localhost";  //your mysql host name
$mysql_user = "root";			//your mysql user name
$mysql_password = "";			//your mysql password
$mysql_database = "db_ivory";	//your mysql database

$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
$mysqli = new mysqli("localhost",$mysql_user,"",$mysql_database);
//mysqli_select_db($mysql_database, $bd) or die("Error on database connection");

?>