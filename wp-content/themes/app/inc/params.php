<?php

if ( ! function_exists( 'spin_get_event' ) ) :
    function spin_get_event() {
        preg_match('/\/(vol-\d\d)/', $_SERVER['REQUEST_URI'], $matches);
        if (count($matches) >= 2) {
            return $matches[1];
        }
        return 'vol-11';
    }
endif;
