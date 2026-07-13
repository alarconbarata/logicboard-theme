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
| Processo
|--------------------------------------------------------------------------
*/

add_settings_section(
    'logicboard_process',
    '⚙ Processo',
    '__return_false',
    'logicboard'
);

logicboard_add_field(
    'process_badge',
    'Badge',
    'logicboard_process'
);

logicboard_add_field(
    'process_title',
    'Título da Seção',
    'logicboard_process'
);

logicboard_add_field(
    'process_subtitle',
    'Subtítulo',
    'logicboard_process',
    'textarea'
);
/*
|--------------------------------------------------------------------------
| Diferenciais
|--------------------------------------------------------------------------
*/

add_settings_section(
    'logicboard_differentials',
    '⭐ Diferenciais',
    '__return_false',
    'logicboard'
);

logicboard_add_field(
    'differentials_badge',
    'Badge',
    'logicboard_differentials'
);

logicboard_add_field(
    'differentials_title',
    'Título da Seção',
    'logicboard_differentials'
);

logicboard_add_field(
    'differentials_subtitle',
    'Subtítulo',
    'logicboard_differentials',
    'textarea'
);
/*
|--------------------------------------------------------------------------
| Laboratório
|--------------------------------------------------------------------------
*/

add_settings_section(
    'logicboard_laboratory',
    '🧪 Laboratório',
    '__return_false',
    'logicboard'
);

logicboard_add_field(
    'laboratory_badge',
    'Badge',
    'logicboard_laboratory'
);

logicboard_add_field(
    'laboratory_title',
    'Título da Seção',
    'logicboard_laboratory'
);

logicboard_add_field(
    'laboratory_subtitle',
    'Subtítulo',
    'logicboard_laboratory',
    'textarea'
);

for ($i = 1; $i <= 4; $i++) {

    logicboard_add_field(
        "laboratory_image_{$i}",
        "Imagem {$i}",
        'logicboard_laboratory',
        'media'
    );

}
/*
|--------------------------------------------------------------------------
| FAQ
|--------------------------------------------------------------------------
*/

add_settings_section(
    'logicboard_faq',
    '❓ FAQ',
    '__return_false',
    'logicboard'
);

logicboard_add_field(
    'faq_badge',
    'Badge',
    'logicboard_faq'
);

logicboard_add_field(
    'faq_title',
    'Título da Seção',
    'logicboard_faq'
);

logicboard_add_field(
    'faq_subtitle',
    'Subtítulo',
    'logicboard_faq',
    'textarea'
);

for ($i = 1; $i <= 6; $i++) {

    logicboard_add_field(
        "faq_{$i}_question",
        "Pergunta {$i}",
        'logicboard_faq'
    );

    logicboard_add_field(
        "faq_{$i}_answer",
        "Resposta {$i}",
        'logicboard_faq',
        'textarea'
    );

}
/*
|--------------------------------------------------------------------------
| CTA
|--------------------------------------------------------------------------
*/

add_settings_section(
    'logicboard_cta',
    '📢 CTA',
    '__return_false',
    'logicboard'
);

logicboard_add_field(
    'cta_badge',
    'Badge',
    'logicboard_cta'
);

logicboard_add_field(
    'cta_title',
    'Título',
    'logicboard_cta'
);

logicboard_add_field(
    'cta_text',
    'Texto',
    'logicboard_cta',
    'textarea'
);

logicboard_add_field(
    'cta_button_1_text',
    'Texto do Botão Principal',
    'logicboard_cta'
);

logicboard_add_field(
    'cta_button_1_url',
    'Link do Botão Principal',
    'logicboard_cta'
);

logicboard_add_field(
    'cta_button_2_text',
    'Texto do Botão Secundário',
    'logicboard_cta'
);

logicboard_add_field(
    'cta_button_2_url',
    'Link do Botão Secundário',
    'logicboard_cta'
);
/*
|--------------------------------------------------------------------------
| Footer
|--------------------------------------------------------------------------
*/

add_settings_section(
    'logicboard_footer',
    '🦶 Footer',
    '__return_false',
    'logicboard'
);

logicboard_add_field(
    'footer_text',
    'Texto Institucional',
    'logicboard_footer',
    'textarea'
);

logicboard_add_field(
    'footer_warranty',
    'Texto da Garantia',
    'logicboard_footer',
    'textarea'
);

logicboard_add_field(
    'footer_copyright',
    'Copyright',
    'logicboard_footer'
);

/*
|--------------------------------------------------------------------------
| Cards
|--------------------------------------------------------------------------
*/

for ($i = 1; $i <= 4; $i++) {

    logicboard_add_field(
        "differential_{$i}_number",
        "Card {$i} - Número",
        'logicboard_differentials'
    );

    logicboard_add_field(
        "differential_{$i}_title",
        "Card {$i} - Título",
        'logicboard_differentials'
    );

    logicboard_add_field(
        "differential_{$i}_description",
        "Card {$i} - Descrição",
        'logicboard_differentials',
        'textarea'
    );

}

/*
|--------------------------------------------------------------------------
| Passos do Processo
|--------------------------------------------------------------------------
*/

for ($i = 1; $i <= 4; $i++) {

    logicboard_add_field(
        "process_{$i}_number",
        "Passo {$i} - Número",
        'logicboard_process'
    );

    logicboard_add_field(
        "process_{$i}_title",
        "Passo {$i} - Título",
        'logicboard_process'
    );

    logicboard_add_field(
        "process_{$i}_description",
        "Passo {$i} - Descrição",
        'logicboard_process',
        'textarea'
    );

}

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

