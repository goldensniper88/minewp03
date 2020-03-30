<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
add_filter('show_admin_bar', '__return_false');

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
   wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/css/custom.css' );
   wp_enqueue_style( 'responsive', get_stylesheet_directory_uri() . '/responsive.css' );
}