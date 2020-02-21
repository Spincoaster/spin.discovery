<div class="header-container">
  <div class="header-image-container col-10 offset-1 col-lg-6 offset-lg-3 col-sm-8 offset-sm-2">
    <!-- <img class="header-image" src="<?= get_template_directory_uri(); ?>/assets/images/SD13_logo.png"> -->

    <?php
      $header_image_id = get_post_meta(get_the_id(), 'header-image', true);
      $header_image_src = wp_get_attachment_image_src($header_image_id, 'large', false);
    ?>
    <?php if ( !empty($header_image_src) ) : ?>
      <img class="header-image" src="<?php echo $header_image_src[0]; ?>" />
    <?php  endif ?>

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
