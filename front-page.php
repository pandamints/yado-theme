<?php
if ( is_user_logged_in() ) {

	get_header();

	/* Silence is golden */

	get_footer();

} else {

	get_header( 'clean' );

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
	
	get_template_part( 'template-parts/page/content', 'coming-soon' );

	get_footer( 'clean' );

} ?>