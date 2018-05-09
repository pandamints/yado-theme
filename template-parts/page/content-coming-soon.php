<div class="yui-content">

	<h1 class="yui-title"><?php esc_html_e( 'Una nueva forma de mirar el mundo. Una nueva manera de descubrir tu ciudad.', 'yadoapp' ); ?></h1>

	<h2 class="yui-subtitle"><?php esc_html_e( '¿Quieres saber más? Suscríbete ahora y sé el primero en enterarte de nuestro lanzamiento.', 'yadoapp' ); ?></h2>

	<?php if ( is_plugin_active( 'hustle/opt-in.php' ) ) { ?>

		<?php echo do_shortcode( '[wd_hustle id="coming-soon" type="embedded"]' ); ?>

		<p><?php esc_html_e( 'En YADO creemos en la privacidad de nuestros usuarios y la respetamos, por esta razón tus datos serán utilizados únicamente con fines informativos sobre nuestra aplicación. No venderemos ni redistribuiremos tu información a terceros.', 'yadoapp' ); ?></p>

	<?php } ?>

	<img src="<?php echo bloginfo( 'template_url' ) . '/assets/img/logo.png'; // WPCS: XSS ok. ?>"
		srcset="<?php echo bloginfo( 'template_url' ) . '/assets/img/logo.png'; // WPCS: XSS ok. ?> 1x, <?php echo bloginfo( 'template_url' ) . '/assets/img/logo@2x.png'; // WPCS: XSS ok. ?> 2x" alt="<?php esc_html_e( 'Y Ahora Dónde?', 'yadoapp' ); ?>"
		class="yui-image" />

</div>
