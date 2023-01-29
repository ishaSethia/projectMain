<?php
$mysqli = new mysqli('localhost', 'root', '', 'php_tutorial') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT image,head,detail,link FROM card");
$rowcount=mysqli_num_rows($result);
?>
<!DOCTYPE html> 
<html>
<head>
	<title></title>

	<style type="text/css">
      .neon h2 {

        font-size: 60px;
        animation-name: train;
        animation-duration: 10s;
        animation-direction: alternate;
        animation-iteration-count: infinite;
      }

      @keyframes train {

        0%,
        100% {
          text-shadow: 0 0 30px orange;
        }

        25% {
          text-shadow: 0 0 30px white;
        }

        50% {
          text-shadow: 0 0 30px blue;
        }

        75% {
          text-shadow: 0 0 30px forestgreen;
        }


      }

      html
      {
        overflow-x: hidden;
      }

      h2 {
        font-size: 30px;
      }
    .contain{
		max-width: 1000px;
	    margin-left: 40%;
	}
	.card{
		position: relative;
		
		width: 300px; 
		height: 400px;
		background: #fff;
		transform-style: preserve-3d;
		transform: perspective(2000px);
		transition: 1s;
		box-shadow: inset 300px 0 50px rgba(0,0,0.5);
	}
	.card:hover
	{
		z-index: 1000;
		transform: perspective(2000px) rotate(-10deg);
		box-shadow: inset 20px 0 50px rgba(0,0,0.5);
	}
	.card .imgbox{
		position: relative;
		width: 100%;
		height: 100%;
	   border: 1px solid #000;
	   box-sizing: border-box;
	   transform-origin: left;
	   z-index: 1;
	   transition: 1s;

	}
	.card:hover .imgbox{
      transform: rotateY(-135deg);
	}
	.card .imgbox .img{
		position: absolute;
		top: 0;
		left:0;
		width: 100%;
		height:100%;
	   object-fit: cover;

	}
	.card .detail{
		position: absolute;
		top: 0;
		left:0;
		box-sizing: border-box;
		padding: 20px;
	}

    </style>    


</head>
<body>
  <table>
	
            <div class="neon">
          <h2 data-text="EXPLORE WITH RAAHI">EXPLORE WITH RAAHI</h2>
        </div>
        <?php
for ($i=1; $i <=$rowcount ; $i++)
 { 
$row = $result->fetch_assoc();  
?>  

<?php
if($i%3==0)
{
  
?>
<tr>
  <td>
<a href="<?php echo $row['link'];?>">
              <div class="contain">
                <div class="card">
                  <div class="imgbox">
                    <img src="car/<?php echo $row['image']; ?>" width="100%" height="100%">
                  </div>
                  <div class="detail">

                    <h2><?php echo $row['head'];?></h2>
                    <p style="color: black; font-weight: bold; font-size: 15px;"><?php echo $row['detail'];?>
                      <br><br><strong style="color: red; font-size:25px;">CLICK TO KNOW MORE!</strong>
                    </p>
                  </div>
                </div>
              </div>
            </a>
</td>

<?php 
}
else
{
  ?>
  <td>
  <a href="<?php echo $row['link'];?>">
              <div class="contain">
                <div class="card">
                  <div class="imgbox">
                    <img src="car/<?php echo $row['image']; ?>" width="100%" height="100%">
                  </div>
                  <div class="detail">

                    <h2><?php echo $row['head'];?></h2>
                    <p style="color: black; font-weight: bold; font-size: 15px;"><?php echo $row['detail'];?>
                      <br><br><strong style="color: red; font-size:25px;">CLICK TO KNOW MORE!</strong>
                    </p>
                  </div>
                </div>
              </div>
            </a>
</td>



          <?php
}  
?>

<?php } ?>
</tr>

</table>
</body>
</html>