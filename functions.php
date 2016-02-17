<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );




// function child_theme_enqueue_scripts() {
//     wp_enqueue_script( 'extra js', get_stylesheet_directory() . '/js/extra.js' );
// // 	wp_enqueue_script('extra js');
// }












/***********************************
 * FOR DEVELOPMENT ONLY
 * 
 * ********************************/
?>