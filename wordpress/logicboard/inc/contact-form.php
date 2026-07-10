<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| PROCESSAR FORMULÁRIO
|--------------------------------------------------------------------------
*/

add_action('admin_post_nopriv_logicboard_contact', 'logicboard_handle_contact');
add_action('admin_post_logicboard_contact', 'logicboard_handle_contact');

function logicboard_handle_contact()
{
    // Verifica o nonce
    if (
        !isset($_POST['logicboard_nonce']) ||
        !wp_verify_nonce($_POST['logicboard_nonce'], 'logicboard_contact')
    ) {
        wp_die('Falha na validação de segurança.');
    }

    // Captura os dados
    $name    = sanitize_text_field($_POST['name'] ?? '');
    $email   = sanitize_email($_POST['email'] ?? '');
    $phone   = sanitize_text_field($_POST['phone'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    $to = logicboard_get_email();

$subject = 'Novo orçamento - LogicBoard';

$body  = "Novo contato recebido pelo site.\n\n";
$body .= "Nome: {$name}\n";
$body .= "E-mail: {$email}\n";
$body .= "Telefone: {$phone}\n\n";
$body .= "Descrição do problema:\n";
$body .= "{$message}\n";

$headers = [
    'Content-Type: text/plain; charset=UTF-8',
    'Reply-To: ' . $name . ' <' . $email . '>',
];

$sent = wp_mail($to, $subject, $body, $headers);

if ($sent) {

    wp_redirect(
        add_query_arg(
            'status',
            'success',
            home_url('/#contato')
        )
    );

    exit;

} else {

    wp_redirect(
    home_url('/?status=success#contato')
);

exit;

}
}