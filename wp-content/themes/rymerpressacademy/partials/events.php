<div class="container-fluid">
  <div class="container pt-5 pb-3">
    <h2>Upcoming Events</h2>
    <hr class="w-100 redHr">
  </div>
  <div class="row px-5">

  <!-- Events -->
  <?php
$todaysDate = date('Ymd');
// print_r($todaysDate);



$showCustomPostType = new WP_Query(array(
  'posts_per_page' => 3,
  'post_type' => 'event',
  'meta_key' => 'date',
  'orderby' => 'meta_value_num',
  'order' => 'ASC',
  'meta_query' => array(
    array(
      'key' => 'date',
      'compare' => '>=',
      'value' => $todaysDate,
      'type' => 'numeric'
    )
  ),
  'paged' => get_query_var('paged') ? get_query_var('paged') : 1
));

  while($showCustomPostType->have_posts() ){
  $showCustomPostType->the_post(); 
  
    
    ?>
<div class="col-md-4">
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
            <div class="col-8 p-2">
              <h4><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>
              <a href="#"><i class="far fa-clock"></i> <?php the_field('time');?></a>
              <br>
              <a href="#"><i class="far fa-compass"></i> <?php the_field('location');?></a>
            </div>
          </div>
        </div>
      </div>

  <?php }  ?>
      
      <div class="container py-5">
        <a href="<?php echo esc_url(site_url('/events'))?>">View All Events <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>  
</div>