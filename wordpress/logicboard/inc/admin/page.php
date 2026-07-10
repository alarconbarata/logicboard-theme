<?php

if (!defined('ABSPATH')) {
    exit;
}

function logicboard_settings_page()
{
?>

<div class="wrap">

    <h1>LogicBoard</h1>

    <form method="post" action="options.php">

        <?php

        settings_fields('logicboard_settings');

        do_settings_sections('logicboard');

        submit_button('Salvar Configurações');

        ?>

    </form>

</div>

<?php
}