<?php

function ahaha_scripts() {
    wp_register_style(
        'style',
        get_stylesheet_directory_uri().'/style.css'
    );

    wp_enqueue_style(
        'style',
        '',
        array(),
        '1.0',
        false
    );
}
add_action( 'wp_head', 'ahaha_scripts' );
