<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<?php
$con=mysqli_connect('localhost','root','','shop');

$qu="select * from cart";
$qu_run=mysqli_query($con,$qu);
if(mysqli_num_rows($qu_run)>0)
{
  ?>

<!-- Modal -->
<div class="modal fade" id="edcard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD-COSMETICS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post" enctype="multipart/form-data">

      <div class="modal-body">
       <div class="form-group">
        <label>Product Name</label>
        <input type="text" name="head" class="form-control" placeholder="Name of Product." required="">
       </div>

       <div class="form-group">
        <label>Product Information</label>
        <input type="text" name="info" class="form-control" placeholder="About Product." required="">
       </div>

       
      <div class="form-group">
        <label>Product Price before Discount</label>
        <input type="text" name="dis" class="form-control" placeholder="Filled when you need to give discount" >
       </div>

       <div class="form-group">
        <label>Product Actual Price </label>
        <input type="text" name="price" class="form-control" placeholder="Product Price." required="">
       </div>
      



       <div class="form-group">
        <label>Upload Image</label>
        <input type="file" name="image" id="image" class="form-control" required="">
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
  <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">New-Cosmetic
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
            <th>Product-Name</th>
            <th>Product-info</th>
            <th>Price before(discount)</th>
            <th>Actual price(after discount and all)</th>
            <th>Product-Image</th>
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
          <td><?php echo $row['productname'] ;?></td>
          <td><?php echo $row['priceb'] ;?></td>
          <td><?php echo $row['pricea'] ;?></td>
          <td><?php echo'<img src="cosmetic/'.$row['productimage'].'" height="100px" width="100px">';?></td>
                  <td>
            <form action="editcos.php" method="post">
            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ;?>">
            <button class="btn btn-info" name="editbtn" type="submit">Edit</button>
          </form>
          <form action="editcos.php" method="post">
            <input type="hidden" name="delete_id" value="<?php echo $row['id'] ;?>">     
            <button class="btn btn-danger" name="delete" type="submit" onclick="return confirm('Confirm deletion')">Delete</button>              
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
  $head=$_POST["head"];
  $detail=$_POST["info"];
  $link=$_POST["dis"];
  $price=$_POST["price"];
  $image=$_FILES["image"]["name"];

  if(file_exists("cosmetic/".$_FILES["image"]["name"]))
  {
    $store=$_FILES["image"]["name"];
      $_SESSION['status']=" Already Exists. '.$store.'"; echo "<script>window.location='admincosmetic.php';</script>";
      //header('location:car.php');

  }
  else
  {

  $q="INSERT INTO cart(productname,productinfo,priceb,pricea,productimage) VALUES('$head',,'$detail','$link','$price','$image') ";
  $q_run=mysqli_query($con,$q);

  if ($q_run)
   {
    move_uploaded_file($_FILES["image"]["tmp_name"], "cosmetic/".$_FILES["image"]["name"]);
    $_SESSION['success']="Product Added";
     echo "<script>window.location='admincosmetic.php';</script>";
      
   }

   else
   {
    $_SESSION['status']="Product Not Added";
     echo "<script>window.location='admincosmetic.php';</script>";
      
    //header('location:car.php');
   }
  }
 }

?>


