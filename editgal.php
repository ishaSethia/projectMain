<?php
 session_start();
?>
<?php
$con=mysqli_connect('localhost','root','','php_tutorial');
?>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<div class="container-fluid">
	<div class="card shadow nb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Edit Card</h6>
		</div>
	</div>
	<div class="card-body">
		<?php
		if(isset($_POST['editbtn']))
		{
			$id=$_POST['edit_id'];

			$q="select * from gallery where id='$id'";
			$q_run=mysqli_query($con,$q);
			$row=mysqli_fetch_assoc($q_run);
		?>	

		
		<form method="post" enctype="multipart/form-data" >
		<input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
		
       <div class="form-group">
       	<label>Upload Image</label>
       	<input type="file" name="image" id="image" class="form-control" required="" value="<?php echo $row['image'];?>">
       </div>

       <div class="form-group">
       	<label>Detail</label>
       	<input type="text" name="edit_detail" class="form-control" placeholder="Detail about Image." required="" value="<?php echo $row['detail'];?>">
       </div>

        
      </div>
     <button type="submit" class="btn btn-primary" name="update">Update</button>

        <a href="gaaphp.php" class="btn btn-secondary" >Cancel</a>
    </form>
		
	</div>
</div> 
<?php

}
else
{
	echo "<script>window.location='gaaphp.php';</script>";
      
	//header('location:gaaphp.php');
}
?>

<?php
if (isset($_POST['update'])) {
	$edit_id=$_POST['edit_id'];
	$edit_detail=$_POST['edit_detail'];
	$edit_image=$_FILES["image"]["name"];

	$q="update gallery set image='$edit_image',detail='$edit_detail' where id=$edit_id";
	$q_run=mysqli_query($con,$q);

	if($q_run)
	{
		move_uploaded_file($_FILES["image"]["tmp_name"], "gallery/".$_FILES["image"]["name"]);
 	 	$_SESSION['success']="Image Updated";
 	 	echo "<script>window.location='gaaphp.php';</script>";
      
 	 //	header('location:gaaphp.php');


	}

	else
	{
		$_SESSION['status']="Image Not Updated";
 	 	echo "<script>window.location='gaaphp.php';</script>";
      
 	 	//header('location:gaaphp.php');
}

}
?>


<?php
if(isset($_POST['delete']))
{
	$id=$_POST['delete_id'];
	$q="DELETE FROM gallery WHERE id=$id";
	$q_run=mysqli_query($con,$q);

	if($q_run)
	{
		$_SESSION['success']="Card Deleted";
 	  	 	echo "<script>window.location='gaaphp.php';</script>";

 	 //	header('location:gaaphp.php');

	
}
else
{
	$_SESSION['status']="Card Not Deleted";
 	 	echo "<script>window.location='gaaphp.php';</script>";

// 	 	header('location:gaaphp.php');
}
}
?>