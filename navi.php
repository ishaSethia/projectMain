<head><link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link href="project_css/nav1.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"></head>
<header>
  <nav>
    <div class="menu-toggle"></div>
      <ul>
       <li>
         <div class="text-container">
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

        <li><a href="gallery.php">
            <div class="icon">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </div>
            <div class="name" style="font-weight:bold;"><span data-text="Gallery">Gallery</span></div>
          </a></li>

        <li><a href="pack.html">
            <div class="icon">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </div>
            <div class="name" style="font-weight:bold;"><span data-text="About">About</span></div>
          </a></li>

        <li><a href="signup.php">
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
