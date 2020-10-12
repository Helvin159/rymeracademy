<?php 
get_header();
require_once('partials/banner.php'); 
?>
<div class="container-fluid my-4">
  <div class="container p-5">
    <h1>Upcoming Events</h1>
  </div>
<?php


$showCustomPostType = new WP_Query(array(
  'posts_per_page' => 5,
  'post_type' => 'event',
  'paged' => get_query_var('paged') ? get_query_var('paged') : 1
));

while($showCustomPostType->have_posts()){
  $showCustomPostType->the_post()?>
  <div class="container my-3">
        <a href="<?php the_permalink()?>" >
          <div class="container" style="background-image:url(<?php the_post_thumbnail_url()?>);min-height:300px;width:100%;maxwidth:400px;background-position:center; background-repeat:none;"></div>
        </a>
        
        <div class="container">
          <div class="row">
            <div class="col-4">
              <h1>
                <?php 
                  $time = get_field('date');
                  echo strtoupper(substr($time, 4,2)) 
                ?> 
              </h1>
              <h3>
                <?php 
                  $date = get_field('date');
                  echo strtoupper(substr($date, 0,3))
                ?>
              </h3>
              <hr>
            </div>
            <div class="col-4 p-2">
              <h4><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>
              <a href="<?php the_permalink()?>"><i class="far fa-clock"></i> <?php the_field('time');?></a>
              <br>
              <a href="#"><i class="far fa-compass"></i> Bronx Grand Hall</a>
            </div>
            <div class="col-4 p-2">
              <p><?php echo substr(get_the_excerpt(),0,180)?><br> <span><a href="<?php the_permalink()?>">View More...</a></span></p>
              

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