<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| MENU
|--------------------------------------------------------------------------
*/

add_action('admin_menu', 'logicboard_admin_menu');

function logicboard_admin_menu()
{
    add_menu_page(
        'LogicBoard',
        'LogicBoard',
        'manage_options',
        'logicboard',
        'logicboard_settings_page',
        'dashicons-admin-generic',
        30
    );
}

/*
|--------------------------------------------------------------------------
| CONFIGURAÇÕES
|--------------------------------------------------------------------------
*/

add_action('admin_init', 'logicboard_register_settings');

function logicboard_register_settings()
{
    register_setting('logicboard_settings', 'logicboard_options');

    add_settings_section(
        'logicboard_company',
        'Informações da Empresa',
        '__return_false',
        'logicboard'
    );
add_settings_section(
    'logicboard_hero',
    'Hero',
    '__return_false',
    'logicboard'
);

logicboard_add_field('hero_title', 'Título Principal');
logicboard_add_field('hero_subtitle', 'Subtítulo');

    logicboard_add_field('whatsapp', 'WhatsApp');
    logicboard_add_field('phone', 'Telefone');
    logicboard_add_field('email', 'E-mail');
    logicboard_add_field('address', 'Endereço');
    logicboard_add_field('number', 'Número');
    logicboard_add_field('complement', 'Complemento');
    logicboard_add_field('district', 'Bairro');
    logicboard_add_field('city', 'Cidade');
    logicboard_add_field('state', 'Estado');
    logicboard_add_field('zipcode', 'CEP');

    logicboard_add_field('hours', 'Horário de Atendimento');

    logicboard_add_field('maps', 'Link do Google Maps');

    logicboard_add_field('instagram', 'Instagram');
    logicboard_add_field('linkedin', 'LinkedIn');
}

function logicboard_add_field($id, $label)
{
    add_settings_field(
        $id,
        $label,
        'logicboard_text_callback',
        'logicboard',
        'logicboard_company',
        [
            'id' => $id
        ]
    );
}

function logicboard_text_callback($args)
{
    $options = get_option('logicboard_options');

    $value = isset($options[$args['id']])
        ? esc_attr($options[$args['id']])
        : '';

    ?>

    <input
        type="text"
        class="regular-text"
        name="logicboard_options[<?php echo esc_attr($args['id']); ?>]"
        value="<?php echo $value; ?>">

    <?php
}

/*
|--------------------------------------------------------------------------
| HELPERS
|--------------------------------------------------------------------------
*/

function logicboard_get_whatsapp()
{
    $options = get_option('logicboard_options');

    return $options['whatsapp'] ?? '';
}

function logicboard_get_whatsapp_url()

{
    $number = preg_replace('/\D/', '', logicboard_get_whatsapp());

    return 'https://wa.me/' . $number;
}

function logicboard_get_phone()
{
    $options = get_option('logicboard_options');

    return $options['phone'] ?? '';
}

function logicboard_get_email()
{
    $options = get_option('logicboard_options');

    return $options['email'] ?? '';
}

function logicboard_get_address()
{
    $options = get_option('logicboard_options');

    return $options['address'] ?? '';
}

function logicboard_get_hours()
{
    $options = get_option('logicboard_options');

    return $options['hours'] ?? '';
}

function logicboard_get_maps()
{
    $options = get_option('logicboard_options');

    return $options['maps'] ?? '';
}

function logicboard_get_full_address()
{
    $options = get_option('logicboard_options');

    $lines = [];

    if (!empty($options['address']) || !empty($options['number'])) {
        $lines[] = trim(($options['address'] ?? '') . ', ' . ($options['number'] ?? ''));
    }

    if (!empty($options['complement'])) {
        $lines[] = $options['complement'];
    }

    $city = [];

    if (!empty($options['district'])) {
        $city[] = $options['district'];
    }

    if (!empty($options['city'])) {
        $city[] = $options['city'];
    }

    if (!empty($options['state'])) {
        $city[] = $options['state'];
    }

    if (!empty($city)) {
        $lines[] = implode(' - ', $city);
    }

    if (!empty($options['zipcode'])) {
        $lines[] = 'CEP ' . $options['zipcode'];
    }

    return implode('<br>', $lines);
}

/*
|--------------------------------------------------------------------------
| PÁGINA
|--------------------------------------------------------------------------
*/

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