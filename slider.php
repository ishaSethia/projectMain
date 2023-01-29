<?php
$mysqli = new mysqli('localhost', 'root', '', 'php_tutorial') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT image,detail FROM slider");
$rowcount=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<title></title>
</head>
<body>

	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
<?php
for ($i=1; $i <=$rowcount ; $i++)
 { 
$row = $result->fetch_assoc();	
?>  

<?php
if($i==1)
{
  
?>
  <div class="carousel-item active">
    <img src="images/<?php echo $row["image"]; ?>" width="100%" height="650px" alt="...">
    <div class="carousel-caption d-none d-md-block">
          <h5 style="font-weight: bold; font-size: 50px; color: white;"><?php echo $row["detail"]; ?></h5>
  </div>
</div>
<?php 
}
else
{
	?>
	<div class="carousel-item ">
      <img src="images/<?php echo $row["image"]; ?>" width="100%" height="650px" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h5 style="font-weight: bold; font-size: 50px; color: white;"><?php echo $row["detail"]; ?></h5>
        </div>
          </div>
          <?php
}
?>
<?php } ?>










  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</body>
</html>