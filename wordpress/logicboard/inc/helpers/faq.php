<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| FAQ
|--------------------------------------------------------------------------
*/

function logicboard_get_faq_badge()
{
    return logicboard_get_option(
        'faq_badge',
        'Perguntas Frequentes'
    );
}

function logicboard_get_faq_title()
{
    return logicboard_get_option(
        'faq_title',
        'Tire suas dúvidas'
    );
}

function logicboard_get_faq_subtitle()
{
    return logicboard_get_option(
        'faq_subtitle',
        'Respondemos às perguntas mais comuns sobre nossos serviços.'
    );
}

function logicboard_get_faq($index)
{
    $defaults = [

        1 => [
            'question' => 'Meu MacBook tem conserto?',
            'answer'   => 'Na maioria dos casos sim. Realizamos diagnóstico eletrônico para identificar a falha antes do reparo.'
        ],

        2 => [
            'question' => 'Quanto tempo demora?',
            'answer'   => 'O prazo depende da complexidade do reparo. Após o diagnóstico, informamos a previsão de entrega.'
        ],

        3 => [
            'question' => 'Vocês trabalham com Apple Silicon?',
            'answer'   => 'Sim. Atendemos MacBooks com processadores M1, M2, M3 e M4, além de modelos Intel e T2.'
        ],

        4 => [
            'question' => 'Os reparos possuem garantia?',
            'answer'   => 'Sim. Todos os reparos realizados pela LogicBoard possuem garantia de 6 meses.'
        ],

        5 => [
            'question' => '',
            'answer'   => ''
        ],

        6 => [
            'question' => '',
            'answer'   => ''
        ],

    ];

    if (!isset($defaults[$index])) {
        return [
            'question' => '',
            'answer' => '',
        ];
    }

    return [

        'question' => logicboard_get_option(
            "faq_{$index}_question",
            $defaults[$index]['question']
        ),

        'answer' => logicboard_get_option(
            "faq_{$index}_answer",
            $defaults[$index]['answer']
        ),

    ];
}