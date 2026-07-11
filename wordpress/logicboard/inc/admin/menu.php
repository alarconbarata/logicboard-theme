<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_menu', 'logicboard_admin_menu');

function logicboard_admin_menu()
{
    add_menu_page(
        'LogicBoard',
        'LogicBoard',
        'manage_options',
        'logicboard',
        'logicboard_settings_page',
        'dashicons-admin-generic',
        30
    );
}
add_action('admin_enqueue_scripts', 'logicboard_admin_scripts');

function logicboard_admin_scripts($hook)
{
    if ($hook !== 'toplevel_page_logicboard') {
        return;
    }

    wp_enqueue_media();

    wp_enqueue_script(
        'logicboard-admin',
        get_template_directory_uri() . '/assets/js/admin.js',
        ['jquery'],
        '1.0.0',
        true
    );
}