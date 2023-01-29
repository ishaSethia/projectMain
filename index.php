   <!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>RAAHI</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="nav1.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
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
        font-size: 20px;
      }
    </style>    
  </head>

  <body bgcolor=#1a001a>
   <?php
     include("menu.php");
   ?>
   
   <?php
     include("slider.php");
   ?>
    <?php
    include("card.php");


    ?>
     
<hr>
  </body>
</html>
<?php
include("footer.php");
?>