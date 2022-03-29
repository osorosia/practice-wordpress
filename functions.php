<?php

function custom_print_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'custom_print_styles');