<?php
function theme_script(){
    wp_enqueue_style(
        'theme-style',
        get_template_directory_uri().'/css/style.css'
    );

    wp_enqueue_style(
        'theme-common',
        get_template_directory_uri().'/css/common.css'
    );

    wp_enqueue_script(
        'theme-slide-script',
        get_template_directory_uri().'/js/slideshow.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_script');

function theme_setup(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_setup');