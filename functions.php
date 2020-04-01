<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
add_filter('show_admin_bar', '__return_false');

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/css/custom.css' );
    wp_enqueue_style( 'responsive', get_stylesheet_directory_uri() . '/css/responsive.css' );
}

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );