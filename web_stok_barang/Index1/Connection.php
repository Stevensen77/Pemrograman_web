<?php
$mysql_hostname = "localhost";  //your mysql host name
$mysql_user = "root";			//your mysql user name
$mysql_password = "";			//your mysql password
$mysql_database = "kape";	//your mysql database

$connect = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Opps some thing went wrong");

//$connect = mysqli_connect("localhost", "kalamadh_ivory", "Ivory-11", "kalamadh_ivory"); 
//$database = mysqli_select_db($bd, $mysql_database) or die("Error on database connection");

?>