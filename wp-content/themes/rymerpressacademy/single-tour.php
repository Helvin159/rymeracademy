<?php 
get_header();

require_once('partials/banner.php'); ?>

<div class="container p-5">
  <div class="container py-5"> 
    <h1>School Tours</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="container">
          <h3><?php the_title()?></h3>
          <p><?php echo substr(get_the_excerpt(),0,250)?> <a href="">[...]</a></p>
        </div>
      </div>
      <div class="col-8 theContent">
        <?php 
          the_content()
        ?>
        
      </div>
    </div>
    <div class="container py-5">
      <a href="<?php echo esc_url(site_url('/tours'))?>"><i class="fas fa-arrow-circle-left"></i> Go back to School Tours</a>
    </div>
  </div>
</div>

<?php 
get_footer();
?>