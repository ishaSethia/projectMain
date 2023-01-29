
<!DOCTYPE html>
<html>  
<head>
	<title>CRUD in Login</title> 

<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<?php require_once 'pro.php' ; ?>
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
	$mysqli = new mysqli('localhost', 'root', '', 'muskan') or die(mysqli_error($mysqli));
	$result=$mysqli->query("SELECT * FROM agents") or die($mysqli->error);
	//pre_r($result);
	?>
    <div class="row justify-content-center">
    	<table class="table">
    		<center><h1 style="font-size: 50px; font-weight: bold; color: #588c7e;
			font-family: monospace;">CRUD Operations on Agents Data</h1></center>
    		<thead>
    			<tr>
    				<th>Name</th>
    				<th>Contact</th>
    				<th colspan="2">Action</th>
    			</tr>
    		</thead>
    		<?php

    		while($row=$result->fetch_assoc()):
    		?>
    		<tr>
    			<td><?php
    			echo $row['Agent_name'];
    			?></td>

    			<td><?php 
    			echo $row['Number'];
    			?></td>
    			<td>
    				<a href="adminedit.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
    				<a href="pro.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
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
		<form action="pro.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">		
				<label>Name</label>
				<input type="type" name="name" class="form-control" value="<?php echo $name;?>" required="" placeholder="Enter the name">
			</div>
			<div class="form-group">
				<label>Number</label>
				<input type="type" name="number" class="form-control" value="<?php echo $number;?>" required="" placeholder="Enter only Number ">
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
<a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="nav.php" name="log">BACK</a>