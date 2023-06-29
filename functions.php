<?php
// Require the patterns.php file
    require get_template_directory() . '/inc/patterns.php';

/**
* Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FSE
 * @since 1.0.0
 */
    
/**
 * Enqueue the style.css file.
 * 
 * @since 1.0.0
 */
    function fse_styles() {
        wp_enqueue_style(
            'fse-style',
            get_stylesheet_uri(),
            array(),
            wp_get_theme()->get( 'Version' )
        );
    }
    add_action( 'wp_enqueue_scripts', 'fse_styles' );