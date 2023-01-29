<?php
include("menu.php");
?>
<!DOCTYPE html>
<html>
<head>
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

</style>

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="project_css/swiper.min.css">

  <!-- Demo styles -->
  <style>
    body {
      background: #1a001a;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:white;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
    }
    .demo
    {
      width: 300px;
      height: 300px;
      background-size: cover;
      text-align: center;
      }    
  </style>
  <title>FAMILY</title>
</head>
<body>
        <div class="neon">
          <h2 data-text="FOR THE FAMILY!" style="text-align: center;">FOR THE FAMILY!</h2>
        </div>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      
      <div class="swiper-slide" style="background-image:url(project_images/bharat.jpg)"><a href="bharat.php" style=" color: white; text-decoration: none;  font-weight: bold;font-size: 20px;"><div class="demo">BHARATPUR</div></a></div>

      <div class="swiper-slide" style="background-image:url(project_images/bbk.jpg)"><a href="bikaner.php" style=" color: white; text-decoration: none;  font-weight: bold;font-size: 20px;"><div class="demo">BIKANER</div></a></div>
      
      <div class="swiper-slide" style="background-image:url(project_images/bu4.jpg)"><a href="bundi.php" style=" color: white; text-decoration: none;  font-weight: bold;font-size: 20px;"><div class="demo">BUNDI</div></a></div>
      
      <div class="swiper-slide" style="background-image:url(project_images/jh3.jpg)"><a href="jhunjhunu.php" style=" color: white; text-decoration: none;  font-weight: bold;font-size: 20px;"><div class="demo">JHUNJHUNU</div></a></div>
      
      <div class="swiper-slide" style="background-image:url(project_images/jaa.jpg)"><a href="jalor.php" style=" color: white; text-decoration: none;  font-weight: bold;font-size: 20px;"><div class="demo">JALORE</div></a></div>
       
       </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script> 
  <?php
  include("footer.php");
  ?>
</body>
</html>