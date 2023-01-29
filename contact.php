<?php
include("dbconnect.php");
//$note=$_REQUEST['note'];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
.contact-form{
	width: 85%;
	max-width: 600px;
	background: #f1f1f1;
	position: absolute;
	top: 50%;
	left:50%;
	transform: translate(-50%,-50%);
	padding: 30px 40px;
    box-sizing: border-box;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 0 20px #000000b3;
    font-family: arial;
    font-weight: bold;
}
.contact-form h1{
	margin-top: 0;
    font-weight: 200;
}
label{
display: block;
text-align: left;
color: #333;
text-transform: uppercase;
font-size: 20px;
}

input{
width: 100%;
background:none ;
border-radius: 8px;
 margin-top: 6px;
font-size: 20px;
}
textarea
{
    border-radius: 8px;
	width: 100%;
	background:none ;
    border-width: 1px solid gray;
    font-size: 18px;
    margin-top: 6px;
    

}

	</style>


</head>
<body style="background-image:url(project_images/raaj.jpg); background-size: cover; margin: 0;padding: 0;">
<div class="contact-form">
	<h1>CONTACT US!</h1>
<form action="user_process.php" method="post" name="user">
	
<label>Name:-</label><input type="text" name="name" value="" required pattern="^[A-Za-z]+" autocomplete="off" placeholder="Name"><br>
<label>City:-</label><input type="text" name="city" value="" placeholder="City Name" required pattern="^[A-Za-z]+" autocomplete="off"><br>
<label>Email:-</label><input type="email" name="email" value="" required="" placeholder="abc@xyz.com"> <br>
<label>Message:-</label><textarea name="message" required="" placeholder="Message"></textarea>
<input type="submit" name="submit" value="Submit" style="width: 50%; background: #9b59b6; padding: 14px 0; color: white; text-transform: uppercase;
cursor: pointer;margin-top: 8px; display: inline-block;">
<br>
<br>
</div>
</form>
<a href="index.php"><button style="float: right; margin-top: 550px; padding: 20px;color: white; border-radius: 10px; background: #9b59b6; width: 20%; font-weight: bold; font-size: 25px;">Click to go home.</button>
</a>
</body>
</html>

