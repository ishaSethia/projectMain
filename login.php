<?php
session_start();

?>
<!DOCTYPE html>
<html> 
<head>
<style type="text/css">
	.bu
{
  border:1px solid #00000;
          border-right: none;
      font-size: 16px;
      padding: 10px;
      background: #f1d829;
      font-weight: bold;
      cursor: pointer;
      outline: none;
         -webkit-border-top-right-radius:10px;
            -webkit-border-bottom-right-radius:10px;
            -moz-border-radius-toprighht:10px;
             -moz-border-radius-bottomright:10px;
            border-top-right-radius:10px;
            border-bottom-right-radius: 10px;
}

   
</style> 

	<title>Sign Up OR Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-image: url(project_images/hong.jpg); background-size: cover;">
	  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">RAAHI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="category.php">Categories<span class="sr-only">(current)</span></a>
      </li>
      
 
      <li class="nav-item active">
        <a class="nav-link" href="gall.php">Gallery<span class="sr-only">(current)</span></a>
      </li>
            <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact-us<span class="sr-only">(current)</span></a>
      </li>
      


</ul>
</div>
</nav>

	  	<div class="container-fluid" style="margin-top: 2rem"> 
		 
		<div class="row"> 
			<div class="col-md-6" >	
				<form  method="post">
					<h2 style="font-weight: bold;">LOGIN-IN</h2>
					<div class="form-group">
						<b><label>Username:</label></b>
						<input class="form-control col-6" name="user" placeholder="User name" required="" autocomplete="off"  />
					</div>
					<div class="form-group">
						<b><label>Password:</label></b>
						<input type="password" class="form-control col-6" name="password" placeholder="Password" required="" />
					</div>
					
					<button type="submit" name="login" class="bu">Login</button>
				</form>
			</div>
				
				<div class="col-md-6">	
		 		<h2 style="font-weight: bold;">SIGN-UP</h2>
				<form action="registration.php" method="post" >
<?php
  if(isset($_SESSION['success'])&&$_SESSION['success'] !='')
  {
    echo '<h2 class="bg-primary text-white" >' .$_SESSION['success']. '</h2>';
    unset($_SESSION['success']);
  }?>
					<div class="form-group">
						<b><label>User-Name:</label></b>
						<input type="text" class="form-control col-6" name="user" placeholder="Name" required="" id="name"  autocomplete="off" required pattern="^[A-Za-z]+" />
						<span id="user" class="text-danger"> </span>
					</div>

					<div class="form-group">
						<b><label>Email:</label></b>
						<input type="email" class="form-control col-6" name="email" placeholder="Email" required="" id="email" autocomplete="off" />
					</div>

					<div class="form-group">
						<b><label>Number:</label></b>
						<input type="text" class="form-control col-6" name="no" placeholder="Number" required pattern="^[0-9]+" minlength="10"autocomplete="off" maxlength="10" id="no" autocomplete="off"/>
					</div>

					<div class="form-group">
						<b><label>Password:</label></b>
						<input type="password" class="form-control col-6" name="password" placeholder="Password" required="" />
					</div>

					<button type="submit" name="signup" class="bu" >SignUp</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php

//header('location:login.php');
require_once "connect.php";
$msg="";
$type="";
if(isset($_POST["login"]))
{
	$username=$_POST["user"];
	$password=$_POST["password"];
    

	$query="select * from signup where uname='$username' && pass='$password' ";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)>0)
	{
		while ($row=mysqli_fetch_assoc($result)) {  
			if($row['type']=='admin')
			{
				$_SESSION['Admin']=$row['uname'];
				$_SESSION['type']=$row['type'];
				header('location:nav.php');
			}
			else
		{
			$_SESSION['User']=$row['uname'];
			$_SESSION['type']=$row['type'];
				header('location:table.php');
		}
		}
		
	}
	else
		{
			
			echo '<script type="text/javascript">';
			echo 'alert ("Email invalid or Not found or Not exist!")';
			echo '</script>';
		}
}

?>

<hr>
<?php
include "footer.php";
?>