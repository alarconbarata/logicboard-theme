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
    <?php echo esc_html( logicboard_get_hero_badge() ); ?>
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
    href="<?php echo esc_url( logicboard_get_hero_button_1_url() ); ?>"
    target="_blank"
    rel="noopener">

    <?php echo esc_html( logicboard_get_hero_button_1_text() ); ?>

</a>

                <a
    class="btn btn-outline"
    href="<?php echo esc_url( logicboard_get_hero_button_2_url() ); ?>">

    <?php echo esc_html( logicboard_get_hero_button_2_text() ); ?>

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
    src="<?php echo esc_url( logicboard_get_hero_image() ); ?>"
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