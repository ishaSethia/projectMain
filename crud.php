<?php
session_start();
if (isset($_SESSION['type'])) {
  if($_SESSION['type'] != 'admin')
  {
  header('location:crud.php');
}

} 
else
{
 header('location:login.php');
}
?>
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
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ADMIN PANEL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="crud.php">Edit Agents<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="message.php">Messages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="edlogin.php">
          Edit Login 
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="imageslider.php">
          Add Slider
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="gaaphp.php">
          Add-Gallery
        </a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="car.php">Edit-Cards</a>
      </li>
    </ul>
      <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="logo.php" name="log" onclick="return confirm('Do you want to logout')">Log-out</a>
    
  
</nav>

	<?php require_once 'process.php' ; ?>
	
	<div class="container">
	<?php
	$mysqli = new mysqli('localhost', 'root', '', 'php_tutorial') or die(mysqli_error($mysqli));
	$result=$mysqli->query("SELECT * FROM data") or die($mysqli->error);
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
    			echo $row['name'];
    			?></td>

    			<td><?php 
    			echo $row['number'];
    			?></td>
    			
    			 			<td>
    				<a href="crud.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
    				<a href="process.php?delete=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('Confirm deletion')">Delete</a>
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
		<form action="process.php" method="POST">
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