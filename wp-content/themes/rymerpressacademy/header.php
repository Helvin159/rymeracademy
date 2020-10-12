<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
	<meta name="Keywords" content="school, academic, year, ">
	<meta name="Author" content="School Demo">
	<meta name="Description" content="School Demo">
	<meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php
wp_head();
?>
</head>
<body>
<!-- Image and text -->
<nav class="navbar" style="background:rgba(2,46,63,1);color:#ffffff;min-height:70px;margin:0;padding:0;">
  <div class="navbar-nav">
    <span><a href="mailto:<?php bloginfo($show = 'admin_email')?>" class="mx-3" style="color:#ffffff;"><i class="fas fa-envelope"></i> <?php bloginfo($show = 'admin_email')?></a>
    <a href="tel:9295236682" class="mx-3" style="color:#ffffff;"><i class="fas fa-phone"></i> (929)523-6682</a></span>
  </div>
  <ul class="nav justify-content-end ">
  <li class="nav-item">
    <a class="nav-link" href="<?php echo esc_url(site_url('/alumni'))?>" style="color:#ffffff;">Alumni</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo esc_url(site_url('/events'))?>" style="color:#ffffff;">Calendar</a>
  </li>
  <li class="nav-item">
  <?php 
    if (is_user_logged_in()) { ?>
      <a class="nav-link" href="<?php echo esc_url(wp_logout_url())?>" style="color:#ffffff;">Logout</a>
    <?php }else{ ?>
      <a class="nav-link" href="<?php echo esc_url(wp_login_url())?>" style="color:#ffffff;">Portal</a>
    <?php }
  ?>
    
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="#" style="color:#ffffff;">Support R.A.</a>
  </li>
</ul>
</nav>

<nav class="navbar navbar-expand-lg navbar-light" style="background:rgba(0,0,0,0.75);position:absolute;top:20;width:100%;z-index:1;">
  <a class="navbar-brand raleway" href="<?php echo esc_url(site_url('/home'))?>" style="color:#ffffff;"><?php bloginfo($show = 'description')?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav m-auto justify-content-center"">
      <li class="nav-item">
        <a class="nav-link" style="color:#ffffff;" href="<?php echo esc_url(site_url('/'))?>">Home</a>
      </li>  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#ffffff;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Academic
        </a>
        <div class="dropdown-menu" style="color:#ffffff;" aria-labelledby="navbarDropdown">

          <?php 
						wp_nav_menu(array(
							'theme_location' => 'academics'
						));
					?>
        </div>
      </li>      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#ffffff;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pages
        </a>
        <div class="dropdown-menu" style="color:#ffffff;" aria-labelledby="navbarDropdown">
        <?php 
						wp_nav_menu(array(
							'theme_location' => 'pages'
						));
					?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#ffffff;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admissions
        </a>
        <div class="dropdown-menu" style="color:#ffffff;" aria-labelledby="navbarDropdown">
        <?php 
						wp_nav_menu(array(
							'theme_location' => 'admissions'
						));
					?>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#ffffff;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Programs
        </a>
        <div class="dropdown-menu" style="color:#ffffff;" aria-labelledby="navbarDropdown">
        <?php 
						wp_nav_menu(array(
							'theme_location' => 'programs'
						));
					?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:#ffffff;" href="<?php echo esc_url(site_url('/athletics'))?>">Athletics</a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" style="color:#ffffff;" href="<?php echo esc_url(site_url('/school-life'))?>">School Life</a>
      </li>      
    </ul>

    <ul class="nav justify-content-end">
      <li class="nav-item px-5">
        <a type="" class="nav-link" data-toggle="modal" data-target="#staticBackdrop">
          <i class="fas fa-search pointer" style="color:#ffffff;font-size:25px;"></i>
        </a>
        <!-- <a class="nav-link" style="color:#ffffff;" href="#" tabindex="-1" aria-disabled="true">Link</a> -->
      </li>
    </ul>
  </div>
</nav>
