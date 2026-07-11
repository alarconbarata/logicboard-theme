<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| Função base
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
| Carrega os Helpers
|--------------------------------------------------------------------------
*/

require_once __DIR__ . '/helpers/company.php';
require_once __DIR__ . '/helpers/address.php';
require_once __DIR__ . '/helpers/hero.php';
require_once __DIR__ . '/helpers/services.php';
require_once __DIR__ . '/helpers/process.php';
require_once __DIR__ . '/helpers/differentials.php';
require_once __DIR__ . '/helpers/laboratory.php';
require_once __DIR__ . '/helpers/faq.php';
require_once __DIR__ . '/helpers/cta.php';
require_once __DIR__ . '/helpers/footer.php';