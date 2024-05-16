<?php


/**
 * 
 * Name: featured article
 *
 */

//get posts

?>



  <!-- In the news -->
  <div class="container news div_sections">
    <h5>In the news</h5>
    <div class="row justify-content-center gx-lg-5" style="gap: 4em;">
    <?php
            $args = array(
            'post_type'      => 'post',
            'category_name'  => 'featured-article',
            'posts_per_page' => 2,
            );
            $query = new WP_Query( $args );

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>

      <div class="col-lg-5 first_child">
      <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="...">
             <?php endif; ?>
        <div class="article">
        <span>*</span> <?php   single_cat_title( '<small class="text">', '</small>' ); ?>
          <p class="small">
            <small>
            <?php the_title(); ?>
            </small>
          </p>
        </div>
      </div>
      <?php
                endwhile;
                wp_reset_postdata();
              else :
                echo '<p>No posts found.</p>';
              endif;
              ?>
      <div class="text-end mb-3">
        <button class="btn btn_learn_more"> See all news <span><i class="fa fa-arrow-right ms-2"></i></span> </button>
      </div>
    </div>
  </div>