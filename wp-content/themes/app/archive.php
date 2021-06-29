<?php get_header(); ?>

<?php
if ( is_tax( 'events' ) ) {
  echo "<h1>LINEUP</h1>";

  if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();
      $title = get_the_title();
      $content = get_the_content();
      $image_id = get_post_meta(get_the_id(), 'image', true);
      $youtube = get_post_meta(get_the_id(), 'youtube', true);
      $spotify = get_post_meta(get_the_id(), 'spotify', true);
      $apple_music = get_post_meta(get_the_id(), 'apple_music', true);
      $twitter = get_post_meta(get_the_id(), 'twitter', true);
      $facebook = get_post_meta(get_the_id(), 'facebook', true);
      $instagram = get_post_meta(get_the_id(), 'instagram', true);
      $soundcloud = get_post_meta(get_the_id(), 'soundcloud', true);
      $bandcamp = get_post_meta(get_the_id(), 'bandcamp', true);
      $official_site = get_post_meta(get_the_id(), 'official_site', true);
      $spincoaster = get_post_meta(get_the_id(), 'spincoaster', true);

      echo '<div class="row">';

      echo '  <div class="col-lg-12 col-sm-12">';
      echo '  <h2 class="lineup-artist-title" id="'.$title.'">'.$title.'</h2>';
      echo '</div>';

      echo '<div class="lineup-image col-lg-6 col-sm-12">';
      echo wp_get_attachment_image($image_id, 'large', false, array( 'class' => 'lineup-artist-image' ));
      echo '</div>';

      echo '<div class="col-lg-6 col-sm-12">';
      echo '  <div class="row">';
      echo '    <div class="lineup-container col-lg-12 col-sm-12">';
      echo '      <p>'.$content.'</p>';
      echo '    </div>';

    if ($youtube != '') {
      echo '    <div class="lineup-container col-lg-12 col-sm-12">';
      echo '      <iframe src="'.$youtube.'" allow="autoplay; encrypted-media" allowfullscreen="" width="100%" height="300" frameborder="0"></iframe>';
      echo '    </div>';
    }

      echo '    <div class="row lineup-container lineup-social-icon-container col-lg-12 col-sm-12">';

    if ($twitter != '') {
      echo '     <div class="social-icon lineup-social-icon">';
      echo '       <a href="'.$twitter.'"><i class="fab fa-twitter fa-lg fa-fw my-white"></i></a>';
      echo '     </div>';
    }

    if ($facebook != '') {
      echo '     <div class="social-icon lineup-social-icon">';
      echo '       <a href="'.$facebook.'"><i class="fab fa-facebook-f fa-lg fa-fw my-white"></i></a>';
      echo '     </div>';
    }

    if ($instagram != '') {
      echo '     <div class="social-icon lineup-social-icon">';
      echo '       <a href="'.$instagram.'"><i class="fab fa-instagram fa-lg fa-fw my-white"></i></a>';
      echo '     </div>';
    }

    if ($spotify != '') {
      echo '     <div class="social-icon lineup-social-icon">';
      echo '       <a href="'.$spotify.'"><i class="fab fa-spotify fa-lg fa-fw my-white"></i></a>';
      echo '     </div>';
    }

    if ($apple_music != '') {
      echo '     <div class="social-icon lineup-social-icon">';
      echo '       <a href="'.$apple_music.'"><i class="fab fa-itunes-note fa-lg fa-fw my-white"></i></a>';
      echo '     </div>';
    }

    if ($soundcloud != '') {
      echo '     <div class="social-icon lineup-social-icon">';
      echo '       <a href="'.$soundcloud.'"><i class="fab fa-soundcloud fa-lg fa-fw my-white"></i></a>';
      echo '     </div>';
    }

    if ($bandcamp != '') {
      echo '     <div class="social-icon lineup-social-icon">';
      echo '       <a href="'.$bandcamp.'"><i class="fab fa-bandcamp fa-lg fa-fw my-white"></i></a>';
      echo '     </div>';
    }

      echo '    </div>';

    if ($official_site != '') {
      echo '    <div class="lineup-link lineup-container col-lg-12 col-sm-12 social-icon">';
      echo '      <a href="'.$official_site.'">OFFICIAL SITEはこちら</a>';
      echo '    </div>';
    }

    if ($spincoaster != '') {
      echo '    <div class="lineup-link col-lg-12 col-sm-12 social-icon">';
      echo '      <a href="'.$spincoaster.'">Spincoasterでの記事はこちら</a>';
      echo '    </div>';
    }

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
