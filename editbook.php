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
			<h6 class="m-0 font-weight-bold text-primary">Edit Plan</h6>
		</div>
	</div>
	<div class="card-body">
		<?php
		if(isset($_POST['editbtn']))
		{
			$id=$_POST['edit_id'];

			$q="select * from book where id='$id'";
			$q_run=mysqli_query($con,$q);
			$row=mysqli_fetch_assoc($q_run);
		?>	

		
		<form method="post" enctype="multipart/form-data" >
		<input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
		<div class="form-group">
       	<label>Place</label>
       	<input type="text" name="edit_head" class="form-control" placeholder="Places." required="" value="<?php echo $row['place'];?>" >
       </div>

       <div class="form-group">
       	<label>Upload Image</label>
       	<input type="file" name="image" id="image" class="form-control" required="" value="<?php echo $row['image'];?>">
       </div>

       <div class="form-group">
       	<label>Price</label>
       	<input type="text" name="edit_detail" class="form-control" placeholder="Price ." required="" value="<?php echo $row['price'];?>">
       </div>

        
      </div>
     <button type="submit" class="btn btn-primary" name="update">Update</button>

        <a href="booking.php" class="btn btn-secondary" >Cancel</a>
    </form>
		
	</div>
</div> 
<?php

}
else
{
	echo "<script>window.location='booking.php';</script>";
      
	//header('location:booking.php');
}
?>

<?php
if (isset($_POST['update'])) {
	$edit_id=$_POST['edit_id'];
	$edit_head=$_POST['edit_head'];
	$edit_detail=$_POST['edit_detail'];
	$edit_image=$_FILES["image"]["name"];

	$q="update book set place='$edit_head',image='$edit_image',price='$edit_detail' where id=$edit_id";
	$q_run=mysqli_query($con,$q);

	if($q_run)
	{
		move_uploaded_file($_FILES["image"]["tmp_name"], "book/".$_FILES["image"]["name"]);
 	 	$_SESSION['success']="Plan Updated";
 	 	echo "<script>window.location='booking.php';</script>";
      

	}

	else
	{
		$_SESSION['status']="Plan Not Updated";
		echo "<script>window.location='booking.php';</script>";
      
 	 //	header('location:booking.php');
}

}
?>


<?php
if(isset($_POST['delete']))
{
	$id=$_POST['delete_id'];
	$q="DELETE FROM book WHERE id=$id";
	$q_run=mysqli_query($con,$q);

	if($q_run)
	{
		$_SESSION['success']="Plan Deleted";
		echo "<script>window.location='booking.php';</script>";
      
 	 //	header('location:booking.php');

	
}
else
{
	$_SESSION['status']="Plan Not Deleted";
 	 echo "<script>window.location='booking.php';</script>";
      
 	 //	header('location:booking.php');
}
}
?>