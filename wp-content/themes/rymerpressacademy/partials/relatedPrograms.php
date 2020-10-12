<!-- Related Programs -->
    <div class="container py-3">
      <h3>Related Programs:</h3>
    </div>
    <div class="container">
      <div class="row">
        <?php 
          $relatedPrograms = get_field('related_program');
          if($relatedPrograms){
            foreach($relatedPrograms as $program ){
              ?>
              <div class="col-md-3">
                  <div class="container my-3">
                    <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($program, $size = 'academyFrontBlog')?>" alt="" >
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="container my-3"> 
                    <h3 class="">
                      <a href="<?php echo get_the_permalink($program)?>">
                        <?php echo get_the_title($program);?>
                      </a>
                    </h3>
                    <p>
                      <?php 
                      echo substr(get_the_excerpt($program),0,250);?><a href="<?php echo get_the_permalink($program)?>"> <br> View More <i class="fas fa-long-arrow-alt-right"></i></a>
                    </p>
                  </div>
                </div>
                <?php  
                }
              }else{
                echo '<h3 class="text-center p-5">No programs at this time.</h3>';                
              }
        ?>
        
      </div>
    </div>