<?php
require_once( get_stylesheet_directory() . '/header.php');
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Tesseract
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->

</head>

<?php // Additional body classes
$bodyClass = ( version_compare($wp_version, '4.0.0', '>') && is_customize_preview() ) ? 'backend' : 'frontend';

$slayout = get_theme_mod('tesseract_search_results_layout');

$bplayout = get_theme_mod('tesseract_blog_post_layout');
 
if ( (is_page()) && (has_post_thumbnail()) ) $bodyClass .= ' tesseract-featured';

if ( is_plugin_active('beaver-builder-lite-version/fl-builder.php') || is_plugin_active('beaver-builder/fl-builder.php') ) $bodyClass .= ' beaver-on';

$opValue = get_theme_mod('tesseract_header_colors_bck_color_opacity');

$header_bckOpacity = is_numeric($opValue) ? TRUE : FALSE;

if ( is_front_page() && ( $header_bckOpacity && ( intval($opValue) < 100 ) ) ) $bodyClass .= ' transparent-header';

if ( is_search() ) {
	if ( $slayout == 'fullwidth' ) $bodyClass .= ' fullwidth';
	if ( $slayout == 'sidebar-right' ) $bodyClass .= ' sidebar-right';
}elseif( is_single() ) {
	if ( $bplayout == 'fullwidth' ) $bodyClass .= ' fullwidth';
	if ( $bplayout == 'sidebar-right' ) $bodyClass .= ' sidebar-right';
}
 
?>

<body <?php body_class( $bodyClass ); ?>>
<?php $headright_content = get_theme_mod('tesseract_header_right_content');
$wooheader = ( get_theme_mod('tesseract_woocommerce_headercart') == 1 ) ? true : false;
$rightclass = '';
if ( ( $headright_content  ) && ( $headright_content !== 'nothing' ) ) {
	$rightclass = $wooheader ? $headright_content . ' is-right is-woo ' : $headright_content . ' is-right no-woo ';
} else if ( ( $headright_content == 'nothing' ) && $wooheader ) {
	$rightclass = $wooheader ? $headright_content . ' no-right is-woo ' : $headright_content . ' no-right no-woo ';
}


$headpos = ( is_front_page() && ( $header_bckOpacity && ( intval($opValue) < 100 ) ) ) ? 'pos-absolute' : 'pos-relative';
?>

<div id="page" class="hfeed site">

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'tesseract' ); ?></a>

	<?php $logoImg = get_theme_mod('tesseract_header_logo_image');
    $blogname = get_bloginfo('blogname');
    $hmenusize = get_theme_mod('tesseract_header_width');

	$mmdisplay = get_theme_mod( 'tesseract_mobmenu_opener' );
	$mmdClass = ( $mmdisplay == 1 ) ? 'showit' : 'hideit';

    $hmenusize_class = ( $hmenusize == 'fullwidth' ) ? 'fullwidth' : 'autowidth';

    if ( !$logoImg && $blogname ) $brand_content = 'blogname';
    if ( $logoImg ) $brand_content = 'logo';
    if ( !$logoImg && !$blogname ) $brand_content = 'no-brand';

    ?>

    	<header class="cd-header">
		<div class="cd-logo"><a href="#0"><img src="http://localhost/my-website/wp-content/uploads/2016/04/fpz-logo.png" alt="Logo"></a></div>

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
			
			<li class="cd-social cd-facebook"><a href="https://www.facebook.com/profile.php?id=100007396964970">Facebook</a></li>
			<li class="cd-social cd-google"><a href="#0">Google</a></li>
			<li class="cd-social cd-github"><a href="https://github.com/frejemaes">Github</a></li>
		</ul>
	</nav>


    <div id="content" class="cf site-content">