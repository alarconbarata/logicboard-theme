<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="contact reveal" id="contato">

    <div class="lb-container">

        <div class="section-title">

            <span>Contato</span>

            <h2>Solicite seu orçamento</h2>

            <p>
                Entre em contato conosco pelo WhatsApp, e-mail ou visite nosso laboratório em Alphaville.
            </p>

        </div>

        <div class="contact-grid">

            <div class="contact-info">

                <div class="contact-card">

                    <h3>WhatsApp</h3>

                    <p><?php echo esc_html( logicboard_get_phone() ); ?></p>

                </div>

                <div class="contact-card">

                    <h3>E-mail</h3>

                    <p><?php echo esc_html( logicboard_get_email() ); ?></p>

                </div>
                

                <div class="contact-card">

                    <h3>Endereço</h3>

                    <p><?php echo wp_kses_post( logicboard_get_full_address() ); ?></p>

                </div>

                <div class="contact-card">

                    <h3>Atendimento</h3>

                    <p><?php echo esc_html( logicboard_get_hours() ); ?></p>

                </div>

            </div>

            <div class="contact-form">

                <form
    method="post"
    action="<?php echo esc_url(admin_url('admin-post.php')); ?>">

    <?php wp_nonce_field('logicboard_contact', 'logicboard_nonce'); ?>

    <input
        type="hidden"
        name="action"
        value="logicboard_contact">

    <input
        type="text"
        name="name"
        placeholder="Nome"
        required>

    <input
        type="email"
        name="email"
        placeholder="E-mail"
        required>

    <input
        type="text"
        name="phone"
        placeholder="Telefone"
        required>

    <textarea
        name="message"
        rows="6"
        placeholder="Descreva o problema do seu MacBook"
        required></textarea>

    <button
        class="btn btn-primary"
        type="submit">

        Solicitar orçamento

    </button>

</form>

            </div>

                </div><!-- fecha contact-grid -->

        <div class="contact-map-card">

            <h3>📍 Visite nosso laboratório</h3>

            <p>
                Estamos localizados em Alphaville, em uma estrutura preparada para
                diagnósticos avançados e reparos especializados em placas lógicas Apple.
            </p>

            <div class="contact-map">

                <iframe
                    src="https://www.google.com/maps?q=Alameda+Madeira+258+Barueri&output=embed"
                    loading="lazy"
                    allowfullscreen>
                </iframe>

            </div>

            <div class="contact-address">

                <strong>LogicBoard Specialists</strong><br>

                <?php echo wp_kses_post( logicboard_get_full_address() ); ?>

            </div>

            <a
                class="btn btn-primary"
                href="<?php echo esc_url( logicboard_get_maps() ); ?>"
                target="_blank"
                rel="noopener">

                Abrir no Google Maps

            </a>

        </div>

    </div><!-- fecha lb-container -->

</section>