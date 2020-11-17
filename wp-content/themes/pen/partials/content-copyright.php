<?php
/**
 * Template part for displaying the copyright notice.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pen
 */

ob_start();

if ( current_user_can( 'manage_options' ) ) {
	?>
<div class="pen_warning_upgrade">
	<?php
	printf(
		'<p>%1$s<br><strong>%2$s</strong></p>',
		esc_html__( 'We are going to remove the following template very soon; if you need help please contact support.', 'pen' ),
		esc_html( 'pen/partials/content-copyright.php' )
	);
	?>
</div>
	<?php
}

if ( pen_option_get( 'footer_copyright_display' ) ) {
	?>
	<div class="site-info">
	<?php
	$copyright = pen_option_get( 'footer_copyright_text' );

	/* Translators: Please refer to the PHP documentation for the date() function. */
	$copyright = str_ireplace( '%YEAR%', date_i18n( esc_html__( 'Y', 'pen' ) ), $copyright );
	$copyright = str_ireplace( '%SITE_NAME%', get_bloginfo( 'name' ), $copyright );
	$url_home  = home_url( '/' );
	$copyright = str_ireplace( '%SITE_URL%', $url_home, $copyright );

	if ( $copyright ) {
		echo wp_kses_post( $copyright );
	} else {
		printf(
			'&copy; %1$s. %2$s',
			esc_html( get_bloginfo( 'name' ) ),
			esc_html__( 'All rights reserved.', 'pen' )
		);
	}
	?>
	</div><!-- .site-info -->
	<?php
}
echo trim( ob_get_clean() ); /* phpcs:ignore */
