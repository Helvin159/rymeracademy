<?php 
get_header();

require_once('partials/banner.php'); ?>

<div class="container-fluid p-5">

<!-- Page Tree Box -->
  <div class="container p-1">
    <p>
      <span><a href="<?php $post_type = get_post_type(); echo get_post_type_archive_link($post_type)?>"><?php echo ucfirst(get_post_type())."'s";?></a> <i class="fas fa-chevron-right px-1"></i><?php the_title(); ;?></span>
    </p>
  </div>

  <div class="row">
  <!-- Content -->
  <div class="col-md-8">
    <div class="container pt-5 pb-3"> 
      <img src="<?php the_post_thumbnail_url('deptBanner')?>" class="img-fluid" alt="">
      <h1 class="mt-5"><?php the_title()?></h1>
      <div class="container px-5 theContent">
        <?php 
          the_content()
        ?>
      </div>
    </div>
    <hr class="redHr">
    <?php 
  require_once('partials/relatedProfessor.php');
  require_once('partials/relatedPrograms.php');
  require_once('partials/relatedEvents.php');
  ?>
  </div>
  
  <!-- Quick Links and information -->
<div class="col-md-4">
  <div class="container mt-5 mb-0" style="background-color:lightgrey;">
    <div class="pt-4">
      <h5>Quick Links</h5>
    </div>
    <?php 
		  wp_nav_menu(array(
        'theme_location' => 'deptMenu',
        'container' => 'ul',
        'container_class' => 'nav-item',
        'menu_class' => 'nav-column'.' '.'py-2'.' '.'deptMenu',
        'link_after'=> '<hr>'
		  ));
	  ?>
  </div>
  <div class="container mt-0" style="background:rgba(2,47,64, 1);">
    <div class="container">
      <div class="container pt-5 pb-2">
        <h4 style="color:#ffffff;">Department Contact Info</h4>
      </div>
      <div class="container py-3">
        <p class="py-3" style="color:#ffffff;">
          <?php the_field('address')?>
        </p>
        <a href="tel:<?php the_field('phone_number')?>" style="color:#ffffff;"><?php the_field('phone_number')?></a>
        <br>
        <a href="mailto:<?php the_field('email')?>" style="color:#ffffff;"><?php the_field('email')?></a>
      </div>
      <div class="container">
        <h3 style="color:#ffffff;">Social Media</h3>
        <a href="#" style="color:red;"><i class="fab fa-linkedin-in px-1 py-4" style="font-size:25px;"></i></a>
        <a href="#" style="color:red;"><i class="fab fa-facebook-f px-1 py-4" style="font-size:25px;"></i></a>
        <a href="#" style="color:red;"><i class="fab fa-instagram px-1 py-4" style="font-size:25px;"></i></a>
        <a href="#" style="color:red;"><i class="fab fa-google-plus-g px-1 py-4" style="font-size:25px;"></i></a>
        <a href="#" style="color:red;"><i class="fab fa-skype px-1 py-4" style="font-size:25px;"></i></a>
        <a href="#" style="color:red;"><i class="fab fa-twitter px-1 py-4" style="font-size:25px;"></i></a>
      </div>

      <div class="container">
        <a class="btn btn-large btn-danger p-3 my-5">
          Student Resources
        </a>
      </div>
    </div>
  </div>
  <div class="container py-5 my-5" style="border:5px red solid;">
    <div class="container py-3 text-center">
      <h3>Join Special Event</h3>
      <h2>Rymer Open House</h2>
    </div>
    <div class="container text-center py-3">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
    </div>
    <div class="container text-center">
      <a href="" class="btn btn-large btn-danger p-3">
        Click to see more
      </a>
    </div>
  </div>
</div>

  </div>
</div>

<?php 
get_footer();
?>

