<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Homepage Form',
		'id'            => 'homepage_form',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>