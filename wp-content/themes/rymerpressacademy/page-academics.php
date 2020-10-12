<?php 
get_header();

require_once('partials/banner.php'); ?>

<div class="container p-5">
  <div class="container py-5"> 
    <h1><?php the_title()?></h1>
  </div>
  <div class="container">
    <?php 
      the_content()
    ?>
  </div>
</div>

<?php 
get_footer();
?>