<?php 

function vsh_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'slick-style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_script( 'vsh-js', get_template_directory_uri() .'/js/vsh-script.js', array( 'jquery', ) );
    wp_enqueue_script( 'slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery', ) );
    wp_enqueue_style( 'add_google_fonts ', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap', false );
}
add_action('wp_enqueue_scripts', 'vsh_scripts');

function register_my_menus() {
    register_nav_menus(
        array(
        'header-menu' => __( 'Header Menu' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );
