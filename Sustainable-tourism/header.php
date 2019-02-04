<!DOCTYPE html>
<html>
<head>
	<?php wp_head();?>
</head>
<body>
	<header>
		<div id="banner">
  <nav class="my-nav navbar fixed-top navbarScroll navbar-expand-md text-white navbar-dark" id="navscroll">
      <div class="container">
          <a class="navbar-brand mr-5" href="index.php">  
            <img src="../images/logo2.png" class="w-50"></a>  
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav text-white m-auto">
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="news_template.php">NEWS</a>
            <!-- DROPDOWN -->
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="events.php">EVENTS</a>
            <!-- DROPDOWN -->
            </li>            
            <li class="nav-item">
              <a href="partners.php" class="nav-link text-white">PARTNERS</a>
         
            </li>
            <!-- END DROPDOWN -->
            <li class="nav-item">
              <a class="nav-link text-white " href="about.php">ABOUT</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
          <!-- MODAL TRIGGER CHECKS IF THE USER IS ADMIN OR NOT TO EITHER SHOW DASHBOARD OR LOGIN -->
        
            <li class="nav-item  ml-5">
              <a class="login nav-link btn text-white" data-toggle="modal" data-target="#loginModal">
            <i class="fas fa-sign-in-alt"></i> Partner Login</a>
          </li>

          <!-- IF USER IS ADMIN THEN LET THEM GO TO DASHBOARD -->

          <li class="nav-item  float-right">
            <a href="home.php" class="nav-link text-white login">DASHBOARD</a>
          </li>
          </ul>
    </div>
  	</nav>
	</div>

  <!-- BG PICTURE OVERLAYING STUFF -->
    <figure class="tint" style="position: relative;">
      <div class="">
        <img class="img-fluid tint" src="../images/wallpaper_reflection2.jpg" alt="Found at ultrawidewallpapers.com">
        <div class="col-12"></div>
        <div id="caption" class="text-white col text-center">
          <img class="img-fluid w-25" src="../images/white_logo_transparent_background.png">
        </div>
      </div>
    </figure>

</header>
