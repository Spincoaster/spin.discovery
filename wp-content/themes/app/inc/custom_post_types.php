<?php

function app_register_artist() {
    $labels = array(
        'name'               => _x( 'アーティスト', 'artist' ),
        'singular_name'      => _x( 'アーティスト', 'artist' ),
        'add_new'            => _x( '新規追加', 'artist' ),
        'add_new_item'       => _x( '新しいアーティスト追加', 'artist' ),
        'edit_item'          => _x( 'アーティストを編集', 'artist' ),
        'new_item'           => _x( '新しいアーティスト', 'artist' ),
        'view_item'          => _x( 'アーティストを見る', 'artist' ),
        'search_items'       => _x( 'アーティスト検索', 'artist' ),
        'not_found'          => _x( 'アーティストが見つかりません', 'artist' ),
        'not_found_in_trash' => _x( 'ゴミ箱にアーティストはありません', 'artist' ),
        'parent_item_colon'  => _x( '親アーティスト:', 'artist' ),
        'menu_name'          => _x( 'アーティストページ', 'artist' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'アーティストプロフィール',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),

        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-format-audio',

        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    register_post_type( 'artist', $args );
}

function app_register_taxonomy() {
    register_taxonomy(
        'events',
        'artist',
        array(
            'label' => 'イベント',
            'labels' => array(
                'all_items' => 'イベント一覧',
                'add_new_item' => '新規イベントを追加'
            ),
            'hierarchical' => false,
            'show_admin_column' => true,
        )
    );
}

function app_set_order_lineup($query) {
    if ( is_archive() && is_tax( 'events' )):
        $query->set( 'order', 'ASC' );
        $query->set( 'orderby', 'menu_order' );
    endif;
}

function app_setup_custom_post_types() {
    app_register_artist();
    app_register_taxonomy();
    add_action( 'pre_get_posts', 'app_set_order_lineup');
}

add_action( 'init', 'app_setup_custom_post_types' );
