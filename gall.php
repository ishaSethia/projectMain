<?php
$mysqli = new mysqli('localhost', 'root', '', 'php_tutorial') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT image,detail FROM gallery");
$rowcount=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head> 
  <link rel="stylesheet" type="text/css" href="css\lightbox.min.css">
  <script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>
<style type="text/css">
  body{
    font-family: sans-serif;
      }
h1{
  text-align: center;
  margin: 30px 0 50px;
  color: white;
  font-size: 50px;
  font-weight: bold;
    
}
.gallery{
  margin: 10px 50px;

}
.gallery img{
  width: 300px;
  padding: 5px;
  filter: grayscale(100%);
    transition: 1s;

}

.gallery img:hover{
  filter: grayscale(0);
  transform: scale(1.1);

}
</style>
  <title></title>
</head>
<body background="project_images/desert.jpg">
  <?php
include("menu.php");
  ?>
<h1>RAJASTHAN DARSHAN!</h1>
<?php
for ($i=1; $i <=$rowcount ; $i++)
 { 
$row = $result->fetch_assoc();  
?>  

<?php
if($i==1)
{
  
?>
<div class="gallery">
  <a href="gallery/<?php echo $row['image']; ?>" data-lightbox="mygallery" data-title="<?php echo $row['detail']; ?>"><img src="gallery/<?php echo $row['image']; ?>" > </a>
 <?php 
}
else
{
  ?>
<a href="gallery/<?php echo $row['image']; ?>" data-lightbox="mygallery" data-title="<?php echo $row['detail']; ?>"><img src="gallery/<?php echo $row['image']; ?>" > </a>

          <?php
}
?>
<?php } ?>



</div>
</body>
</html>
<?php
include("footer.php");
?>