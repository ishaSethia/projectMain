<?php
include("menu.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

	<title></title>

<style>
 

body
{
  margin:0;
  padding: 0;
  //display: flex;
//  justify-content: center;
  min-height: 100vh;
  background: #212121;
 
}

.box
{
  width: 350px;
  //display: grid;
  grid-template-columns: repeat(auto-fit,minmax(350px,1fr));
  grid-gap: 15px;
  //margin: 0 auto;
  margin-top: 7px;
}

.card
{
  position: relative;
  width: 300px;
  height: 350px;
  background: #fff;
  margin: 0 auto;
  border-radius: 4px;
  box-shadow: 0 2px 10px rgba(0,0,0,.2);

}

.card:before,
.card:after
{
  content: '';
  top: 0;
  position: absolute;
  left:0;
  width: 100%;
  height: 100%;
  border-radius: 4px;
  background: #fff;
  transition: 0.5s;
  z-index: -1;
}

.card:hover:before
{
  transform: rotate(20deg);
  box-shadow: 0 2px 20px rgba(0,0,0,.2);

}
.card:hover:after
{
  transform: rotate(10deg);
  box-shadow: 0 2px 20px rgba(0,0,0,.2);

}

.card .imgbx
{
  position: absolute;
  top: 10px;
  left:10px;
  bottom: 10px;
  right: 10px;
  background: #222;
  transition: 0.5s;
  z-index: 1;
}

.card:hover  .imgbx
{
  bottom: 80px;

}


.card .imgbx img
{
  position: absolute;
  top: 0;
  left:0;
  object-fit: cover;
}


.card .details
{
  position: absolute;
  left:10px;
  right: 10px;
  bottom: 10px;
  text-align: center;
  height: 60px;
}

.card .details h2
{
  margin: 0;
  padding: 0;
  font-weight: 600;
  font-size: 20px;
  color: #777;
  text-transform: uppercase;
}
</style>

</head>
<body>
 <u><i> <h1 style="text-align: center; font-size: 40px; color: white; ">PLACES TO VISIT JALORE.</h1></i></u>
<table align="center">

<tr>
  <td>
<div class="box">
  <div class="card">
    <div class="imgbx"><img src="project_images/jaa.jpg" style="width: 100%;height: 100%;">
    </div>
    <div class="details">
      <h2>Bhadrajun<br></h2>
    </div>
  </div>
</div>
</td>


<td></td>

<td>
<div class="box">
  <div class="card">
    <div class="imgbx"><img src="project_images/jaa2.jpg" style="width: 100%;height: 100%;"></div>
    <div class="details"><h2>Bhinmal<br></h2></div>
  </div>
</div>
</td>
</tr>


<tr>
  <td></td>

  <td>
<div class="box">
  <div class="card">
    <div class="imgbx"><img src="project_images/jaa4.jpg" style="width: 100%;height: 100%;"></div>
    <div class="details"><h2>Sundhamata<br></h2></div>
  </div>
</div>
</td>

<td></td>
</tr>

<tr>
  <td>
<div class="box">
  <div class="card">
    <div class="imgbx"><img src="project_images/jaa3.jpg" style="width: 100%;height: 100%;"></div></a>
    <div class="details"><h2>Ramsin<br></h2></div>
  </div>
</div>
</td>

<td></td>

<td>
<div class="box">
  <div class="card">
    <div class="imgbx"><img src="project_images/jaa5.jpg" style="width: 100%;height: 100%;"></div></a>
    <div class="details"><h2>Malwara <br></h2></div>
    
  </div>
</div>
</td>
</tr>
</table>
<br>
<br>
<br>
<br>
<hr>
<?php
include("footer.php");
?>
</body>
</html>