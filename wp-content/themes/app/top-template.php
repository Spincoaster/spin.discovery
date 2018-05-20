<?php
/*
Template Name: top
*/
?>

<?php get_header(); ?>

<?php $event = spin_get_event(); ?>

<div class="row">
  <div class="col-lg-7 col-md-7 col-sm-7">
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

  <div class="col-lg-5 col-md-5 col-sm-5">
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
<br><br>

<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">
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
        echo '<div class="col-lg-6 col-sm-10 artist-container">';
        echo $image_src;
        echo '<p class="artist-title">'.$title.'</p>';
        echo '</div>';
      }
    }
    ?>
</div>

<?php
query_posts( array (
  'post_type' => 'artist',
  'events' => 'vol06',
  'posts_per_page' => 10,
) );
if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    $title = get_the_title();
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
?>

<?php get_footer(); ?>