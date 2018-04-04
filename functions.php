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

/**
 *
 * Filter the page title
 *
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @since yadoapp 1.0
 * @version 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 *
 */
function yadoapp_wp_title( $title, $sep ) {
    
    global $paged, $page;
    
    if ( is_feed() )
        return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'yadoapp' ), max( $paged, $page ) );

    return $title;
    
}

add_filter( 'wp_title', 'yadoapp_wp_title', 10, 2 );