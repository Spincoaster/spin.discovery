<?php get_header(); ?>

<div class="wrap">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
<?php
    while ( have_posts() ) :
      the_post();
      get_template_part( 'template-parts/page/content', 'page' );
    endwhile;
?>

<div class="access">
  <!-- <div class="col-lg-9 col-md-9 col-sm-9"> -->
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

    </main><!-- #main -->
  </div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer(); ?>
