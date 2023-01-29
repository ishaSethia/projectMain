<?php
session_start();
if (isset($_SESSION['type'])) {
  if($_SESSION['type'] != 'admin')
  {
echo "<script> window.location='edlogin.php';</script>";
}

}
else
{
 
echo "<script> window.location='login.php';</script>";
}
?>
<!DOCTYPE html>
<html>  
<head> 
	<title>CRUD on Login</title>  

<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<?php
include 'adminnav.php';
?>
	<?php require_once 'edlogprocess.php' ; ?>
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
	$result=$mysqli->query("SELECT * FROM signup") or die($mysqli->error);
	//pre_r($result);
	?>
    <div class="row justify-content-center">
    	<table class="table">

    		<center><h1 style="font-size: 50px; font-weight: bold; color: #588c7e;
			font-family: monospace;">CRUD Operations on Login Data</h1></center>
    		<thead>
    			<tr>
    				<th>User-name</th>
    				<th>Password</th>
    				<th>User-type</th>
    				<th colspan="2">Action</th>
    			</tr>
    		</thead>
    		<?php

    		while($row=$result->fetch_assoc()):
    		?>
    		<tr>
    			<td><?php
    			echo $row['uname'];
    			?></td>

    			<td><?php 
    			echo $row['pass'];
    			?></td>
    			<td><?php 
    			echo $row['type'];
    			?></td>
    			
    			<td>
    				<a href="edlogin.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
    				<a href="edlogprocess.php?delete=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('Confirm deletion')">Delete</a>
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
	<div class="row justify-content-center">
		<form action="edlogprocess.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">		
				<label>User-name</label>
				<input type="type" name="name" class="form-control" value="<?php echo $name;?>" required="" placeholder="Enter the username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="type" name="number" class="form-control" value="<?php echo $number;?>" required="" placeholder="Enter password ">
			</div>
			<div class="form-group">
				<label>Type of User</label>
				<input type="type" name="type" class="form-control" value="<?php echo $type;?>" required="" placeholder=" Admin or user ">
			</div>

			<div class="form-group">
				<?php 
				if($update==true):
				?>

				<button type="submit" class="btn btn-info" name="update">Update</button>
				
				<?php else: ?>
				<button type="submit" class="btn btn-primary" name="save">Save</button>
			 <?php endif; ?>
			</div>
		</form>
	</div>
 </div>
</body>
</html>