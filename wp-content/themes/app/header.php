<?php $event = spin_get_event(); ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
     ga('create', 'UA-17285060-5', 'auto');
     ga('send', 'pageview');
    </script>
  </head>
  <body <?php body_class(); ?>>
    <div id="APEX-root"></div>
　　　<script>
　　　　!function(d,s,id){var
　　　　Js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://zaiko.io/widgets/all.js.php";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","APEX-jssdk");
　　　</script>
    <div class="background"></div>
    <!-- <?php if ( is_front_page() ) : ?>
    <video
      id="header-video"
      class="header-video"
      width="100%"
      muted autoplay loop
      preload="metadata"
      src="//d1rm4mnq8j8biv.cloudfront.net/files/vol-12.mp4"
      poster="<?php echo get_template_directory_uri(); ?>/assets/images/vol-08-cm-poster.jpg">
    </video>
    <div id="header-video-scroll-button" class="header-video-scroll-button"></div>
    <?php endif; ?> -->
    <div id="page" class="site">
      <header>
        <nav class="navbar navbar-expand-md navbar-expand-lg">
          <a id="nav-logo" class="navbar-brand" href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SD_logo_yoko_w_ver.3.png" />
          </a>
          <button
            class="navbar-toggler navbar-white"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-right mr-auto">
              <li id="nav-home" class="nav-item"><a class="nav-link" href="/">HOME</a></li>
              <li class="nav-item"><a class="nav-link" href="/events/<?= $event ?>" >LINEUP</a></li>
              <li class="nav-item"><a class="nav-link" href="/<?= $event ?>/about" >ABOUT</a></li>
              <li class="nav-item"><a class="nav-link" href="/<?= $event ?>/ticket" >TICKET</a></li>
              <li class="nav-item"><a class="nav-link" href="/<?= $event ?>/history" >HISTORY</a></li>
              <li class="nav-item"><a class="nav-link" href="/<?= $event ?>/access" >ACCESS</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </nav>
      </header>
      <?php
      if ( ( is_single() || ( is_page() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
      echo '<div class="single-featured-image-header">';
      echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
      echo '</div><!-- .single-featured-image-header -->';
      endif;
      if ( is_front_page() ) :
        get_template_part( 'template-parts/header/header', 'image' );
        // echo '<div id="header-video-button" class="header-video-button"></div>';
      endif;
      ?>
      <div class="site-content-contain">
        <div id="content" class="site-content">
