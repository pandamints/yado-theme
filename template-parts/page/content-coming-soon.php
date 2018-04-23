<div class="yui-content">

	<h1><?php esc_html_e( 'Prepárate para descubrir tu ciudad de una manera diferente y divertida', 'yadoapp' ); ?></h1>

	<h2><?php esc_html_e( 'Suscríbete y sé el primero en enterarte de nuestro lanzamiento.', 'yadoapp' ); ?></h2>

	<?php if ( is_plugin_active( 'hustle/opt-in.php' ) ) { ?>

		<p><?php echo do_shortcode( '[wd_hustle id="coming-soon" type="embedded"]' ); ?></p>

		<p><?php esc_html_e( 'Creemos en la privacidad, por eso tus datos serán utilizados solo para fines informativos de YADO y algún correo ocasional. No la venderemos ni la redistribuiremos bajo ningún costo ni ningún tipo de cláusula ooculta.', 'yadoapp' ); ?></p>

	<?php } ?>

	<img src="<?php echo bloginfo( 'template_url' ) . '/assets/img/logo.png'; // WPCS: XSS ok. ?>"
		srcset="<?php echo bloginfo( 'template_url' ) . '/assets/img/logo.png'; // WPCS: XSS ok. ?> 1x, <?php echo bloginfo( 'template_url' ) . '/assets/img/logo@2x.png'; // WPCS: XSS ok. ?> 2x" alt="<?php esc_html_e( 'Y Ahora Dónde?', 'yadoapp' ); ?>"
		class="yui-image" />

</div>
