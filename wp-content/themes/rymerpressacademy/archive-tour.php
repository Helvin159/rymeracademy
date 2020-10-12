<?php 
get_header();

require_once('partials/banner.php');?>
<div class="container-fluid my-4">

  <div class="container p-5">
    <h1>School Tours</h1>
  </div>

<?php
$showCustomPostType = new WP_Query(array(
  'posts_per_page' => 5,
  'post_type' => 'tour',
  'paged' => get_query_var('paged') ? get_query_var('paged') : 1
));

while($showCustomPostType->have_posts()){
  $showCustomPostType->the_post()?>
  <div class="container my-3">
    <div class="row">
      <div class="col-md-4 ">
        <img src="<?php the_post_thumbnail_url('professorSquare')?>" alt="" >
      </div>
      <div class="col-md-8 ">
        <div class="container p-2">
          <h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
          <div class="container">
            <?php echo substr(get_the_excerpt(),0,400);?><br>
            <a href="<?php the_permalink()?>"> View Full Post... <i class="fas fa-external-link-alt"></i></a>
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