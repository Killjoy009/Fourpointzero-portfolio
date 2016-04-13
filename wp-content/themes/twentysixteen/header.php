<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header class="cd-header">
		<div class="cd-logo"><a href="#0"><img src="img/cd-logo.svg" alt="Logo"></a></div>

		<a class="cd-primary-nav-trigger" href="#0">
			<span class="cd-menu-icon"></span>
		</a> <!-- cd-primary-nav-trigger -->
	</header>

	<nav>
		<ul class="cd-primary-nav">

			<li><a href="#about">About Me</a></li>
			<li><a href="#works">Projects</a></li>
			<li><a href="#contact">Say Hi</a></li>

			<li class="cd-label">Follow Me</li>
			
			<li class="cd-social cd-facebook"><a href="#0">Facebook</a></li>
			<li class="cd-social cd-instagram"><a href="#0">Instagram</a></li>
			<li class="cd-social cd-dribbble"><a href="#0">Dribbble</a></li>
			<li class="cd-social cd-twitter"><a href="#0">Twitter</a></li>
		</ul>
	</nav>

		<div id="content" class="site-content">
