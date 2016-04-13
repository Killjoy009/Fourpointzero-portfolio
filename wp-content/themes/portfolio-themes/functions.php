<?php
	
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
	function theme_enqueue_styles() {
	    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

	}
	//Custom CSS
	add_action( 'wp_enqueue_scripts', 'child_styles', 20 );
	function child_styles() {
	    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/css/custom-style.css', array());
	    wp_enqueue_style('animate-css', get_stylesheet_directory_uri() . '/css/animate.css', array());
	    wp_enqueue_style('ie-css', get_stylesheet_directory_uri() . '/css/ie.css', array());
	}

	//Custom JS

	add_action('wp_enqueue_scripts', 'theme_js');
	function theme_js() {
    wp_enqueue_script( 'theme_js', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'respond', get_stylesheet_directory_uri() . '/js/vendor/respond.min.js', array( 'jquery' ), '1.0', true );
	}
	function tesseract_footer_brand() {
	do_action( 'tesseract_footer_brand' );
	}

function tesseract_footer_brand_output() {
	echo '<div id="footer-banner-right" class="designer"><div class="table"><div class="table-cell">';
    printf( __( 'Design & Develop by %s', 'tesseract' ), '<a href="http://robertdesign.x10.bz">Robert Cruda</a>' );
	echo '</div></div></div>';
}

add_action('tesseract_footer_brand','tesseract_footer_brand_output', 10);
?>