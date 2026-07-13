<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="differentials reveal">

    <div class="lb-container">

        <div class="section-title">

            <span>
                <?php echo esc_html(logicboard_get_differentials_badge()); ?>
            </span>

            <h2>
                <?php echo esc_html(logicboard_get_differentials_title()); ?>
            </h2>

            <p>
                <?php echo esc_html(logicboard_get_differentials_subtitle()); ?>
            </p>

        </div>

        <div class="differentials-grid">

            <?php for ($i = 1; $i <= 4; $i++) :

                $item = logicboard_get_differential($i);

            ?>

                <article class="diff-card">

                    <div class="diff-number">
                        <?php echo esc_html($item['number']); ?>
                    </div>

                    <h3>
                        <?php echo esc_html($item['title']); ?>
                    </h3>

                    <p>
                        <?php echo esc_html($item['description']); ?>
                    </p>

                </article>

            <?php endfor; ?>

        </div>

    </div>

</section>