<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| Página de Configurações
|--------------------------------------------------------------------------
*/

function logicboard_settings_page()
{
    ?>

    <div class="wrap">

        <h1><?php echo esc_html__('LogicBoard', 'logicboard'); ?></h1>

        <form method="post" action="options.php">

            <?php
            settings_fields('logicboard_settings');
            do_settings_sections('logicboard');
            submit_button(__('Salvar Configurações', 'logicboard'));
            ?>

        </form>

    </div>

    <?php
}