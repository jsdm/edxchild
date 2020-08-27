<?php
/**
 * EdxChildTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage EdxChildTheme
 * @since Twenty Twenty 1.0
 */

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
/**
 * Enqueue Parent and Child stylesheets
 */
function my_theme_enqueue_styles() {
	$parenthandle = 'twentytwenty-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
	$theme        = wp_get_theme();
	wp_enqueue_style(
		$parenthandle,
		get_template_directory_uri() . '/style.css',
		array(),  // if the parent theme code has a dependency, copy it to here.
		$theme->parent()->get( 'Version' )
	);
	wp_enqueue_style(
		'edxchildtheme-style',
		get_stylesheet_uri() . '',
		array( $parenthandle ),
		$theme->get( 'Version' ) // this only works if you have Version in the style header.
	);
	// Serif font.
	wp_enqueue_style(
		'https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Lora:ital,wght@0,400;0,700;1,400',
		array(),
		'20200508',
		'all'
	);
	// Font Awesome.
// 	wp_enqueue_style(
// 		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css',
// 		array(),
// 		'20200509',
// 		'all'
// 	);
}
// https://kit.fontawesome.com/0782be83f8.js