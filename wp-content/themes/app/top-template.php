<?php
/*
Template Name: top
*/
?>

<?php get_header(); ?>

<div class="row">
  <div class="col-lg-7 col-md-7 col-sm-7">
    <h1 class="area-title">LATEST NEWS</h1>
    <div class="entry-list">
      <?php
      query_posts( array ( 'category_name' => 'vol-06', 'posts_per_page' => 5 ) );
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
      <p>“心が震える音楽との出逢い”をコンセプトに国内外の様々な音楽をお届けするキュレーション型音楽メディア「<a href="http://spincoaster.com/" target="_blank">Spincoaster</a>」がお送りする音楽イベント。Spincoasterが自信を持ってオススメするアーティストのライブやキュレーターによるDJ、そしてオーディエンス同士のコミュニケーションを通して、一つでも多くのDISCOVERY（発見）があるイベントにして行きたいと考えています。<br>
        <a href="http://spincoaster.com/spin-discovery-vol-1-event-report/" target="_blank">SPIN. DISCOVERY-Vol.01-/Event Report</a>
      </p>
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
<div class="col-lg-9 col-md-9 col-sm-9">
  <h1 class="area-title">SPIN.DISCOVERY VOL.06</h1>
</div>

<?php get_footer(); ?>