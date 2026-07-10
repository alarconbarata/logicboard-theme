<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="hero reveal">

    <div class="hero-overlay"></div>

    <div class="lb-container hero-grid">

        <div class="hero-content">

            <span class="hero-badge">
    Especialistas em Logic Board Apple
</span>

<h1>
    <?php echo esc_html( logicboard_get_hero_title() ); ?>
</h1>

<p>

    <?php echo esc_html( logicboard_get_hero_subtitle() ); ?>

</p>

            <div class="hero-buttons">

                <a
                    class="btn btn-primary"
                    href="https://wa.me/5511970827003"
                    target="_blank">

                    Solicitar orçamento

                </a>

                <a
                    class="btn btn-outline"
                    href="#servicos">

                    Conhecer serviços

                </a>

            </div>

            <div class="hero-features">

                <div class="feature">

                    <strong>✓</strong>

                    Garantia de 6 meses

                </div>

                <div class="feature">

                    <strong>✓</strong>

                    Diagnóstico eletrônico

                </div>

                <div class="feature">

                    <strong>✓</strong>

                    Microsolda profissional

                </div>

                <div class="feature">

                    <strong>✓</strong>

                    Atendimento especializado

                </div>

            </div>

        </div>

        <div class="hero-media">

            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-board.webp"
                alt="Laboratório LogicBoard">

            <div class="floating-card">

                <h3>Serviços especializados</h3>

                <ul>

                    <li>Microsolda em Logic Board</li>

                    <li>Recuperação por oxidação</li>

                    <li>Reparo Apple Silicon</li>

                    <li>Reparo Chip T2</li>

                    <li>Upgrade SSD</li>

                    <li>Diagnóstico avançado</li>

                </ul>

            </div>

        </div>

    </div>

</section>