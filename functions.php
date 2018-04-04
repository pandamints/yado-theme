<?php
/**
 *
 * YADO Theme functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * @package yadoapp
 * @subpackage yadoapp
 * @since yadoapp 1.0
 * @version 1.0
 *
 */
function yadoapp_setup() {

    // Make theme available for translation
    load_theme_textdomain( 'yadoapp' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support( 'post-thumbnails' );

    // Enable wp_nav_menu()
    register_nav_menus( array(
        'main'	=> __( 'Menú Principal', 'yadoapp' ),
		'alt'	=> __( 'Menú Secundario', 'yadoapp' ),
		'foot'	=> __( 'Menú Final', 'yadoapp' )
    ) );

}

add_action( 'after_setup_theme', 'yadoapp_setup' );

