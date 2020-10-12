<?php 
get_header();

require_once('partials/banner.php');?>
<div class="container-fluid my-4">

  <div class="container px-5 my-5">
    <h1>Our Programs</h1>
  </div>

<?php
$showCustomPostType = new WP_Query(array(
  'posts_per_page' => 5,
  'post_type' => 'program',
  'paged' => get_query_var('paged') ? get_query_var('paged') : 1
));

while($showCustomPostType->have_posts()){
  $showCustomPostType->the_post()?>
  <div class="container my-5">
    <div class="row">
      <div class="col-md-4">
        <img src="<?php the_post_thumbnail_url('newsArchive')?>" alt="" >
      </div>
      <div class="col-md-8">
        <div class="container p-2">
          <h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
          <div class="container">
            <?php echo substr(get_the_excerpt(),0,425);echo '...';?>
            <br>
            <div class="container mt-4">
              <a href="<?php the_permalink()?>">View Program Details <i class="fas fa-long-arrow-alt-right"></i></a>              
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
<?php } 
require_once('partials/pagination.php');
?>
</div>

<?php 
get_footer();
?>