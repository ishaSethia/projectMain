<?php
session_start();
if (isset($_SESSION['type'])) {
  if($_SESSION['type'] != 'admin')
  {
  header('location:table.php');
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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title></title>
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
      <li class="nav-item">
        <a class="nav-link " href="booking.php">
          Add-Booking
        </a>
      </li>

    </ul>
    <?php
    if (isset($_SESSION['message'])) {
      echo "<div>".$_SESSION['message']."</div>";
    }
    ?>
      <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="logo.php" onclick="return confirm('Do you want to logout')">Log-out</a>
    
  
</nav>
<center>
          <p style="font-size: 100px; margin-top: 100px;">ADMIN LOGIN</p>
</center>
</body>
</html>