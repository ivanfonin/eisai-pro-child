<?php
/**
 * Eisai Pro child theme functions and definitions.
 */

/**
 * Enqueue theme scripts and styles.
 */
function eisai_pro_child_scripts_and_styles() {
    $parent_style = 'eisai-pro-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'eisai_pro_child_scripts_and_styles' );
