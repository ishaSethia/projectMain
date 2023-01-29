<?php
session_start();
if (isset($_SESSION['type'])) {
  if($_SESSION['type'] != 'admin')
  {
  header('location:car.php');
}

}
else
{
 header('location:login.php');
}
?>
<html>
<?php
include 'adminnav.php';
?>
<br>
<br>

</html>
<?php
include("cardfileup.php");
?>