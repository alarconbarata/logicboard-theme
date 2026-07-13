<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="cta reveal">

    <div class="lb-container">

        <div class="cta-box">

            <span class="cta-badge">
                <?php echo esc_html(logicboard_get_cta_badge()); ?>
            </span>

            <h2>
                <?php echo esc_html(logicboard_get_cta_title()); ?>
            </h2>

            <p>
                <?php echo esc_html(logicboard_get_cta_text()); ?>
            </p>

            <div class="cta-buttons">

                <a
                    href="<?php echo esc_url(logicboard_get_cta_button_1_url()); ?>"
                    target="_blank"
                    class="btn btn-primary">

                    <?php echo esc_html(logicboard_get_cta_button_1_text()); ?>

                </a>

                <a
                    href="<?php echo esc_url(logicboard_get_cta_button_2_url()); ?>"
                    class="btn btn-outline">

                    <?php echo esc_html(logicboard_get_cta_button_2_text()); ?>

                </a>

            </div>

        </div>

    </div>

</section>