 <?php
 if (is_category('recent-news') ):
?>
<!-- hero_section-->
 <div class="container-fluid hero-section pe-lg-5 ps-lg-5" id="hero-section"  style="background-image:linear-gradient( rgba(10, 30, 54, 0.8), rgba(10, 30, 54, 0.8)), url(' <?php if (has_post_thumbnail()) {echo get_the_post_thumbnail_url();} else { echo get_template_directory_uri() . '/assets/image/b_last.png';} ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;" >
    <div class="row gy-4">
    <?php
            $args = array(
            'post_type'      => 'post',
            'category_name'  => 'featured-update',
            'posts_per_page' => 1,
            );
            $query = new WP_Query( $args );

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>

      <div class="col-lg-5 ms-lg-auto">
        <div class="overlay_section card">
          <span class="card-text"> <small>Featured</small></span>
          <h5 class="fw-bold card-title py-2">
        <?php the_title(); ?>
          </h5>
          <p class=" text-dark-50 card-text">
            <small>
            <?php the_excerpt(); ?>
            </small>
          </p>
          <div class="button">
            <button class="btn btn_learn_more" style="width: 140px">  <a href="<?php the_permalink(); ?>">Read more <span><i class="fa fa-arrow-right ms-1"></i></span> </a></button>
          </div>
        </div>
      </div>

      <?php
                endwhile;
                wp_reset_postdata();
              else :
                echo '<p>No posts found.</p>';
              endif;
              ?>
    </div>
    <div class="btn_container text-center me-lg-5 pe-lg-5">
      <span class="text-white me-1">Click</span> 
      <button type="button">
        <span>
          <a href="#scrolldown" class="text-white"><i class="fa fa-angle-down"></i></a>
        </span>
      </button>
      <span class="text-white ms-1">For More</span> 
    </div>
  </div>

<?php else: ?>

<!-- hero_section-->
<div class="container-fluid  pe-lg-5 ps-lg-5" id="hero-section"  style="background-image:linear-gradient( rgba(10, 30, 54, 0.8), rgba(10, 30, 54, 0.8)), url(' <?php if (has_post_thumbnail()) {echo get_the_post_thumbnail_url();} else { echo get_template_directory_uri() . '/assets/image/b_last.png';} ?>'); background-size: cover; background-position: top; background-repeat: no-repeat;" >
    
    <!-- <div class="btn_container text-center me-lg-5 pe-lg-5 mb-5 pb-5">
      <span class="text-white me-1">Click</span> 
      <button type="button">
        <span>
          <a href="#scrolldown" class="text-white"><i class="fa fa-angle-down"></i></a>
        </span>
      </button>
      <span class="text-white ms-1">For More</span> 
    </div> -->
  </div>

<?php endif; ?>
 
 
 