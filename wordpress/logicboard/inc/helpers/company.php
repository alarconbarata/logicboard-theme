<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| Empresa
|--------------------------------------------------------------------------
*/

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