<?php
/**
 * Adaline Logo Letter functions
 *
 * @package Adaline Logo Letter
 */

/**
 * Enqueue styles.
 */
function adaline_logo_letter_enqueue_styles() {

	// Load the parent theme stylesheet
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

} // end function adaline_logo_letter_enqueue_styles
add_action( 'wp_enqueue_scripts', 'adaline_logo_letter_enqueue_styles' );

/**
 * Remove unneeded Jetpack Logo related functions.
 * Hook into after_theme_setup with priority of 11
 * to override parent theme functions.
 *
 * @link https://codex.wordpress.org/Function_Reference/remove_theme_support
 *
 */
function adaline_logo_letter_setup() {

	// This will remove the image size used exclusively with Jetpack Site Logo
	remove_image_size( 'adaline-logo' );

	// This will remove theme support for Jetpack Site Logo
	remove_theme_support( 'site-logo' );

} // end function adaline_logo_letter_setup
add_action( 'after_setup_theme', 'adaline_logo_letter_setup', 11 );
