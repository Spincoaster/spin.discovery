  <?php
    $event_top_page = get_page_by_path(spin_get_event());
    $banner_image_id = get_post_meta($event_top_page->ID, 'banner-image', true);
    $banner_image_src = wp_get_attachment_image_src($banner_image_id, 'large', false);
    $banner_url = get_post_meta($event_top_page->ID, 'banner-url', true);
  ?>
  <?php if ( ! empty( $banner_image_src ) ) : ?>
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-12">
        <a href="<?php echo $banner_url ?>" target="_blank">
          <img src="<?php echo $banner_image_src[0]; ?>" style="width: 100%;"/>
        </a>
      </div>
    </div>
    <br>
    <br>
    <br>
  <?php endif ?>
  <footer id="footer">
   <div class="site_footer">
     <div class="col-lg-12 col-md-12 col-sm-12">
       <div class="footer_credit">
         <div class="footer_sns">

           <div class="footer_item_mailIcon">
             <a class="social-icon" href="https://spincoaster.co.jp/contact/">
               <i class="far fa-envelope fa-lg fa-fw my-white"></i>
             </a>
           </div>

           <div class="footer_item_spotifyIcon">
             <a class="social-icon" href="https://open.spotify.com/user/spincoaster?si=HMp8TtTzTZueS0faR3xcyA">
               <i class="fab fa-spotify fa-lg fa-fw my-white"></i>
             </a>
           </div>

           <div class="footer_item_twitterIcon">
             <a  class="social-icon" href="https://twitter.com/Spincoaster_2nd">
               <i class="fab fa-twitter fa-lg fa-fw my-white"></i>
             </a>
           </div>

           <div class="footer_item_facebookIcon">
             <a class="social-icon" href="https://www.facebook.com/spincoaster.music">
               <i class="fab fa-facebook-f fa-lg fa-fw my-white"></i>
             </a>
           </div>

           <div class="footer_item_instagramIcon">
             <a class="social-icon" href="https://www.instagram.com/Spincoaster/">
               <i class="fab fa-instagram fa-lg fa-fw my-white"></i>
             </a>
           </div>

         </div>

         <div class="footer_log">
           <div class="footer_item_spinIcon">
             <a href="https://spincoaster.com/">
               　<img class="spinIcon" src="<?php echo get_template_directory_uri(); ?>/assets/images/Spincoaster_log.jpg" alt="spin_link">
             </a>
           </div>
         </div>
          </div>
     </div>

     <div class="copyright">
       <small class="col-lg-10 col-md-10 col-sm-10">
         <a> © Spincoaster, Inc. All right reserved</a>
       </small>
     </div>

   </div>
  </footer>
<?php wp_footer(); ?>
