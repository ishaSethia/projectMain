<?php
$db_host="localhost";
$db_username="root";
$db_password="";
$db_name="php_tutorial";


$db_connect=mysqli_connect($db_host,$db_username,$db_password,$db_name) or die();




if(mysqli_connect_error()){
	echo"Failed to Connect to MySQL:".mysqli_connect_error();
}

//echo "Connection Successful";
?>