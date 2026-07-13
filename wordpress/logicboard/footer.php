<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<footer class="lb-footer" id="contato">

    <div class="lb-container">

        <div class="footer-grid">

            <div>

                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.png'); ?>"
                    class="footer-logo"
                    alt="LogicBoard">

                <p>
                    <?php echo esc_html(logicboard_get_footer_text()); ?>
                </p>

            </div>

            <div>

                <h3>Contato</h3>

                <p>
                    <?php echo esc_html(logicboard_get_phone()); ?>
                </p>

                <p>
                    <?php echo esc_html(logicboard_get_email()); ?>
                </p>

                <p>
                    <?php echo wp_kses_post(logicboard_get_full_address()); ?>
                </p>

                <p>
                    <?php echo nl2br(esc_html(logicboard_get_hours())); ?>
                </p>

            </div>

            <div>

                <h3>Garantia</h3>

                <p>
                    <?php echo esc_html(logicboard_get_footer_warranty()); ?>
                </p>

            </div>

        </div>

        <hr>

        <p class="copyright">

            © <?php echo esc_html(date('Y')); ?>

            <?php echo esc_html(logicboard_get_footer_copyright()); ?>

        </p>

    </div>

    <?php wp_footer(); ?>

</footer>

</body>
</html>