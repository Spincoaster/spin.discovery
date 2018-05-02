<?php get_header(); ?>

<?php
if ( is_tax( 'events' ) ) {
  echo "<h1>LINEUP</h1>";
  query_posts( array (
      'post_type' => 'artist',
      'events' => 'vol06',
      'posts_per_page' => 10,
  ) );
  if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();
      $title = get_the_title();
      echo $title;
  ?>
  <div class="row artist">
    <div class="col-lg-5 col-md-5 col-sm-5">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
      <?php
      echo '<h6 class="artist-name"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">'.$title.'</a></h6>';
      ?>
    </div>
  </div>
<?php
endwhile;
endif;
}
?>

<?php get_footer(); ?>