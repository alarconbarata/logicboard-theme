<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| Diferenciais
|--------------------------------------------------------------------------
*/

function logicboard_get_differentials_badge()
{
    return logicboard_get_option(
        'differentials_badge',
        'Por que escolher a LogicBoard?'
    );
}

function logicboard_get_differentials_title()
{
    return logicboard_get_option(
        'differentials_title',
        'Especialização, tecnologia e segurança'
    );
}

function logicboard_get_differentials_subtitle()
{
    return logicboard_get_option(
        'differentials_subtitle',
        'Nosso laboratório conta com equipamentos profissionais e processos técnicos rigorosos para realizar reparos avançados em placas lógicas Apple, garantindo qualidade, confiabilidade e segurança em cada serviço.'
    );
}

function logicboard_get_differential($index)
{
    $defaults = [

        1 => [
            'number' => '01',
            'title' => 'Especialização Apple',
            'description' => 'Atendimento dedicado exclusivamente ao ecossistema Apple, com foco em placas lógicas de MacBooks.'
        ],

        2 => [
            'number' => '02',
            'title' => 'Equipamentos Profissionais',
            'description' => 'Microscópios, estações de microsolda e instrumentos de medição de alta precisão.'
        ],

        3 => [
            'number' => '03',
            'title' => 'Garantia de 6 meses',
            'description' => 'Todos os reparos são entregues com garantia e testes completos de funcionamento.'
        ],

        4 => [
            'number' => '04',
            'title' => 'Diagnóstico Preciso',
            'description' => 'Identificamos a causa da falha antes do reparo, reduzindo custos e aumentando a confiabilidade.'
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
            "differential_{$index}_number",
            $defaults[$index]['number']
        ),

        'title' => logicboard_get_option(
            "differential_{$index}_title",
            $defaults[$index]['title']
        ),

        'description' => logicboard_get_option(
            "differential_{$index}_description",
            $defaults[$index]['description']
        ),

    ];
}