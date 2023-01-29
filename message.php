<?php
session_start();
if (isset($_SESSION['type'])) {
  if($_SESSION['type'] != 'admin')
  {
  header('location:message.php');
}

}
else
{
 header('location:login.php');
}
?>
<!DOCTYPE html>
<html>  
<head>
	<title>CRUD on Contacts</title> 

<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<?php
include 'adminnav.php';
?>
	<?php require_once 'messagepro.php' ; ?>
	<?php
	if(isset($_SESSION['message'])):
	?>
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
		<?php
		
		echo $_SESSION['message'];
		unset($_SESSION['message']);
		?>
	</div>
	<?php
endif
    
	?>
	<div class="container">
	<?php
	$mysqli = new mysqli('localhost', 'root', '', 'php_tutorial') or die(mysqli_error($mysqli));
	$result=$mysqli->query("SELECT * FROM user") or die($mysqli->error);
	//pre_r($result);
	?>
    <div class="row justify-content-center">
    	<table class="table">

    		<center><h1 style="font-size: 50px; font-weight: bold; color: #588c7e;
			font-family: monospace;">CRUD Operations on Contact-us Data</h1></center>
    		<thead>
    			<tr>
    				<th>Name</th>
    				<th>City</th>
    				<th>Email</th>
    				<th>Message</th>
    				<th colspan="2">Action</th>
    			</tr>
    		</thead>
    		<?php

    		while($row=$result->fetch_assoc()):
    		?>
    		<tr>
    			<td><?php
    			echo $row['name'];
    			?></td>

    			<td><?php 
    			echo $row['city'];
    			?></td>

    			<td><?php
    			echo $row['email'];
    			?></td>

    			<td><?php
    			echo $row['message'];
    			?></td>
    			<td>
    				<a href="messagepro.php?delete=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('Confirm deletion')">Delete</a>
    			</td>
    		</tr>
    		<?php
    	endwhile;
    		?>
    	</table>

    </div>
    <?php
	function pre_r($array)
	{
		echo '<pre>';
		print_r($array);
		echo'</pre>';
	}
	?>
</body>
</html>