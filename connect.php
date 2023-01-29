<?php

$con=mysqli_connect('localhost','root');


mysqli_select_db($con,'php_tutorial');
if(!$con)
{
	echo " not connected";
}

?>