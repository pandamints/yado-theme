<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section and everything up
 *
 * @package YADO Theme
 * @since 1.0
 * @version 1.0
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php wp_head(); ?>

	</head>

	<body class="yui">

		<?php
		if ( is_page_template( 'page-thanks.php' ) ) {
			$thanks_background = 'yui-soon-' . rand( 1, 3 );

			if ( 'yui-soon-1' === $thanks_background ) {
				$image = 'fireworks';
			}

			if ( 'yui-soon-2' === $thanks_background ) {
				$image = 'happy';
			}

			if ( 'yui-soon-3' === $thanks_background ) {
				$image = 'thanks';
			}
		} else {
			$soon_background = 'yui-soon-' . rand( 1, 4 );

			if ( 'yui-soon-1' === $soon_background ) {
				$image = 'explora';
			}

			if ( 'yui-soon-2' === $soon_background ) {
				$image = 'coffee-break';
			}

			if ( 'yui-soon-3' === $soon_background ) {
				$image = 'live';
			}

			if ( 'yui-soon-4' === $soon_background ) {
				$image = 'descubre';
			}
		}
		?>

		<div class="yui-wrap" style="background-image: url( '<?php echo esc_url( bloginfo( 'template_url' ) . '/assets/img/coming-soon/yado-' . $image . '.jpg' ); ?>' );">
