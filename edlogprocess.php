<?php

$id=0;
$update=false;
$name='';
$number='';
$type='';

$mysqli = new mysqli('localhost', 'root', '', 'php_tutorial') or die(mysqli_error($mysqli));
 
if(isset($_POST['save']))
{
	$name= $_POST['name'];
	$number= $_POST['number'];
	$type=$_POST['type'];
	$mysqli->query("INSERT INTO signup(uname,pass,type) VALUES('$name', '$number','$type') ") or die($mysqli->error);

	$_SESSION['message']="Record has been saved!";
	$_SESSION['msg_type']="success";
	
 	 	echo "<script>window.location='edlogin.php';</script>";
	//header("location: edlogin.php");


}
if(isset($_GET['delete']))
{
	$id=$_GET['delete'];
	$mysqli->query("DELETE FROM signup WHERE id=$id") or die($mysqli->error());
	$_SESSION['message']="Record has been deleted!";
	$_SESSION['msg_type']="danger";
echo "<script>window.location='edlogin.php';</script>";
	
}

if(isset($_GET['edit']))
{
	$id=$_GET['edit'];
	$update=true;
	$result=$mysqli->query("SELECT * FROM signup WHERE id=$id") or die($mysqli->error());
	if (isset($result)==1) {
		$row=$result->fetch_array();
		$name=$row['uname'];
		$number=$row['pass'];
		$type=$row['type'];
	}
}
if (isset($_POST['update'])) {
	$id=$_POST['id'];
	$name=$_POST['name'];
	$number=$_POST['number'];
    $type=$_POST['type'];

	$mysqli->query("UPDATE signup SET uname='$name', pass='$number', type='$type' WHERE id=$id") or die ($mysqli->error);
	$_SESSION['message']="Record has been updated!";
	$_SESSION['msg_type']="warning";
	echo "<script>window.location='edlogin.php';</script>";
	
	}
?>
