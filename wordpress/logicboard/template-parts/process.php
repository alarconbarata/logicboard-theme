<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="process reveal" id="processo">

    <div class="lb-container">

        <div class="section-title">

            <span>
                <?php echo esc_html(logicboard_get_process_badge()); ?>
            </span>

            <h2>
                <?php echo esc_html(logicboard_get_process_title()); ?>
            </h2>

            <p>
                <?php echo esc_html(logicboard_get_process_subtitle()); ?>
            </p>

        </div>

        <div class="process-grid">

            <?php for ($i = 1; $i <= 4; $i++) :

                $step = logicboard_get_process_step($i);

            ?>

                <div class="process-item">

                    <div class="process-circle">
                        <?php echo esc_html($step['number']); ?>
                    </div>

                    <h3>
                        <?php echo esc_html($step['title']); ?>
                    </h3>

                    <p>
                        <?php echo esc_html($step['description']); ?>
                    </p>

                </div>

            <?php endfor; ?>

        </div>

    </div>

</section>