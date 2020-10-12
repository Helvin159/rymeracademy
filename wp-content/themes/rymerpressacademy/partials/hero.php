<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="positon:absolute;top:0;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background:linear-gradient(0deg, rgba(0,0,0,0.5),rgba(0,0,0,0.7)),url(<?php echo get_theme_file_uri('assets/img/28.jpeg')?>); width:100vw;height:100vh;background-size:cover;background-repeat:no-repeat;background-position:center center;">
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
    <div class="carousel-item" style="background:linear-gradient(0deg, rgba(0,0,0,0.5),rgba(0,0,0,0.7)),url(<?php echo get_theme_file_uri('assets/img/27.jpeg')?>); width:100vw;height:100vh;background-size:cover;background-repeat:no-repeat;background-position:center center;">
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
    <div class="carousel-item" style="background:linear-gradient(0deg, rgba(0,0,0,0.5),rgba(0,0,0,0.7)),url(<?php echo get_theme_file_uri('assets/img/24.jpeg')?>); width:100%;height:100vh;background-size:cover;background-repeat:no-repeat;background-position:center center;">
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>    
    <div class="carousel-item" style="background:linear-gradient(0deg, rgba(0,0,0,0.5),rgba(0,0,0,0.7)),url(<?php echo get_theme_file_uri('assets/img/21.jpeg')?>); width:100%;height:100vh;background-size:cover;background-repeat:no-repeat;background-position:center center;">
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
  </div>
</div>

<div class="container p-5 d-none d-sm-none d-md-none d-lg-block d-xl-block" style="position:absolute;top:35%;left:5%;background-color:rgba(0,0,0,0.35);width:auto;color:#ffffff;border-radius:5px;">
  <h1 class="display-4">Welcome to</h1>
  <h1 class="display-3"><?php bloginfo('title')?></h1>
  <div class="container p-5">
    <a href="<?php echo esc_url(site_url('/tours'))?>" class="btn btn-large btn-danger p-3">Take A Tour</a>
  </div>
</div>

