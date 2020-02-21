<div class="header-container">
  <div class="header-image-container col-10 offset-1 col-lg-6 offset-lg-3 col-sm-8 offset-sm-2">
    <!-- <img class="header-image" src="<?= get_template_directory_uri(); ?>/assets/images/SD13_logo.png"> -->

    <?php
      $top_logo_id = get_post_meta(get_the_id(), 'top-logo', true);
      $top_logo_src = wp_get_attachment_image($top_logo_id, 'large', false, array( 'class' => 'top-logo' ) );
      echo '<div class="header-image">'.$top_logo_src.'</div>';
    ?>

    <div class="header-image-caption">
     <p>
        <?php $date = get_post_meta(get_the_id(), 'date', true);
         if ( ! empty( $date ) ) {
           echo $date;
          }
         ?>
      <br>
         <?php $place = get_post_meta(get_the_id(), 'place', true);
          if ( ! empty( $place ) ) {
            echo $place;
          }
         ?>
     </p>
    </div>
  </div>
</div>
