<?php

register_nav_menus(
    array(
        'top' => __( 'Top Menu', 'app' ),
    )
);

add_filter( 'nav_menu_css_class' , function($atts) {
    $atts['class'] = "nav-item";
    return $atts;
}, 10, 2 );

add_filter( 'nav_menu_link_attributes', function($atts) {
    $atts['class'] = "nav-link";
    return $atts;
}, 10, 1 );
