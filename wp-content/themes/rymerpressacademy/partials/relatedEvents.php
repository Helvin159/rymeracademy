<!-- Related Events -->
<div class="container py-3">
    <h3>Related Events:</h3>

    <div class="container">
      <div class="row">
        <?php 
          $relatedEvents = get_field('related_events');
          if($relatedEvents){
            foreach($relatedEvents as $event ){
              ?>
              <div class="col-md-3">
                  <div class="container my-3">
                    <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($event, $size = 'academyFrontBlog')?>" alt="" >
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="container my-3"> 
                    <h3 class="">
                      <a href="<?php echo get_the_permalink($event)?>">
                        <?php echo get_the_title($event);?>
                      </a>
                    </h3>
                    <p>
                      <?php 
                      echo substr(get_the_excerpt($event),0,250);?><a href="<?php echo get_the_permalink($event)?>"> <br> View More <i class="fas fa-long-arrow-alt-right"></i></a>
                    </p>
                  </div>
                </div>
                <?php  
                }
              }else {
                echo '<h3 class="text-center p-5">No events at this time.</h3>';
              }
        ?>
        
      </div>
    </div>
  </div>