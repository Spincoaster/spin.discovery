<?php

if ( ! function_exists( 'spin_get_event' ) ) :
    function spin_get_event() {
        preg_match('/\/(vol-\d\d)/', $_SERVER['REQUEST_URI'], $matches);
        if (count($matches) >= 2) {
            return $matches[1];
        }
        preg_match('/\/(SPECIAL)/', $_SERVER['REQUEST_URI'], $matches);
        if (count($matches) >= 2) {
            return $matches[1];
        }
        return get_option('current_event');
    }
    add_option( 'current_event', 'vol-14' );

    function add_current_event_field( $whitelist_options ) {
        $whitelist_options['general'][] = 'current_event';
        return $whitelist_options;
    }
    add_filter( 'whitelist_options', 'add_current_event_field' );

    function regist_current_event_field() {
        add_settings_field( 'current_event', '現在のイベント', 'display_current_event', 'general' );
    }
    add_action( 'admin_init', 'regist_current_event_field' );

    function display_current_event() {
        $blog_title = get_option( 'current_event' );
        ?>
        <input name="current_event" type="text" id="current_event" value="<?php echo esc_html( $blog_title ); ?>" class="regular-text">
    <?php
    }
endif;
