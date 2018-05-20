<?php get_header(); ?>

<?php
if ( is_tax( 'events' ) ) {
  echo "<h1>LINEUP</h1>";

  if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();
      $title = get_the_title();
      $custom_fields = get_post_meta(get_the_id(), 'twitter', true);
      echo '<h2 class="lineup-artist-title">'.$title.'</h2>';
      $image_id = get_post_meta(get_the_id(), 'image', true);
      echo wp_get_attachment_image($image_id, 'large', false, array( 'class' => 'lineup-artist-image' ));
  ?>

<?php
endwhile;
endif;
}
?>

<?php get_footer(); ?>
