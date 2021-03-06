<?php

wp_enqueue_style( 'index', get_template_directory_uri() .'/css/index.css');

function load_font_awesome() {
    wp_enqueue_style( 'font-awesome-style', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
}

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}

add_filter( 'excerpt_length', function(){
	return 20;
} );
add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return '<a href="'. get_permalink($post) . '">...</a>';
}

add_action( 'init', 'register_my_menus' );
add_action( 'wp_enqueue_scripts', 'load_font_awesome' );