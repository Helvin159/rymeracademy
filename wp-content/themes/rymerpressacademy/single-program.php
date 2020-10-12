<?php 
get_header();
require_once('partials/banner.php'); ?>

<div class="container-fluid p-5">
  <div class="container py-5"> 
    <h1><?php the_title()?></h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-4">
        <?php the_post_thumbnail('professorSquare')?>
      </div>
      <div class="col-8 theContent">
        <h4><b>Details:</b></h4>
        <?php 
          the_content()
        ?>
      </div>
    </div>
    <div class="container py-5">
      <a href="<?php echo esc_url(site_url('/programs'))?>"><i class="fas fa-arrow-circle-left"></i> View All Programs</a>
    </div>
  </div>
  <hr class="redHr">
  <div class="container my-5 p-3">
    <?php 
      require_once('partials/relatedProfessor.php');
      require_once('partials/relatedEvents.php');
    ?>
  </div>

</div>
<?php 
get_footer()
?>