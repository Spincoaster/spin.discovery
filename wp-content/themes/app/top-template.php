<?php
/*
Template Name: top
*/
?>

<?php get_header(); ?>

<?php $event = spin_get_event(); ?>

<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-11">
    <h1 class="area-title">LINEUP</h1>
  </div>
  <?php
  query_posts( array (
    'post_type' => 'artist',
    'events' => $event,
    'posts_per_page' => 10,
    'order' => 'ASC',
    'orderby' => 'title',
  ) );
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      $title = get_the_title();
      $image_id = get_post_meta(get_the_id(), 'image', true);
      $image_src = wp_get_attachment_image($image_id, 'medium', false, array( 'class' => 'artist-image' ) );
      echo '<div class="col-lg-6 col-sm-12 artist-container">';
      echo $image_src;
      echo '<p class="artist-title">'.$title.'</p>';
      echo '</div>';
    }
  }
  ?>
</div>


<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">
    <h1 class="area-title">LATEST NEWS</h1>
    <div class="entry-list">
      <?php
      query_posts( array ( 'category_name' => $event, 'posts_per_page' => 5 ) );
      if ( have_posts() ) :
        while ( have_posts() ) :
          the_post();
          $time_string = sprintf(
            '<time class="entry-date published updated" datetime="%1$s">%2$s</time>',
            get_the_date( DATE_W3C ),
            get_the_date( 'Y.n.j' )
          );
          $title = get_the_title();
            echo '<div class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">'.$time_string.'　'.$title.'</a></div>';
          endwhile;
      endif;
      ?>

    </div><br><br>
  </div><!--latest news-->

  <div class="col-lg-6 col-md-6 col-sm-12">
    <h1 class="area-title">ABOUT</h1>
    <div class="concept">
      <?php
          $page_info = get_page_by_path('/'.$event.'/about');
          $page = get_post($page_info);
          echo $page->post_content;
      ?>
    </div>

  </div><!--about-->
</div>


<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">
    <h1 class="area-title">TICKET</h1>
    <div class="concept">
      <?php
      $page_info = get_page_by_path('/'.$event.'/ticket');
      $page = get_post($page_info);
      echo $page->post_content;
      ?>
    </div>
  </div><!--ticket-->

  <div class="col-lg-6 col-md-6 col-sm-12">
    <h1 class="area-title">EVENT PLAYLIST</h1>
    <iframe src="https://open.spotify.com/embed?uri=spotify:user:spincoaster:playlist:5aB2BqNYfsBRQUeY5qHOAm" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
  </div>
</div>

<br>
<br>

<?php get_footer(); ?>
