<?php 
get_header();

require_once('partials/banner2.php'); ?>

<div class="container-fluid p-5">
  <div class="container py-5"> 
    <h1><?php the_title()?></h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-4">
        <?php the_post_thumbnail('professorSquare');
        echo '<br>';?>
        
        <div class="container p-2">
        
        <?php if(get_field('phone_number')){?>
          <a href="tel:<?php echo get_field('phone_number');?>"><i class="fas fa-mobile-alt mx-2"></i> <?php echo  get_field('phone_number'); ?></a>
        <?php }
          ?>
        
        <br>
        <?php 
          if(get_field('email_address')){ ?>
            <a href="mailto:<?php echo get_field('email_address');?>"><i class="fas fa-envelope mx-2"></i> <?php echo  ucfirst(get_field('email_address')); ?></a>
          <?php }
          ?>
        </div>

        
      </div>
      <div class="col-8 theContent">
        <h4 class="my-3">About <?php the_title()?></h4>
        <?php 
          the_content()
        ?>
      </div>
    </div>
  </div>
  <div class="container py-5">
      <a href="<?php echo esc_url(site_url('/professors'))?>"><i class="fas fa-arrow-circle-left"></i> View All Professors</a>
    </div>
  <hr class="redHr">
    <?php 

  require_once('partials/relatedPrograms.php');
  require_once('partials/relatedEvents.php');
  ?>
</div>

<?php 
get_footer();
?>