<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| Processo
|--------------------------------------------------------------------------
*/

function logicboard_get_process_badge()
{
    return logicboard_get_option(
        'process_badge',
        'Como Trabalhamos'
    );
}

function logicboard_get_process_title()
{
    return logicboard_get_option(
        'process_title',
        'Nosso Processo'
    );
}

function logicboard_get_process_subtitle()
{
    return logicboard_get_option(
        'process_subtitle',
        'Cada equipamento passa por um fluxo técnico rigoroso para garantir segurança, qualidade e confiabilidade no reparo.'
    );
}

function logicboard_get_process_step($index)
{
    $defaults = [

        1 => [
            'number' => '01',
            'title' => 'Diagnóstico',
            'description' => 'Análise eletrônica completa da placa lógica.'
        ],

        2 => [
            'number' => '02',
            'title' => 'Orçamento',
            'description' => 'Aprovação do orçamento antes do início do reparo.'
        ],

        3 => [
            'number' => '03',
            'title' => 'Reparo',
            'description' => 'Execução do reparo com equipamentos profissionais e técnicas avançadas.'
        ],

        4 => [
            'number' => '04',
            'title' => 'Testes',
            'description' => 'Testes funcionais completos e controle de qualidade antes da entrega.'
        ],

    ];

    if (!isset($defaults[$index])) {
        return [
            'number' => '',
            'title' => '',
            'description' => '',
        ];
    }

    return [

        'number' => logicboard_get_option(
            "process_{$index}_number",
            $defaults[$index]['number']
        ),

        'title' => logicboard_get_option(
            "process_{$index}_title",
            $defaults[$index]['title']
        ),

        'description' => logicboard_get_option(
            "process_{$index}_description",
            $defaults[$index]['description']
        ),

    ];
}