<?php

if (!defined('ABSPATH')) {
    exit;
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