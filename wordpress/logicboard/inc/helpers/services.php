<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| Services - Cabeçalho
|--------------------------------------------------------------------------
*/

function logicboard_get_services_badge()
{
    return logicboard_get_option(
        'services_badge',
        'Nossos Serviços'
    );
}

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

/*
|--------------------------------------------------------------------------
| Services - Cards
|--------------------------------------------------------------------------
*/

function logicboard_get_service($index)
{
    $defaults = [

        1 => [
            'icon' => '🔬',
            'title' => 'Microsolda',
            'description' => 'Reparo em componentes SMD, BGA e trilhas utilizando microscopia profissional.'
        ],

        2 => [
            'icon' => '💻',
            'title' => 'Apple Silicon',
            'description' => 'Diagnóstico e reparo de MacBooks M1, M2, M3 e M4.'
        ],

        3 => [
            'icon' => '⚡',
            'title' => 'Chip T2',
            'description' => 'Correção de falhas relacionadas ao chip de segurança Apple T2.'
        ],

        4 => [
            'icon' => '💾',
            'title' => 'Upgrade SSD',
            'description' => 'Expansão de armazenamento com instalação e configuração.'
        ],

        5 => [
            'icon' => '💧',
            'title' => 'Oxidação',
            'description' => 'Recuperação de placas afetadas por líquidos e corrosão.'
        ],

        6 => [
            'icon' => '📈',
            'title' => 'Diagnóstico',
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
        'icon' => logicboard_get_option("service_{$index}_icon", $defaults[$index]['icon']),
        'title' => logicboard_get_option("service_{$index}_title", $defaults[$index]['title']),
        'description' => logicboard_get_option("service_{$index}_description", $defaults[$index]['description']),
    ];
}