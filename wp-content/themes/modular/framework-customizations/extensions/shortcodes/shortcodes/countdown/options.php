<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options			 = array(
	'event'	 => array(
		'type'		 => 'date-picker',
		'label'		 => esc_html__( 'Conference Countdown', 'modular' ),
		'desc'		 => esc_html__( 'Add conference date from here', 'modular' ),
		'min-date'	 => null
	),
	'class'	 => array(
		'label'	 => __( 'Custom Class', 'modular' ),
		'desc'	 => __( 'Enter custom CSS class', 'modular' ),
		'type'	 => 'text',
		'value'	 => '',
		'help'	 => __( 'You can use this class to further style this shortcode', 'modular' ),
	),
);
