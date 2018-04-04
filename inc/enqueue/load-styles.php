<?php
/**
 * Load custom stylesheets
 *
 * @since 1.0
 */

function yadoapp_css() {

	wp_register_style( 'yadoapp-ui', get_template_directory_uri() . '/assets/css/front.css', false, '1.0.0' );
	wp_register_style( 'yui-coming-soon', get_template_directory_uri() . '/assets/css/coming-soon.css', false, '1.0.0' );
	
	if ( is_user_logged_in() ) {

		wp_enqueue_style( 'yadoapp-ui' );

	} else {
		
		wp_enqueue_style( 'yui-coming-soon' );

	}

}

add_action( 'wp_enqueue_scripts', 'yadoapp_css' ); ?>