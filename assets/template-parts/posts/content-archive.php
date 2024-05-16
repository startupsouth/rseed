<?php
/**
 * Template part to display archive content in archive.php.
 */
?>

    <div class="col-lg-12">
        <div class="card">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <?php if ( has_post_thumbnail() ) :
            the_post_thumbnail( 'medium', 'class="img-fluid rounded-start"' ); // full, large, medium, custom size
        endif;
        ?>
            </div>
            <div class="col-lg-7">
              <div class="card-body">
       <?php the_title( '<h6 class="fw-bold pt-1 pb-0 card-title">' , '</h6>' ); ?>
                <p> <small><?php echo get_the_date('F j, Y'); ?></small> </p>
                <p class="ps-0 text-dark-50 card-text">
                  <small>
                  <?php
            the_excerpt();

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Posts:', 'ninestars' ),
                'after'  => '</div>',
            ) );
        ?>
                  </small>
                </p>
                   <a href="<?php the_permalink(); ?>" class="card-link btn btn_learn_more">Read more
                      <span> <i class="fa fa-arrow-right ms-1"></i> </span>
                    </a>
              </div>
            </div>
          </div>
        </div>
      </div>