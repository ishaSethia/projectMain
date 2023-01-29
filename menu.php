<html>
<head>
  <link href="nav1.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<header >
  <nav>
    <div class="menu-toggle"></div>
      <ul>
       <li>
         <div class="text-container" >
          <h1>RAAHI</h1>
          </div>
       </li>
        <li><a href="index.php" class="active">
            <div class="icon">
              <i class="fa fa-home" aria-hidden="true"></i>
              <i class="fa fa-home" aria-hidden="true"></i>
            </div>
            <div class="name" style="font-weight:bold;"><span data-text="Home">Home</span></div>
          </a></li>
        <li><a href="category.php">
            <div class="icon">
              <i class="fa fa-list" aria-hidden="true"></i>
              <i class="fa fa-list" aria-hidden="true"></i>
            </div>
            <div class="name" style="font-weight:bold;"><span data-text="Categories">Categories</span></div>
          </a></li>
        <li><a href="gall.php">
            <div class="icon">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </div>
            <div class="name" style="font-weight:bold;"><span data-text="Gallery">Gallery</span></div>
          </a></li>
        <li><a href="login.php">
            <div class="icon">
              <i class="fa fa-sign-in" aria-hidden="true"></i>
              <i class="fa fa-sign-in" aria-hidden="true"></i>
            </div>
            <div class="name" style="font-weight:bold;"><span data-text="Login">Login</span></div>
          </a></li>
        <li><a href="contact.php">
            <div class="icon">
              <i class="fa fa-user" aria-hidden="true"></i>
              <i class="fa fa-user" aria-hidden="true"></i>
            </div>
            <div class="name" style="font-weight:bold;"><span data-text="Contact ">Contact </span></div>
          </a></li>
        <li>
          <?php
          include("show.php");
          ?>
        </li>
      </ul>
    </nav>
<div class="clearfix"></div>
  </header>
</html>