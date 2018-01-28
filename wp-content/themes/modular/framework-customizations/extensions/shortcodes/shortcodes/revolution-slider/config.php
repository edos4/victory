<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


if ( ! function_exists( 'set_revslider_as_theme' ) ) {
	return;
}

$cfg = array(
	'page_builder' => array(
		'title'       => __( 'Revolution Slider', 'bizcraft' ),
		'description' => __( 'Revolution Slider Shortcode', 'bizcraft' ),
		'tab'         => __( 'Media Elements', 'bizcraft' ),
		'popup_size'  => 'small',
	)
);