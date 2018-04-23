<?php
/**
 *
 * Load scripts
 *
 * @since 1.0
 *
 */

function yadoapp_scripts() {
    wp_enqueue_script( 'select2', get_template_directory_uri() . '/assets/js/library/select2.full.min.js', array ( 'jquery' ), '4.0.3', true);
	wp_enqueue_script( 'yadoapp-js', get_template_directory_uri() . '/assets/js/yadoapp-js.min.js', array ( 'jquery' ), '1.0.0', true);
}

if ( is_user_logged_in() ) {

	add_action( 'wp_enqueue_scripts', 'yadoapp_scripts' );

} ?>