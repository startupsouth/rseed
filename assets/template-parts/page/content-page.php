<?php
/**
 * Template part to display page content in page.php.
 */
?>

<?php get_template_part( 'assets/template-parts/header/content', 'page-hero' ); ?>
<?php
        /**
         * Page Thumbnail.
         */
        if ( has_post_thumbnail() ) :
            the_post_thumbnail( 'full' ); // full, large, medium, custom size
        endif;
    ?>

    <div class="entry-content container">
        <?php
            the_content();

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ninestars' ),
                'after'  => '</div>',
            ) );
        ?>
    </div>