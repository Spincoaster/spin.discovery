<?php
/*
Template Name: top
*/
?>

<?php get_header(); ?>

<div class="background">
  <img class="background-top-resize" src="<?php echo get_template_directory_uri(); ?>/assets/images/background.jpg">
    <!-- <div class="background-logo"> -->
  <img class="background-logo-resize" src="<?php echo get_template_directory_uri(); ?>/assets/images/SD_logo2_square_w.jpg">
    <!-- </div> -->
</div>

<!-- <div class="background-text">
  <p class="background-text-date">2018.06.17.sun</p>
  <p class="background-text-location">at WALL & WALL</p>
</div> -->

<div class="row">

  <div class="lineup">
    <!-- <div class="col-lg-12 col-md-12 col-sm-12"> -->
  <h1 class="area-title">LINEUP</h1>
    <div class="lineup-area">

        <div class="lineup-content">
          <img class="artist-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/commingsoon.jpg" alt="spin_link">
        </div>

        <div class="lineup-content">
          <img class="artist-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/commingsoon.jpg" alt="spin_link">
        </div>

        <div class="lineup-content">
          <img class="artist-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/commingsoon.jpg" alt="spin_link">
        </div>

        <div class="lineup-content">
          <img class="artist-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/commingsoon.jpg" alt="spin_link">
        </div>
      </div>
  </div>


  <div class="news">
  <!-- <div class="col-lg-7 col-md-7 col-sm-7"> -->
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
    </div>
   <!-- </div><br><br> -->
  </div><!--latest news-->

    <div class="about">
      <h1 class="area-title">ABOUT</h1>
        <div class="concept">
           <p>“心が震える音楽との出逢い”をコンセプトに国内外の様々な音楽をお届けするキュレーション型音楽メディア「<a href="http://spincoaster.com/" target="_blank" class="my-white">Spincoaster</a>」がお送りする定期開催イベント。</p>
           <p>Spincoasterが自信を持ってオススメするアーティストのライブやキュレーターによるDJ、そしてオーディエンス同士のコミュニケーションを通して、一つでも多くのDISCOVERY（発見）があるイベントにして行きたいと考えています。</p><br>
           <a href="https://spincoaster.com/category/feaure/spin-discovery-feaure" target="_blank">これまでのイベントの様子</a>
         </p>
        </div>
    </div>

<div class="col-lg-5 col-md-5 col-sm-5">

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

</div>

<div class="access">
  <!-- <div class="col-lg-9 col-md-9 col-sm-9"> -->
    <h1 class="area-title">ACCESS</h1>
      <div class="ggmap" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.479715070424!2d139.71068161525838!3d35.66518828019808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b61d99f523d%3A0x2288182497bc2b80!2sWALL%26WALL!5e0!3m2!1sja!2sjp!4v1526693717663" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
  <!-- </div> -->
  <div class="content-text">
    表参道駅から徒歩1分。
    A4出口を右折、表参道交差点を右折して2つ目のビルの地下1階です。
    A3出口を出た場合、表参道交差点の交番の前の信号を渡った向かい、
    Cosme Kitchenさんの向かって右隣のビルの地下1階にございます。
  </div>

  <div class="content-text">
    One minute walk from Omotesando Station.
    From A4 exit, go right and turn right at before Omotesando junction.
    We are located at B1 in the second building.
    From A3 exit, cross Omotesando junction as you go out from the police station.
    We are located at B1 in the building on right side next to Cosme Kitchen
  </div>

  <div class="content-text">
    <p>〒107-0062</p>
    <p>東京都港区南青山3-18-19
    フェスタ表参道ビルB1</p>
    <p>Festae Omotesando Building B1F, 3-18-19,
    Minami-Aoyama, Minato-ku,Tokyo, Japan. #107-0062
    +81 3 6804 6652</p>
  </div>

    <a href="http://wallwall.tokyo/">http://wallwall.tokyo/</a>
    <br>
    <br>

</div>

<div class="ticket">
  <h1 class="area-title">TICKET</h1>
   <div class="content-text">
     <a class="peatix" href=""></a>
     <p>DATE 2018.06.10 (SUN)<p>
     <p>OPEN 17:00 / START 17:15</p>
     <p>ADV: ¥4,300 (+ 1DRINK)</p>
     <p>DOOR: ¥4,800 (+ 1DRINK)</p>
     <p>イープラス・ファミリーマート店頭Famiポートで前売チケット発売中！</p>
   </div>
</div>

</div>

<?php get_footer(); ?>
