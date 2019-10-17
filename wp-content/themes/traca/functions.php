<?php
function my_scripts_method() {
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri(). '/css/bootstrap.css');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '1.0.0', false);
    wp_enqueue_script('bootstrap');
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_directory_uri().'/style.css');
    wp_enqueue_script( 'my-great-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
add_theme_support( 'post-thumbnails' );
?>