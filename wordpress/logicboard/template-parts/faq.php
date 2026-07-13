<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="faq reveal">

    <div class="lb-container">

        <div class="section-title">

            <span>
                <?php echo esc_html(logicboard_get_faq_badge()); ?>
            </span>

            <h2>
                <?php echo esc_html(logicboard_get_faq_title()); ?>
            </h2>

            <p>
                <?php echo esc_html(logicboard_get_faq_subtitle()); ?>
            </p>

        </div>

        <div class="faq-list">

            <?php for ($i = 1; $i <= 6; $i++) :

                $faq = logicboard_get_faq($i);

                // Não exibe perguntas vazias
                if (empty(trim($faq['question']))) {
                    continue;
                }

            ?>

                <div class="faq-item <?php echo ($i === 1) ? 'active' : ''; ?>">

                    <button class="faq-question">

                        <?php echo esc_html($faq['question']); ?>

                        <span>+</span>

                    </button>

                    <div class="faq-answer">

                        <p>
                            <?php echo esc_html($faq['answer']); ?>
                        </p>

                    </div>

                </div>

            <?php endfor; ?>

        </div>

    </div>

</section>