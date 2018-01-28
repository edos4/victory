<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'xs_id'			 => array(
		'type'	 => 'unique',
		'length' => 8
	),
	'text'			 => array(
		'label'	 => esc_html__( 'Quotation', 'modular' ),
		'desc'	 => esc_html__( 'Add your main quotation text', 'modular' ),
		'value'	 => esc_html__( 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.', 'modular' ),
		'type'	 => 'textarea',
	),
	'bg_color'		 => array(
		'type'	 => 'color-picker',
		'value'	 => '#008ec2',
		'label'	 => __( 'Background color', 'modular' ),
		'desc'	 => __( 'Add quote background color', 'modular' ),
	),
	'author_group'	 => array(
		'type'		 => 'group',
		'attr'		 => array( 'class' => 'xs-group' ),
		'options'	 => array(
			'html_label'	 => array(
				'type'	 => 'html',
				'value'	 => '',
				'label'	 => __( 'Position', 'modular' ),
				'html'	 => '',
			),
			'author'		 => array(
				'label'	 => false,
				'desc'	 => esc_html__( 'Author name', 'modular' ),
				'type'	 => 'text',
				'value'	 => esc_html__( 'Jhon Doe', 'modular' )
			),
			'author_color'	 => array(
				'type'	 => 'color-picker',
				'value'	 => '#111111',
				'label'	 => false,
				'desc'	 => __( 'Color', 'modular' ),
			),
		)
	),
	'position_group' => array(
		'type'		 => 'group',
		'attr'		 => array( 'class' => 'xs-group' ),
		'options'	 => array(
			'html_label'	 => array(
				'type'	 => 'html',
				'value'	 => '',
				'label'	 => __( 'Position', 'modular' ),
				'html'	 => '',
			),
			'position'		 => array(
				'label'	 => false,
				'desc'	 => esc_html__( 'Position', 'modular' ),
				'type'	 => 'text',
				'value'	 => esc_html__( 'Design Head @Nothing.com', 'modular' )
			),
			'position_color'	 => array(
				'type'	 => 'color-picker',
				'value'	 => '#777777',
				'label'	 => false,
				'desc'	 => __( 'Color', 'modular' ),
			),
		)
	)
);
