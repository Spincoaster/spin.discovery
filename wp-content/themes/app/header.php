<?php $event = spin_get_event(); ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
  </head>
  <body <?php body_class(); ?>>
    <div
      class="background"
      style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg.jpg')"
    ></div>
    <div id="page" class="site">
      <header>
        <nav class="navbar navbar-expand-md navbar-expand-lg">
          <a class="navbar-brand" href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand.png" />
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
<!-- TODO           <li class="nav-item"><a class="nav-link" href="/events/<?= $event ?>" >LINEUP</a></li> -->
              <li class="nav-item"><a class="nav-link" href="/<?= $event ?>/timetable" >TIMETABLE</a></li>
              <li class="nav-item"><a class="nav-link" href="/<?= $event ?>/ticket" >TICKET</a></li>
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
      endif;
      ?>
      <div class="site-content-contain">
        <div id="content" class="site-content">
