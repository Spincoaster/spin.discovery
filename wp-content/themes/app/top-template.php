<?php
/*
Template Name: top
*/
?>

<?php get_header(); ?>

<?php $event = spin_get_event(); ?>

<div class="row justify-content-center">
  <div class="col-lg-12 col-md-12 col-sm-11">
    <h1 class="area-title">LINEUP</h1>
  </div>
  <?php
  query_posts( array (
    'post_type' => 'artist',
    'events' => $event,
    'posts_per_page' => 10,
  ) );

  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      $title = get_the_title();
      $cast_time = get_post_meta(get_the_id(), 'cast_time', true);
      $image_id = get_post_meta(get_the_id(), 'image', true);
      $image_src = wp_get_attachment_image($image_id, 'large', false, array( 'class' => 'artist-image' ) );

      echo '<div class="col-lg-6 col-sm-12 artist-container">';
      echo '<a href="/events/'.$event.'/#'.$title.'">'.$image_src.'</a>';
      echo '<div class="artist-title"><a class="artist-title-name" href="/events/'.$event.'/#'.$title.'" style="color:#fff;">'.$title.'</a><a class="artist-title-time">'.$cast_time.'</a></div>';
      // echo '<div class="artist-title"><a class="artist-title-name" href="/events/'.$event.'/#'.$title.'" style="color:#fff;">'.$title.'</a></div>';
      echo '</div>';
    }
  }
  ?>
  <!-- <p class="andmore">...and more!</p> -->
</div>


<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">
    <h1 class="area-title">NEWS</h1>
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
    <iframe src="https://open.spotify.com/embed/user/spincoaster/playlist/5aB2BqNYfsBRQUeY5qHOAm" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
  </div>
</div>

<br>
<br>

<div class="row">
  <div class="col-lg-2 col-md-1 col-sm-1">
    <p><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></p>
    <p><iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fdiscovery.spincoaster.com%2F&width=119&layout=button&action=like&size=small&show_faces=true&share=true&height=65" width="119" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></p>
    <div class="line-it-button" data-lang="ja" data-type="share-a" data-url="http://discovery.spincoaster.com/" style="display: none;"></div>
    <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
  </div>
</div>

<br>
<br>


<?php get_footer(); ?>
