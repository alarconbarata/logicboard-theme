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
    logicboard_add_field(
    'phone',
    'Telefone',
    'logicboard_company',
    'tel'
);

logicboard_add_field(
    'email',
    'E-mail',
    'logicboard_company',
    'email'
);
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
   logicboard_add_field(
    'maps',
    'Google Maps',
    'logicboard_address',
    'url'
);
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
    logicboard_add_field(
    'hero_subtitle',
    'Subtítulo',
    'logicboard_hero',
    'textarea'
);
    logicboard_add_field(
    'hero_image',
    'Imagem da Hero',
    'logicboard_hero',
    'media'
);
    logicboard_add_field('hero_button_1_text', 'Texto do Botão Principal', 'logicboard_hero');
    logicboard_add_field('hero_button_1_url', 'Link do Botão Principal', 'logicboard_hero');
    logicboard_add_field('hero_button_2_text', 'Texto do Botão Secundário', 'logicboard_hero');
    logicboard_add_field('hero_button_2_url', 'Link do Botão Secundário', 'logicboard_hero');

/*
|--------------------------------------------------------------------------
| Serviços
|--------------------------------------------------------------------------
*/

add_settings_section(
    'logicboard_services',
    '🛠 Serviços',
    '__return_false',
    'logicboard'
);

logicboard_add_field(
    'services_badge',
    'Badge',
    'logicboard_services'
);

logicboard_add_field(
    'services_title',
    'Título da Seção',
    'logicboard_services'
);

logicboard_add_field(
    'services_subtitle',
    'Subtítulo',
    'logicboard_services'
);

/*
|--------------------------------------------------------------------------
| Cards dos Serviços
|--------------------------------------------------------------------------
*/

for ($i = 1; $i <= 6; $i++) {

    logicboard_add_field(
        "service_{$i}_icon",
        "Serviço {$i} - Ícone",
        'logicboard_services'
    );

    logicboard_add_field(
        "service_{$i}_title",
        "Serviço {$i} - Título",
        'logicboard_services'
    );

    logicboard_add_field(
        "service_{$i}_description",
        "Serviço {$i} - Descrição",
        'logicboard_services'
    );

}
}

function logicboard_add_field(
    $id,
    $label,
    $section = 'logicboard_company',
    $type = 'text'
)
{
    add_settings_field(
        $id,
        $label,
        'logicboard_text_callback',
        'logicboard',
        $section,
    [
    'id'   => $id,
    'type' => $type,
    ]
    );
}

function logicboard_text_callback($args)
{
    $options = get_option('logicboard_options', []);

    $id = $args['id'];

    $type = $args['type'] ?? 'text';

    $value = $options[$id] ?? '';

    switch ($type) {

        case 'textarea':

            ?>

            <textarea
                class="large-text"
                rows="5"
                name="logicboard_options[<?php echo esc_attr($id); ?>]"><?php echo esc_textarea($value); ?></textarea>

            <?php

            break;

        case 'url':

            ?>

            <input
                type="url"
                class="regular-text"
                name="logicboard_options[<?php echo esc_attr($id); ?>]"
                value="<?php echo esc_attr($value); ?>">

            <?php

            break;

        case 'email':

            ?>

            <input
                type="email"
                class="regular-text"
                name="logicboard_options[<?php echo esc_attr($id); ?>]"
                value="<?php echo esc_attr($value); ?>">

            <?php

            break;

        case 'tel':

            ?>

            <input
                type="tel"
                class="regular-text"
                name="logicboard_options[<?php echo esc_attr($id); ?>]"
                value="<?php echo esc_attr($value); ?>">

            <?php

            break;
            case 'media':
?>

<div class="logicboard-media-field">

    <input
        type="text"
        class="regular-text logicboard-media-url"
        name="logicboard_options[<?php echo esc_attr($id); ?>]"
        value="<?php echo esc_attr($value); ?>">

    <p style="margin-top:10px;">

        <button
            type="button"
            class="button logicboard-upload">

            Selecionar imagem

        </button>

    </p>

    <div style="margin-top:15px;">

        <img
            class="logicboard-preview"
            src="<?php echo esc_url($value); ?>"
            style="max-width:250px;<?php echo empty($value) ? 'display:none;' : ''; ?>">

    </div>

</div>

<?php
break;

        default:

            ?>

            <input
                type="text"
                class="regular-text"
                name="logicboard_options[<?php echo esc_attr($id); ?>]"
                value="<?php echo esc_attr($value); ?>">

            <?php

            break;
    }
}