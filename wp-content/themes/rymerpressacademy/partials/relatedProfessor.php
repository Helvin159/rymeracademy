<!-- Related Professor -->
<div class="container py-3">
      <h3>Professor(s):</h3>
    </div>
<div class="container ">
    <div class="row">
        <?php 
          $relatedProfessor = get_field('related_professor');
          if($relatedProfessor){
            foreach($relatedProfessor as $professor ){
              ?>
              <div class="col-md-3">
                  <div class="container my-3">
                    <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($professor, $size = 'academyFrontBlog')?>" alt="" >
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="container my-3"> 
                    <h3 class="">
                      <a href="<?php echo get_the_permalink($professor)?>">
                        <?php echo get_the_title($professor);?>
                      </a>
                    </h3>
                    <p>
                      <?php 
                      echo substr(get_the_excerpt($professor),0,250);?><a href="<?php echo get_the_permalink($professor)?>"> <br> View More <i class="fas fa-long-arrow-alt-right"></i></a>
                    </p>
                  </div>
                </div>
                <?php  
                }
              }else {
                echo "<div class=\"container p-5\"><h3>No professors at this time.</h3></div>";
              }
        ?>
        
      </div>
  </div>