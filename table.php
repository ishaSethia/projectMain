<?php
session_start();
if (isset($_SESSION['type'])) {
  if($_SESSION['type'] == 'user' && $_SESSION['type'] == '')
  {
  header('location:table.php');
}

} 
else
{
 header('location:login.php');
}
?>

<?php
include("menu.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<title></title>
	<style type="text/css">
		table
		{
			border-collapse: collapse;
			width: 100%;
			color: #588c7e;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
		th
		{
			background-color: #588c7e;
			color: white;
		}
		tr:nth-child(even)
		{
			background-color: #f2f2f2;
		} 
	</style>
</head> 
<body>
<table>
	<center><h1 style="font-size: 50px; font-weight: bold; color: #588c7e;
			font-family: monospace;">Agents of RAAHI</h1></center>
	<center><h2 style="font-size: 20px; color: #588c7e;
			font-family: monospace;">Our agents will make your trip remarkable!</h2> </center>
	<tr>
	<th>ID</th>
	<th>Agent Name</th>
	<th>Agent Contact</th>
	<th>Book-Me</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","", "php_tutorial");

if($conn -> connect_error)
{
	die("Connection failed:". $conn-> connect_error);
}

$sql = "select id, name, number ,book from data";
$result = $conn-> query($sql);
if ($result-> num_rows > 0) {
	while($row = $result-> fetch_assoc())
	{
		echo "<tr><td>".$row["id"]."</td> <td>".$row["name"]."</td> <td>".$row["number"]."</td>";

	?>
<td><a href='<?php echo $row["book"];?>'>Book-me</td>
	<?php
}
	echo "</tr>";
echo "</table>";
}
else
{
	echo "0 Result";
}

$conn->close();
?>

<div style="float: right;">
<a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="logo.php" >Log-out</a>
</div>
</body>
</html>


<b><hr></b>
<?php
include "footer.php";
?>