<?php

if (!defined('ABSPATH')) {
    exit;
}

function logicboard_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    add_theme_support(
        'html5',
        [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ]
    );

    register_nav_menus([
        'primary' => __('Menu Principal', 'logicboard'),
    ]);
}

add_action('after_setup_theme', 'logicboard_setup');