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
    $options = get_option('logicboard_options', []);

    if (
        !isset($options[$key]) ||
        trim((string) $options[$key]) === ''
    ) {
        return $default;
    }

    return $options[$key];
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

/*
|--------------------------------------------------------------------------
| Endereço
|--------------------------------------------------------------------------
*/

function logicboard_get_full_address()
{
    $lines = [];

    $address = trim(
        logicboard_get_option('address') .
        (logicboard_get_option('number')
            ? ', ' . logicboard_get_option('number')
            : '')
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
}

/*
|--------------------------------------------------------------------------
| Hero
|--------------------------------------------------------------------------
*/

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
function logicboard_get_hero_badge()
{
    return logicboard_get_option(
        'hero_badge',
        'Especialistas em Logic Board Apple'
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
/*
|--------------------------------------------------------------------------
| Services - Cabeçalho da Seção
|--------------------------------------------------------------------------
*/

function logicboard_get_services_title()
{
    return logicboard_get_option(
        'services_title',
        'Serviços Especializados'
    );
}

function logicboard_get_services_subtitle()
{
    return logicboard_get_option(
        'services_subtitle',
        'Soluções completas para reparo avançado de placas lógicas Apple.'
    );
}
function logicboard_get_services_badge()
{
    return logicboard_get_option(
        'services_badge',
        'Nossos Serviços'
    );
}
/*
|--------------------------------------------------------------------------
| Services - Cards
|--------------------------------------------------------------------------
*/

function logicboard_get_service($index)
{
    $defaults = [

        1 => [
            'icon'        => '🔬',
            'title'       => 'Microsolda',
            'description' => 'Reparo em componentes SMD, BGA e trilhas utilizando microscopia profissional.'
        ],

        2 => [
            'icon'        => '💻',
            'title'       => 'Apple Silicon',
            'description' => 'Diagnóstico e reparo de MacBooks M1, M2, M3 e M4.'
        ],

        3 => [
            'icon'        => '⚡',
            'title'       => 'Chip T2',
            'description' => 'Correção de falhas relacionadas ao chip de segurança Apple T2.'
        ],

        4 => [
            'icon'        => '💾',
            'title'       => 'Upgrade SSD',
            'description' => 'Expansão de armazenamento com instalação e configuração.'
        ],

        5 => [
            'icon'        => '💧',
            'title'       => 'Oxidação',
            'description' => 'Recuperação de placas afetadas por líquidos e corrosão.'
        ],

        6 => [
            'icon'        => '📈',
            'title'       => 'Diagnóstico',
            'description' => 'Análise eletrônica completa para identificação precisa da falha.'
        ],

    ];

    if (!isset($defaults[$index])) {
        return [
            'icon' => '',
            'title' => '',
            'description' => '',
        ];
    }

    return [
        'icon' => logicboard_get_option(
            "service_{$index}_icon",
            $defaults[$index]['icon']
        ),

        'title' => logicboard_get_option(
            "service_{$index}_title",
            $defaults[$index]['title']
        ),

        'description' => logicboard_get_option(
            "service_{$index}_description",
            $defaults[$index]['description']
        ),
    ];
}