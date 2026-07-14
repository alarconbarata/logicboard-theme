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
    /*
    |--------------------------------------------------------------------------
    | Validação de Segurança
    |--------------------------------------------------------------------------
    */

    if (
        !isset($_POST['logicboard_nonce']) ||
        !wp_verify_nonce($_POST['logicboard_nonce'], 'logicboard_contact')
    ) {
        wp_die('Falha na validação de segurança.');
    }

    /*
    |--------------------------------------------------------------------------
    | Sanitização dos Dados
    |--------------------------------------------------------------------------
    */

    $name    = sanitize_text_field($_POST['name'] ?? '');
    $email   = sanitize_email($_POST['email'] ?? '');
    $phone   = sanitize_text_field($_POST['phone'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    /*
    |--------------------------------------------------------------------------
    | Validação dos Campos
    |--------------------------------------------------------------------------
    */

    if (
        empty($name) ||
        empty($email) ||
        empty($message)
    ) {
        wp_safe_redirect(
            add_query_arg(
                'status',
                'invalid',
                home_url('/#contato')
            )
        );

        exit;
    }

    if (!is_email($email)) {
        wp_safe_redirect(
            add_query_arg(
                'status',
                'invalid_email',
                home_url('/#contato')
            )
        );

        exit;
    }

    /*
    |--------------------------------------------------------------------------
    | E-mail para a LogicBoard
    |--------------------------------------------------------------------------
    */

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
        'From: LogicBoard Specialists <' . logicboard_get_email() . '>',
        'Reply-To: ' . $name . ' <' . $email . '>',
    ];

    $sent = wp_mail(
        $to,
        $subject,
        $body,
        $headers
    );

    /*
    |--------------------------------------------------------------------------
    | E-mail de confirmação para o cliente
    |--------------------------------------------------------------------------
    */

    $client_subject = 'Recebemos sua solicitação de orçamento';

    $client_body = "

Olá {$name},

Recebemos sua solicitação de orçamento com sucesso.

Nossa equipe especializada analisará as informações e retornará o mais breve possível.

Caso prefira atendimento imediato, fale conosco pelo WhatsApp:

" . logicboard_get_phone() . "

Atenciosamente,

LogicBoard Specialists
https://logicboard.com.br

";

    $client_sent = wp_mail(
        $email,
        $client_subject,
        $client_body,
        [
            'Content-Type: text/plain; charset=UTF-8',
            'From: LogicBoard Specialists <' . logicboard_get_email() . '>',
            'Reply-To: ' . logicboard_get_email(),
        ]
    );

    /*
    |--------------------------------------------------------------------------
    | Redirecionamento
    |--------------------------------------------------------------------------
    */

    if ($sent && $client_sent) {

        wp_safe_redirect(
            add_query_arg(
                'status',
                'success',
                home_url('/#contato')
            )
        );

    } else {

        wp_safe_redirect(
            add_query_arg(
                'status',
                'error',
                home_url('/#contato')
            )
        );

    }

    exit;
}