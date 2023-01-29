<?php


$id=0;

$mysqli = new mysqli('localhost', 'root', '', 'php_tutorial') or die(mysqli_error($mysqli));
if(isset($_GET['delete']))
{
	$id=$_GET['delete'];
	$mysqli->query("DELETE FROM user WHERE id=$id") or die($mysqli->error());
	$_SESSION['message']="Record has been deleted!";
	$_SESSION['msg_type']="danger";
    header("location: message.php");
}


?>