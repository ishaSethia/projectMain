 <?php
session_start();
if (isset($_SESSION['type'])) {
  if($_SESSION['type'] != 'admin')
  {
  header('location:gaaphp.php');
}

}
else
{
 header('location:login.php');
}
?>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<?php 
include 'adminnav.php';
?>
<?php
$con=mysqli_connect('localhost','root','','php_tutorial');

$qu="select * from gallery";
$qu_run=mysqli_query($con,$qu);
if(mysqli_num_rows($qu_run)>0)
{
  ?>

<!-- Modal -->
<div class="modal fade" id="edcard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD-CARD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post" enctype="multipart/form-data">

      <div class="modal-body">
              <div class="form-group">
        <label>Upload Image</label>
        <input type="file" name="image" id="image" class="form-control" required="">
       </div>

       <div class="form-group">
        <label>Detail</label>
        <input type="text" name="detail" class="form-control" placeholder="Detail about Image." required="">
       </div>

       
      </div>
      <div class="modal-footer">        
        <button type="submit" class="btn btn-primary" name="save">Save</button>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>      </div>
  </form>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">New Image to Gallery
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edcard">Add</button>
      </h6>
  </div>
</div>

<div class="card-body">

  <?php
  if(isset($_SESSION['success'])&&$_SESSION['success'] !='')
  {
    echo '<h2 class="bg-primary text-white" >' .$_SESSION['success']. '</h2>';
    unset($_SESSION['success']);
  }
  if(isset($_SESSION['status'])&&$_SESSION['status'] !='')
  {
    echo '<h2 class="bg-primary text-white" >' .$_SESSION['status']. '</h2>';
    unset($_SESSION['status']);
  }

  ?>
  
  
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>ID</th>
           <th>Image</th>
            <th>Detail</th>
           <th colspan="2">Action</th>
      </tr>
      </thead>
      <tbody>
        <?php
        while($row=mysqli_fetch_assoc($qu_run))
        {
                  ?>

                  <tr>
          <td><?php echo $row['id'] ;?></td>
          <td><?php echo'<img src="gallery/'.$row['image'].'" height="100px" width="100px">';?></td>
          <td><?php echo $row['detail'] ;?></td>
           <td>
            <form action="editgal.php" method="post">
            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ;?>">
            <button class="btn btn-info" name="editbtn" type="submit">Edit</button>
          </form>
          <form action="editgal.php" method="post">
            <input type="hidden" name="delete_id" value="<?php echo $row['id'] ;?>">     
            <button class="btn btn-danger" name="delete" type="submit"onclick="return confirm('Confirm deletion')">Delete</button>              
            </form>      
          </td>
        </tr>

                  <?php
        }

        ?>
        <?php
}

else
{
  echo "No Record Found!";
}
?>


      </tbody>
</table>
</div>
</div>
</div>

<?php


if (isset($_POST['save']))
 {
  
  $detail=$_POST["detail"];
 
  $image=$_FILES["image"]["name"];

  if(file_exists("gallery/".$_FILES["image"]["name"]))
  {
    $store=$_FILES["image"]["name"];
      $_SESSION['status']="Image Already Exists. '.$store.'";
    echo "<script> window.location='gaaphp.php';</script>";

  }
  else
  {

  $q="INSERT INTO gallery(image,detail) VALUES('$image','$detail') ";
  $q_run=mysqli_query($con,$q);

  if ($q_run)
   {
    move_uploaded_file($_FILES["image"]["tmp_name"], "gallery/".$_FILES["image"]["name"]);
    $_SESSION['success']="Image Added";
    echo "<script> window.location='gaaphp.php';</script>";
    //header('location:gaaphp.php');
   }

   else
   {
    $_SESSION['status']="Image Not Added";
    echo "<script> window.location='gaaphp.php';</script>";
    //header('location:gaaphp.php');
   }
  }
 }

?>


