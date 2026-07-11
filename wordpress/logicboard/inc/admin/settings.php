<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_init', 'logicboard_register_settings');

function logicboard_register_settings()
{
    register_setting(
        'logicboard_settings',
        'logicboard_options'
    );

    /*
    |--------------------------------------------------------------------------
    | Empresa
    |--------------------------------------------------------------------------
    */

    add_settings_section(
        'logicboard_company',
        'Empresa',
        '__return_false',
        'logicboard'
    );

    logicboard_add_field('whatsapp', 'WhatsApp', 'logicboard_company');
    logicboard_add_field('phone', 'Telefone', 'logicboard_company');
    logicboard_add_field('email', 'E-mail', 'logicboard_company');
    logicboard_add_field('hours', 'Horário de Atendimento', 'logicboard_company');

    /*
    |--------------------------------------------------------------------------
    | Endereço
    |--------------------------------------------------------------------------
    */

    add_settings_section(
        'logicboard_address',
        'Endereço',
        '__return_false',
        'logicboard'
    );

    logicboard_add_field('address', 'Endereço', 'logicboard_address');
    logicboard_add_field('number', 'Número', 'logicboard_address');
    logicboard_add_field('complement', 'Complemento', 'logicboard_address');
    logicboard_add_field('district', 'Bairro', 'logicboard_address');
    logicboard_add_field('city', 'Cidade', 'logicboard_address');
    logicboard_add_field('state', 'Estado', 'logicboard_address');
    logicboard_add_field('zipcode', 'CEP', 'logicboard_address');
    logicboard_add_field('maps', 'Google Maps', 'logicboard_address');

    /*
    |--------------------------------------------------------------------------
    | Redes Sociais
    |--------------------------------------------------------------------------
    */

    add_settings_section(
        'logicboard_social',
        'Redes Sociais',
        '__return_false',
        'logicboard'
    );

    logicboard_add_field('instagram', 'Instagram', 'logicboard_social');
    logicboard_add_field('linkedin', 'LinkedIn', 'logicboard_social');

    /*
    |--------------------------------------------------------------------------
    | Hero
    |--------------------------------------------------------------------------
    */

    add_settings_section(
        'logicboard_hero',
        'Hero',
        '__return_false',
        'logicboard'
    );

    logicboard_add_field('hero_badge', 'Badge', 'logicboard_hero');
logicboard_add_field('hero_title', 'Título Principal', 'logicboard_hero');
logicboard_add_field('hero_subtitle', 'Subtítulo', 'logicboard_hero');

logicboard_add_field('hero_image', 'Imagem da Hero', 'logicboard_hero');

logicboard_add_field('hero_button_1_text', 'Texto do Botão Principal', 'logicboard_hero');
logicboard_add_field('hero_button_1_url', 'Link do Botão Principal', 'logicboard_hero');

logicboard_add_field('hero_button_2_text', 'Texto do Botão Secundário', 'logicboard_hero');
logicboard_add_field('hero_button_2_url', 'Link do Botão Secundário', 'logicboard_hero');

}

function logicboard_add_field(
    $id,
    $label,
    $section = 'logicboard_company'
)
{
    add_settings_field(
        $id,
        $label,
        'logicboard_text_callback',
        'logicboard',
        $section,
        [
            'id' => $id
        ]
    );
}

function logicboard_text_callback($args)
{
    $options = get_option('logicboard_options');

    ?>

    <input
        type="text"
        class="regular-text"
        name="logicboard_options[<?php echo esc_attr($args['id']); ?>]"
        value="<?php echo esc_attr($options[$args['id']] ?? ''); ?>">

    <?php
}