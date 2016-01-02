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
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'adaline_logo_letter_enqueue_styles' );
