<?php

function logicboard_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => __('Menu Principal', 'logicboard')
    ]);

}

add_action('after_setup_theme','logicboard_setup');