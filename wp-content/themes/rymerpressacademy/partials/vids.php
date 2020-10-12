  <div class="row">
    <div class="col-md-4">
      <div class="container">
      <h2>School Video Tour</h2>
      <hr class="w-100 redHr">
        <div class="container">
          <?php 
          $showCustomPostType = new WP_Query(array(
            'posts_per_page' => 1,
            'post_type' => 'tour',
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1
          ));
          
            while($showCustomPostType->have_posts() ){
            $showCustomPostType->the_post();
              the_content();
            }
        
          ?>
        </div>
        <div class="container p-2">
            
        </div>
        
      </div>
    </div>
    <div class="col-md-8">
    <div class="container">
      <h2>School News &amp; Updates</h2>
      <hr class="w-100 redHr">
    </div>
      <div class="row">

      <?php
$showCustomPostType = new WP_Query(array(
  'posts_per_page' => 6,
  'post_type' => 'news',
  'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
  'order' => 'DESC',
  'orderby' => 'post_date'
));

  while($showCustomPostType->have_posts() ){
  $showCustomPostType->the_post(); ?>
  <div class="col-md-6">
          <div class="container py-2">
            <div class="row">
              <div class="col-4">
                <img class="img-fluid" src="<?php the_post_thumbnail_url('frontNews')?>" alt="" >
              </div>
              <div class="col-8">
                <div class="container">
                  <h6><?php echo get_the_date('M d, Y')?> / By <?php the_author()?></h6>
                </div>
                <div class="container">
                  <a href="<?php the_permalink()?>"><?php the_title()?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php } ?>
        
      
      </div>
      <div class="container py-5">
        <a href="<?php echo esc_url(site_url('/news'))?>">View All News &amp; Updates <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>
