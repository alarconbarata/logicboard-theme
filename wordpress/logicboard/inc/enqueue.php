<?php

if (!defined('ABSPATH')) {
    exit;
}

function logicboard_enqueue_assets() {

    $theme = wp_get_theme();

    wp_enqueue_style(
        'logicboard-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        $theme->get('Version')
    );

    wp_enqueue_script(
        'logicboard-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        $theme->get('Version'),
        true
    );

}

add_action('wp_enqueue_scripts', 'logicboard_enqueue_assets');