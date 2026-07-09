<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| HELPERS
|--------------------------------------------------------------------------
*/

function logicboard_get_option($key, $default = '')
{
    $options = get_option('logicboard_options');

    return $options[$key] ?? $default;
}

function logicboard_get_whatsapp()
{
    return logicboard_get_option('whatsapp');
}

function logicboard_get_whatsapp_url()
{
    $number = preg_replace('/\D/', '', logicboard_get_whatsapp());

    return 'https://wa.me/' . $number;
}

function logicboard_get_phone()
{
    return logicboard_get_option('phone');
}

function logicboard_get_email()
{
    return logicboard_get_option('email');
}

function logicboard_get_hours()
{
    return logicboard_get_option('hours');
}

function logicboard_get_maps()
{
    return logicboard_get_option('maps');
}

function logicboard_get_instagram()
{
    return logicboard_get_option('instagram');
}

function logicboard_get_linkedin()
{
    return logicboard_get_option('linkedin');
}

function logicboard_get_full_address()
{
    $lines = [];

    $address = trim(
        logicboard_get_option('address') .
        (logicboard_get_option('number') ? ', ' . logicboard_get_option('number') : '')
    );

    if ($address) {
        $lines[] = $address;
    }

    if (logicboard_get_option('complement')) {
        $lines[] = logicboard_get_option('complement');
    }

    $location = [];

    if (logicboard_get_option('district')) {
        $location[] = logicboard_get_option('district');
    }

    if (logicboard_get_option('city')) {
        $location[] = logicboard_get_option('city');
    }

    if (logicboard_get_option('state')) {
        $location[] = logicboard_get_option('state');
    }

    if (!empty($location)) {
        $lines[] = implode(' - ', $location);
    }

    if (logicboard_get_option('zipcode')) {
        $lines[] = 'CEP ' . logicboard_get_option('zipcode');
    }

    return implode('<br>', $lines);
}">