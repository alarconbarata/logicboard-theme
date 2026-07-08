<?php
/**
 * Header do Tema LogicBoard
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="lb-header">

	<div class="lb-container">

		<div class="lb-logo">

			<a href="<?php echo esc_url( home_url('/') ); ?>">

				<img
					src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.png"
					alt="<?php bloginfo('name'); ?>">

			</a>

		</div>

		<nav class="lb-menu">

			<ul>

				<li><a href="#servicos">Serviços</a></li>

				<li><a href="#processo">Processo</a></li>

				<li><a href="#laboratorio">Laboratório</a></li>

				<li><a href="#contato">Contato</a></li>

			</ul>

		</nav>

		<div class="lb-actions">

			<a
				class="btn-whatsapp"
				href="https://wa.me/5511970827003"
				target="_blank"
				rel="noopener">

				Solicitar orçamento

			</a>

			<button
				class="menu-toggle"
				aria-label="Abrir Menu">

				<span></span>
				<span></span>
				<span></span>

			</button>

		</div>

	</div>

</header>