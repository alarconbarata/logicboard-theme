<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="services reveal" id="servicos">

    <div class="lb-container">

        <div class="section-title">

    <span>
        <?php echo esc_html( logicboard_get_services_badge() ); ?>
    </span>

    <h2>
        <?php echo esc_html( logicboard_get_services_title() ); ?>
    </h2>

    <p>
        <?php echo esc_html( logicboard_get_services_subtitle() ); ?>
    </p>

</div>
        
        <div class="services-grid">

<?php for ($i = 1; $i <= 6; $i++) :

    $service = logicboard_get_service($i);

?>

    <article class="service-card">

        <div class="service-icon">
            <?php echo esc_html($service['icon']); ?>
        </div>

        <h3>
            <?php echo esc_html($service['title']); ?>
        </h3>

        <p>
            <?php echo esc_html($service['description']); ?>
        </p>

    </article>

<?php endfor; ?>

</div>

    </div>

</section>