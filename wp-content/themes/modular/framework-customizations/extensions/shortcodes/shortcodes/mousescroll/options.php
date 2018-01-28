<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'scroll-color'	 => array(
		'type'			 => 'switch',
		'value'			 => 'light',
		'label'			 => __( 'Scroll Color', 'modular' ),
		'desc'			 => __( 'Description', 'modular' ),
		'left-choice'	 => array(
			'value'	 => 'light',
			'label'	 => __( 'Light', 'modular' ),
		),
		'right-choice'	 => array(
			'value'	 => 'dark',
			'label'	 => __( 'Dark', 'modular' ),
		),
	),
	'position'		 => array(
		'type'	 => 'text',
		'value'	 => '-80px',
		'label'	 => __( 'Position', 'modular' ),
		'desc'	 => __( 'Add mouse scroll position in default section height', 'modular' ),
	),
);
