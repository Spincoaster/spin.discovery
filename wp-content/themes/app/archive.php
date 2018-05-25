<?php get_header(); ?>

<?php
if ( is_tax( 'events' ) ) {
  echo "<h1>LINEUP</h1>";

  if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();
      $title = get_the_title();
      $content = get_the_content();
      $twitter = get_post_meta(get_the_id(), 'twitter', true);
      $youtube = get_post_meta(get_the_id(), 'youtube', true);
      $image_id = get_post_meta(get_the_id(), 'image', true);

      echo '<div class="row">';

      echo '  <div class="col-12">';
      echo '  <h2 class="lineup-artist-title">'.$title.'</h2>';
      echo '</div>';

      echo '<div class="col-6">';
      echo wp_get_attachment_image($image_id, 'large', false, array( 'class' => 'lineup-artist-image' ));
      echo '</div>';

      echo '<div class="col-6">';
      echo '  <div class="row">';
      echo '    <div class="col-12">';
      echo '      <p>'.$content.'</p>';
      echo '    </div>';

      echo '    <div class="col-12">';
      echo '      <iframe src="'.$youtube.'" allow="autoplay; encrypted-media" allowfullscreen="" width="500" height="281" frameborder="0"></iframe>';
      echo '    </div>';

      echo '    <div class="col-12">';
      echo '      <p>social links</p>';
      echo '    </div>';
      echo '  </div>';
      echo '</div>';

      echo '</div>';
  ?>

<?php
endwhile;
endif;
}
?>

<?php get_footer(); ?>
