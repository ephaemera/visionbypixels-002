<?php get_header(); ?>



<?php
    echo do_shortcode("[metaslider id=1056]");
?>


  <?php
  echo do_shortcode("[metaslider id=776]");
  ?>



<?php
if ( is_home() ) {
query_posts( 'cat= -92' );
}
?>



<?php
if ( is_home() ) {
query_posts('posts_per_page=5');
}
?>



<!-- GRID SECTION -->





<?php get_sidebar('portfolio'); ?>
