<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( class_exists( 'RevSlider' ) ) {
	$revSlider = new RevSlider();

	$sliders = $revSlider->getArrSliders( false );
	$choices = array();

	if ( !empty( $sliders ) ) {
		foreach ( $sliders as $slider ) {
			$choices[ $slider->getShortcode() ] = $slider->getTitle();
		}
	}

	$options = array(
		'slider' => array(
			'type'		 => 'select',
			'value'		 => '',
			'label'		 => __( 'Select Slider', 'bizcraft' ),
			'desc'		 => __( 'Select Revolution Slider from the list', 'bizcraft' ),
			'choices'	 => $choices
		),
		'info'	 => array(
			'type'	 => 'html',
			'label'	 => __( ' ', 'bizcraft' ),
			'html'	 => 'Go to <a target="_blank" href="' . admin_url( 'admin.php?page=revslider' ) . '"> Slider Revolution</a> menu to change slider and settings',
		),
	);
}