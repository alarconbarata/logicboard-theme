<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| CTA
|--------------------------------------------------------------------------
*/

function logicboard_get_cta_badge()
{
    return logicboard_get_option(
        'cta_badge',
        'LogicBoard Specialists'
    );
}

function logicboard_get_cta_title()
{
    return logicboard_get_option(
        'cta_title',
        'Seu MacBook merece um reparo profissional.'
    );
}

function logicboard_get_cta_text()
{
    return logicboard_get_option(
        'cta_text',
        'Somos especialistas em reparo de placas lógicas Apple. Trabalhamos com equipamentos de alta precisão, garantia de 6 meses e atendimento especializado.'
    );
}

function logicboard_get_cta_button_1_text()
{
    return logicboard_get_option(
        'cta_button_1_text',
        'Solicitar orçamento'
    );
}

function logicboard_get_cta_button_1_url()
{
    return logicboard_get_option(
        'cta_button_1_url',
        logicboard_get_whatsapp_url()
    );
}

function logicboard_get_cta_button_2_text()
{
    return logicboard_get_option(
        'cta_button_2_text',
        'Falar com um especialista'
    );
}

function logicboard_get_cta_button_2_url()
{
    return logicboard_get_option(
        'cta_button_2_url',
        '#contato'
    );
}