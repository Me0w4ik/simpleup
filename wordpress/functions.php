<?php
function simpleup_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form'));
}

add_action('after_setup_theme', 'simpleup_theme_setup');

function simpleup_enqueue_assets() {

    wp_enqueue_style('simpleup-style', get_stylesheet_uri());
    
    wp_enqueue_style('unbounded-font', 'https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap');
    
    wp_enqueue_script('simpleup-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'simpleup_enqueue_assets');

require_once get_template_directory() . '/inc/shortcodes.php';
?>