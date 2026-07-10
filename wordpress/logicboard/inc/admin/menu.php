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