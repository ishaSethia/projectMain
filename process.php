<?php


$id=0;
$update=false;
$name='';
$number='';
$mysqli = new mysqli('localhost', 'root', '', 'php_tutorial') or die(mysqli_error($mysqli));

if(isset($_POST['save']))
{
	$name= $_POST['name'];
	$number= $_POST['number'];
	
	$mysqli->query("INSERT INTO data(name,number) VALUES('$name', '$number') ") or die($mysqli->error);

	$_SESSION['message']="Record has been saved!";
	$_SESSION['msg_type']="success";
	header("location: crud.php");


}
if(isset($_GET['delete']))
{
	$id=$_GET['delete'];
	$mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());
	$_SESSION['message']="Record has been deleted!";
	$_SESSION['msg_type']="danger";
    header("location: crud.php");
}

if(isset($_GET['edit']))
{
	$id=$_GET['edit'];
	$update=true;
	$result=$mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());
	if (isset($result)==1) {
		$row=$result->fetch_array();
		$name=$row['name'];
		$number=$row['number'];
	    
	}
}
if (isset($_POST['update'])) {
	$id=$_POST['id'];
	$name=$_POST['name'];
	$number=$_POST['number'];
	
	$mysqli->query("UPDATE data SET name='$name', number='$number' WHERE id=$id") or die ($mysqli->error);
	$_SESSION['message']="Record has been updated!";
	$_SESSION['msg_type']="warning";
	header("location: crud.php");
}
?>