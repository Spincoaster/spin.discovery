<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  </head>
  <body <?php body_class(); ?>>

    <div id="page" class="site">
      <header>
        <nav class="navbar navbar-expand-md navbar-expand-lg">
          <a class="navbar-brand" href="/">
            <img class="navbar-logo-resize" src="<?php echo get_template_directory_uri(); ?>/assets/images/SD_logo2_yoko_w.jpg" />
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
              <li class="nav-item"><a class="nav-link" href="/">HOME</a></li>
              <li class="nav-item"><a class="nav-link" href="/events/vol-06" >LINEUP</a></li>
              <li class="nav-item"><a class="nav-link" href="/vol-06/timetable" >TIMETABLE</a></li>
              <li class="nav-item"><a class="nav-link" href="/vol-06/ticket" >TICKET</a></li>
              <li class="nav-item"><a class="nav-link" href="/vol-06/access" >ACCESS</a></li>
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
      ?>
      <div class="site-content-contain">
        <div id="content" class="site-content">
