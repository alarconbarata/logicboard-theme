<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| Footer
|--------------------------------------------------------------------------
*/

function logicboard_get_footer_text()
{
    return logicboard_get_option(
        'footer_text',
        'Especialistas em reparo avançado de placas lógicas Apple.'
    );
}

function logicboard_get_footer_warranty()
{
    return logicboard_get_option(
        'footer_warranty',
        'Todos os reparos possuem garantia de 6 meses.'
    );
}

function logicboard_get_footer_copyright()
{
    return logicboard_get_option(
        'footer_copyright',
        'LogicBoard. Todos os direitos reservados.'
    );
}