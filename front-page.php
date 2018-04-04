<?php get_header();

if ( is_user_logged_in() ) {

	get_header();

	/* Silence is golden */

} else {

	get_header( "clean" );

	/**
	 * 
	 * Coming Soon
	 * 
	 * Display "coming soon" page for non-logged-in users
	 * to create expectation before launch.
	 * 
	 * Allow users to subscribe YADO newsletter.
	 * 
	 */

}

get_footer(); ?>