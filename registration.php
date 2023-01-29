<?php
session_start();
header('location:login.php');
 
$con=mysqli_connect('localhost','root');
if($con)
{
	echo "connect";
} 
else 
{ 
	echo "not";
}
 
mysqli_select_db($con,'php_tutorial');

$name=$_POST['user'];
$pass=$_POST['password'];
$email=$_POST["email"];
$no=$_POST["no"];

$q="select * from signup where uname='$name' && email='$email' && num='$no' && pass='$pass'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);
if($num>0)
{
        	echo '<script type="text/javascript">';
			echo 'alert ("Duplicate Data!")';
			echo '</script>';
	
}
else
{
	
	$qy="insert into signup (uname,email,num,pass) values('$name','$email','$no','$pass')";
	mysqli_query($con,$qy);
	        $_SESSION['success']="YOU ARE REGISTERD";
    echo "<script> window.location='login.php';</script>";   
	       
}	
// if(isset($_POST["signup"]))
// {
// 	$username=$_POST["user"];
// 	$password=$_POST["password"];
    

// 	$query="select * from signup where uname='$username' && pass='$password' ";
// 	$result=mysqli_query($con,$query);
				
		
	
// 	}
	
?>


