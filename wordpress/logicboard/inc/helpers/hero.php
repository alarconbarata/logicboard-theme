<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| Hero
|--------------------------------------------------------------------------
*/

function logicboard_get_hero_badge()
{
    return logicboard_get_option(
        'hero_badge',
        'Especialistas em Logic Board Apple'
    );
}

function logicboard_get_hero_title()
{
    return logicboard_get_option(
        'hero_title',
        'Reparo avançado de placas lógicas para MacBook'
    );
}

function logicboard_get_hero_subtitle()
{
    return logicboard_get_option(
        'hero_subtitle',
        'Recuperamos placas lógicas de MacBooks Intel, T2 e Apple Silicon (M1, M2, M3 e M4) utilizando microscopia eletrônica, equipamentos profissionais e técnicas avançadas de microsolda.'
    );
}

function logicboard_get_hero_button_1_text()
{
    return logicboard_get_option(
        'hero_button_1_text',
        'Solicitar orçamento'
    );
}

function logicboard_get_hero_button_1_url()
{
    return logicboard_get_option(
        'hero_button_1_url',
        logicboard_get_whatsapp_url()
    );
}

function logicboard_get_hero_button_2_text()
{
    return logicboard_get_option(
        'hero_button_2_text',
        'Conhecer serviços'
    );
}

function logicboard_get_hero_button_2_url()
{
    return logicboard_get_option(
        'hero_button_2_url',
        '#servicos'
    );
}

function logicboard_get_hero_image()
{
    return logicboard_get_option(
        'hero_image',
        get_template_directory_uri() . '/assets/img/hero-board.webp'
    );
}