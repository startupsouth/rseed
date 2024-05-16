<?php
/**
 * Template part to display page content in single.php.
 */
?>


<div class="col-lg-10">
<span class="text"> <?php echo single_cat_title(); ?> </span>
   
    <h6 class="text_"> <?php the_title(); ?> </h6> 
    <span class=""> <?php the_author(); ?> </span> <i class="fa fa-circle"></i> <span> <?php echo get_the_date('F j, Y'); ?></span>
    <?php 
        /**
         * Page Thumbnail.
         */
        if ( has_post_thumbnail() ) :
            the_post_thumbnail( 'full', array('class' => 'img-fluid') ); // full, large, medium, custom size
        endif; 
        
            the_content();
        ?>
    </div>