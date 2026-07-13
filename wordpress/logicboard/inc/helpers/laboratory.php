<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| Laboratório
|--------------------------------------------------------------------------
*/

function logicboard_get_laboratory_badge()
{
    return logicboard_get_option(
        'laboratory_badge',
        'Nosso Laboratório'
    );
}

function logicboard_get_laboratory_title()
{
    return logicboard_get_option(
        'laboratory_title',
        'Estrutura profissional para reparos eletrônicos'
    );
}

function logicboard_get_laboratory_subtitle()
{
    return logicboard_get_option(
        'laboratory_subtitle',
        'Equipamentos de alta precisão, microscopia profissional e ferramentas especializadas para reparo de placas lógicas Apple.'
    );
}

function logicboard_get_laboratory_image($index)
{
    $defaults = [

        1 => get_template_directory_uri() . '/assets/img/lab-01.webp',

        2 => get_template_directory_uri() . '/assets/img/lab-02.webp',

        3 => get_template_directory_uri() . '/assets/img/lab-03.webp',

        4 => get_template_directory_uri() . '/assets/img/lab-04.webp',

    ];

    return logicboard_get_option(
        "laboratory_image_{$index}",
        $defaults[$index] ?? ''
    );
}