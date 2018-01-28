<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$global_font = fw_get_db_settings_option( 'body_font' );


$options = array(
	'genarel-options'		 => array(
		'title'		 => __( 'General', 'modular' ),
		'type'		 => 'tab',
		'options'	 => array(
			'xs_id'	 => array(
				'type'	 => 'unique',
				'length' => 8
			),
			'text'	 => array(
				'type'	 => 'wp-editor',
//				'wpautop' => false,
				'label'	 => __( 'Content', 'modular' ),
				'desc'	 => __( 'Enter some content for this texblock', 'modular' ),
				'attr'	 => array( 'class' => 'xs-wp-editor' ),
			),
		),
	),
	'style-options'			 => array(
		'title'		 => __( 'Styles', 'modular' ),
		'type'		 => 'tab',
		'options'	 => array(
			'body_font' => array(
				'type'		 => 'typography-v2',
				'value'		 => array(
					'family'		 => $global_font[ 'family' ],
					'style'			 => $global_font[ 'style' ],
					'weight'		 => $global_font[ 'weight' ],
					'variation'		 => $global_font[ 'variation' ],
					'subset'		 => $global_font[ 'subset' ],
					'size'			 => $global_font[ 'size' ],
					'line-height'	 => $global_font[ 'line-height' ],
					'letter-spacing' => $global_font[ 'letter-spacing' ],
					'color'			 => $global_font[ 'color' ]
				),
				'components' => array(
					'family'		 => true,
					'style'			 => true,
					'weight'		 => true,
					'size'			 => true,
					'line-height'	 => true,
					'letter-spacing' => true,
					'color'			 => true
				),
				'label'		 => __( 'Body Font', 'modular' ),
				'desc'		 => __( 'You can change the font style from here', 'modular' ),
			),
		),
	),
	'xs_responsive_options'	 => array(
		'title'		 => __( 'Responsive', 'modular' ),
		'type'		 => 'tab',
		'options'	 => array(
			'display_desktop'	 => array(
				'type'			 => 'switch',
				'value'			 => 'yes',
				'label'			 => __( 'Desktop', 'modular' ),
				'desc'			 => __( 'Display this on desktop?', 'modular' ),
				'help'			 => __( 'Applies to devices with the resolution higher then 1200px (desktops and laptops)', 'modular' ),
				'left-choice'	 => array(
					'value'	 => 'no',
					'label'	 => __( 'No', 'modular' ),
				),
				'right-choice'	 => array(
					'value'	 => 'yes',
					'label'	 => __( 'Yes', 'modular' ),
				)
			),
			'display_medium'	 => array(
				'type'			 => 'switch',
				'value'			 => 'yes',
				'label'			 => __( 'Medium Device & Tablet Landscape', 'modular' ),
				'desc'			 => __( 'Display this  on tablet landscape?', 'modular' ),
				'help'			 => __( 'Applies to devices with the resolution between 992px - 1199px (Medium device and tablet landscape)', 'modular' ),
				'left-choice'	 => array(
					'value'	 => 'no',
					'label'	 => __( 'No', 'modular' ),
				),
				'right-choice'	 => array(
					'value'	 => 'yes',
					'label'	 => __( 'Yes', 'modular' ),
				)
			),
			'display_tablet'	 => array(
				'type'			 => 'switch',
				'value'			 => 'yes',
				'label'			 => __( 'Tablet Portrait', 'modular' ),
				'desc'			 => __( 'Display this on tablet portrait?', 'modular' ),
				'help'			 => __( 'Applies to devices with the resolution between 768px - 991px (tablet portrait)', 'modular' ),
				'left-choice'	 => array(
					'value'	 => 'no',
					'label'	 => __( 'No', 'modular' ),
				),
				'right-choice'	 => array(
					'value'	 => 'yes',
					'label'	 => __( 'Yes', 'modular' ),
				)
			),
			'display_phone'		 => array(
				'type'			 => 'switch',
				'value'			 => 'yes',
				'label'			 => __( 'Smartphone', 'modular' ),
				'desc'			 => __( 'Display this on smartphone?', 'modular' ),
				'help'			 => __( 'Applies to devices with the resolution up to 767px (smartphones both portrait and landscape as well as some low-resolution tablets)', 'modular' ),
				'left-choice'	 => array(
					'value'	 => 'no',
					'label'	 => __( 'No', 'modular' ),
				),
				'right-choice'	 => array(
					'value'	 => 'yes',
					'label'	 => __( 'Yes', 'modular' ),
				)
			),
		)
	),
	'custom-css-options'	 => array(
		'title'		 => __( 'Custom Css', 'modular' ),
		'type'		 => 'tab',
		'options'	 => array(
			'class' => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Custom Class', 'modular' ),
				'desc'	 => esc_html__( 'Enter a custom CSS class', 'modular' ),
				'help'	 => esc_html__( 'You can use this class to further style this shortcode by adding your custom CSS.', 'modular' ),
			),
		),
	),
);
