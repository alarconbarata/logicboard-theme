<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="laboratory reveal" id="laboratorio">

    <div class="lb-container">

        <div class="section-title">

            <span>
                <?php echo esc_html(logicboard_get_laboratory_badge()); ?>
            </span>

            <h2>
                <?php echo esc_html(logicboard_get_laboratory_title()); ?>
            </h2>

            <p>
                <?php echo esc_html(logicboard_get_laboratory_subtitle()); ?>
            </p>

        </div>

        <div class="lab-grid">

            <?php for ($i = 1; $i <= 4; $i++) : ?>

                <figure class="lab-item">

                    <img
                        src="<?php echo esc_url(logicboard_get_laboratory_image($i)); ?>"
                        alt="<?php echo esc_attr('Imagem do laboratório ' . $i); ?>">

                </figure>

            <?php endfor; ?>

        </div>

    </div>

</section>