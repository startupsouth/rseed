<?php


/**
 * 
 * Name: Related Articles
 *
 */

//get posts

?>


    <div class="container div_sections related-art">
    <?php
// get current post categories and tags
$categories = get_the_category($post->ID);
$tags = get_the_tags($post->ID);
if ($categories || $tags) {
  $category_ids = array();
  if($categories)
  foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
  $tag_ids = array();
  if($tags)
  foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
  
  $args=array(
    'tax_query' => array(
      'relation' => 'OR',
      array(
        'taxonomy' => 'category',
        'field' => 'id',
        'terms' => $category_ids
      ),
      array(
        'taxonomy' => 'post_tag',
        'field' => 'id',
        'terms' => $tag_ids
      )
    ),
    'post__not_in' => array($post->ID),
    'posts_per_page'=> 4, // Number of related posts that will be shown.
  );
  // query posts
  $my_query = new WP_Query( $args );
  if( $my_query->have_posts() ) {
    echo "<h6 class='my-5'>Related Articles</h6> <div class='row justify-content-center'>
    <div class='col-lg-4'>
      <div class='card'>";
    while( $my_query->have_posts() ) { $my_query->the_post();
      // display each post
      ?>
      <a href="<?php the_permalink(); ?>' rel='canonical'">
          <?php the_post_thumbnail(); ?>
          <h6 class="pt-3 text-dark"><?php the_title();?></h6>
         </a>
      <?php
    }
    echo "</div>
    </div></div>";
  }
}
wp_reset_postdata();
?>
</div>