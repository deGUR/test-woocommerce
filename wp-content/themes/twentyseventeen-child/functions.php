<?php

add_action( 'after_setup_theme', 'my_theme_add_woocommerce_support' );
function my_theme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

add_action('wp_enqueue_scripts', 'woo_scripts_and_style');
function woo_scripts_and_style() {
	wp_enqueue_style('woo_fotorama.css', get_stylesheet_directory_uri() . '/assets/css/fotorama.css');
	wp_enqueue_script('woo_fotorama.js', get_stylesheet_directory_uri() . '/assets/js/fotorama.js',
		array('jquery'), '', true);
	wp_enqueue_script('woo_main.js', get_stylesheet_directory_uri() . '/assets/js/main.js',
		array('jquery'), '', true);
}
