<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title>Traça</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">

	<meta property="og:description" content='' />
	<meta property="og:image" content="" />

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<div class="traca-nav">
	<div class="traca-nav-bar">
			<a href="/">
				<img class="icon-title" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.svg">
			</a>
	</div>
</div>
<img class="traca-nav-open icon-menu" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/simbolo.svg">
<nav class="traca-nav-menu">
	<a href="/">
		<img class="icon-menu" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/simbolo_w.svg">
	</a>
	<span class="traca-nav-menu-close">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/close.png">
	</span>
	<a class="general-home-anchor" href="/#sobre"><h3>Sobre</h3></a>
	<a class="home-anchor slide-anchor" href="#sobre"><h3>Sobre</h3></a>
	<a href="/equipa"><h3>Equipa</h3></a>
	<a href="/projectos"><h3>Projectos</h3></a>
	<div class="submenu">
		<a class="general-anchor" href="/projectos/#arquitectura"><p>Arquitectura</p></a>
		<a class="slide-anchor project-anchor" href="#arquitectura"><p>Arquitectura</p></a>
		<a class="general-anchor" href="/projectos/#arte"><p>Arte</p></a>
		<a class="slide-anchor project-anchor" href="#arte"><p>Arte</p></a>
		<a class="general-anchor" href="/projectos/#design"><p>Design</p></a>
		<a class="slide-anchor project-anchor" href="#design"><p>Design</p></a>
		<a class="general-anchor" href="/projectos/#publicacoes"><p>Publicações</p></a>
		<a class="slide-anchor project-anchor" href="#publicacoes"><p>Publicações</p></a>
	</div>
	<div class="contactos">
		<p>
		Calçada do Tijolo 23<br>
		1200-464 Lisboa,<br>
		Portugal<br><br>
		info@t-arq.com<br>
		(+351) 919 917 787<br>
		(+351) 963 188 37<br><br>
		<a href="https://www.facebook.com/tracaarquitectos/" target="_blank">Facebook</a><br>
		<a href="https://www.instagram.com/tracaarquitectos/" target="_blank">Instagram</a><br>
		</p>
	</div>
</nav>



<body <?php body_class(); ?>>

