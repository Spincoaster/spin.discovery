<?php

function app_scripts() {
    $app_theme = wp_get_theme();
    wp_enqueue_style( 'font-oswald', '//fonts.googleapis.com/css?family=Oswald:400,700,300');
    wp_enqueue_style( 'font-roboto', '//fonts.googleapis.com/css?family=Roboto:400,400italic,700');
    wp_enqueue_style( 'fontawesome', '//use.fontawesome.com/releases/v5.0.6/css/all.css');
    wp_enqueue_style( 'bootstrap-style', '//stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css');
    wp_enqueue_style( 'app-style', get_stylesheet_uri(), array('bootstrap-style'), $app_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js');
    wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js');
    wp_enqueue_script(
        'bootstrap-js',
        '//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js',
        array('jquery', 'popper')
    );
    wp_enqueue_script(
        'app-js',
        get_theme_file_uri().'/assets/js/app.js',
        array('jquery')
    );
}

add_action( 'wp_enqueue_scripts', 'app_scripts' );
