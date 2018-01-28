<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$template_directory	 = get_template_directory_uri();
$options			 = array(
	'genarel-options'		 => array(
		'title'		 => __( 'Custom css', 'modular' ),
		'type'		 => 'tab',
		'options'	 => array(
			'xs_id'	 => array(
				'type'	 => 'unique',
				'length' => 8
			),
			'height' => array(
				'label'		 => __( 'Height', 'modular' ),
				'desc'		 => __( 'Select the space height in px (Small = 30px, Medium = 60px, Large = 100px) also you can use custom height according to your need.', 'modular' ),
				'type'		 => 'radio-text',
				'choices'	 => array(
					'space-sm'	 => __( 'Small', 'modular' ),
					'space-md'	 => __( 'Medium', 'modular' ),
					'space-lg'	 => __( 'Large', 'modular' ),
				),
				'value'		 => 'space-md',
				'custom'	 => 'custom_height',
			),
		)
	),
	'xs_responsive_options'	 => array(
		'title'		 => __( 'Responsive', 'modular' ),
		'type'		 => 'tab',
		'options'	 => array(
			'display_desktop'	 => array(
				'type'	 => 'multi-picker',
				'label'	 => false,
				'desc'	 => false,
				'picker' => array(
					'selected' => array(
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
				),
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
			'medium_height'		 => array(
				'label'		 => __( 'Medium Height', 'modular' ),
				'help'		 => __( 'Select the space height in px (Small = 30px, Medium = 60px, Large = 100px) also you can use custom height according to your need.', 'modular' ),
				'type'		 => 'radio-text',
				'choices'	 => array(
					'default'		 => __( 'Default', 'modular' ),

				),
				'value'		 => 'default',
				'custom'	 => 'custom_height',
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
			'tablet_height'		 => array(
				'label'		 => __( 'Tablet Height', 'modular' ),
				'help'		 => __( 'Select the space height in px (Small = 30px, Medium = 60px, Large = 100px) also you can use custom height according to your need.', 'modular' ),
				'type'		 => 'radio-text',
				'choices'	 => array(
					'default'		 => __( 'Default', 'modular' ),
				),
				'value'		 => 'default',
				'custom'	 => 'custom_height',
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
			'phone_height'			 => array(
				'label'		 => __( 'Phone Height', 'modular' ),
				'help'		 => __( 'Select the space height in px (Small = 30px, Medium = 60px, Large = 100px) also you can use custom height according to your need.', 'modular' ),
				'type'		 => 'radio-text',
				'choices'	 => array(
					'default'		 => __( 'Default', 'modular' ),
				),
				'value'		 => 'default',
				'custom'	 => 'custom_height',
			),
		)
	),
	'custom-options'		 => array(
		'title'		 => __( 'Custom css', 'modular' ),
		'type'		 => 'tab',
		'options'	 => array(
			'class' => array(
				'label'	 => __( 'CSS Class', 'modular' ),
				'desc'	 => __( 'Enter custom CSS class', 'modular' ),
				'type'	 => 'text',
				'value'	 => '',
			),
		)
	),
);
