<?php 
get_header();

require_once('partials/banner.php'); ?>
<div class="container-fluid my-5">

  <div class="container py-4"> 
    <h1><?php the_title()?></h1>
    <h4><?php the_field('date'); echo ' at '; the_field('time')?></h4>
  </div>
  <div class="container px-3 theContent">
    <?php 
      the_content()
    ?>
  </div>
  <div class="container py-5">
      <a href="<?php echo esc_url(site_url('/events'))?>"><i class="fas fa-arrow-circle-left"></i> View All Events</a>
    </div>
  <hr class="redHr">
    <?php 
  require_once('partials/relatedProfessor.php');
  require_once('partials/relatedPrograms.php');
  ?>
</div>

<?php 
get_footer();
?>