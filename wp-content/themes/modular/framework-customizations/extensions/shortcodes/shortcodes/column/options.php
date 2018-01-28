<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$margin_and_padding_group = array(
	'padding_group'	 => array(
		'type'		 => 'group',
		'options'	 => array(
			'html_label'	 => array(
				'type'	 => 'html',
				'value'	 => '',
				'label'	 => __( 'Inner Spacing', 'modular' ),
				'html'	 => '',
			),
			'padding_top'	 => array(
				'label'	 => false,
				'desc'	 => __( 'top', 'modular' ),
				'type'	 => 'short-text',
				'value'	 => '0',
			),
			'padding_right'	 => array(
				'label'	 => false,
				'desc'	 => __( 'right', 'modular' ),
				'type'	 => 'short-text',
				'value'	 => '0',
			),
			'padding_bottom' => array(
				'label'	 => false,
				'desc'	 => __( 'bottom', 'modular' ),
				'type'	 => 'short-text',
				'value'	 => '0',
			),
			'padding_left'	 => array(
				'label'	 => false,
				'desc'	 => __( 'left', 'modular' ),
				'type'	 => 'short-text',
				'value'	 => '0',
			),
		)
	),
	'margin_group'	 => array(
		'type'		 => 'group',
		'options'	 => array(
			'html_label'	 => array(
				'type'	 => 'html',
				'value'	 => '',
				'label'	 => __( 'Outer Spacing', 'modular' ),
				'html'	 => '',
			),
			'margin_top'	 => array(
				'label'	 => false,
				'desc'	 => __( 'top', 'modular' ),
				'type'	 => 'short-text',
				'value'	 => '0',
				'label'	 => false,
			),
			'margin_right'	 => array(
				'label'	 => false,
				'desc'	 => __( 'right', 'modular' ),
				'type'	 => 'short-text',
				'value'	 => '0',
			),
			'margin_bottom'	 => array(
				'label'	 => false,
				'desc'	 => __( 'bottom', 'modular' ),
				'type'	 => 'short-text',
				'value'	 => '0',
			),
			'margin_left'	 => array(
				'label'	 => false,
				'desc'	 => __( 'left', 'modular' ),
				'type'	 => 'short-text',
				'value'	 => '0',
			),
		),
	),
);

$text_align	 = array(
	'txt_align' => array(
		'label'		 => __( 'Text Alignment', 'modular' ),
		'desc'		 => __( 'Select the alignment for your column', 'modular' ),
		'attr'		 => array( 'class' => 'fw-checkbox-float-left' ),
		'type'		 => 'radio',
		'choices'	 => array(
			'none'			 => __( 'None', 'modular' ),
			'text-left'		 => __( 'Left', 'modular' ),
			'text-center'	 => __( 'Center', 'modular' ),
			'text-right'	 => __( 'Right', 'modular' ),
		),
		'value'		 => 'none'
	),
);
$height		 = array(
	'height' => array(
		'label'		 => __( ' ', 'modular' ),
		'type'		 => 'radio-text',
		'value'		 => 'auto',
		'choices'	 => array(
			'auto' => __( 'auto', 'modular' ),
		),
		'custom'	 => 'custom_height',
		'help'		 => __( 'This option to use your custom height to like just add 500 ', 'modular' ),
	)
);


$options = array(
	'column-options'		 => array(
		'title'		 => __( 'General', 'modular' ),
		'type'		 => 'tab',
		'options'	 => array(
			'xs_id'				 => array(
				'type'	 => 'unique',
				'length' => 8
			),
			'default_padding'	 => array(
				'type'			 => 'switch',
				'label'			 => __( 'Default Spacing', 'modular' ),
				'desc'			 => __( 'Use default left and right spacing?', 'modular' ),
				'help'			 => __( "Default left and right spacings are set to 15px", "modular" ),
				'attr'			 => array( 'class' => 'xs_column' ),
				'value'			 => '',
				'right-choice'	 => array(
					'value'	 => '',
					'label'	 => __( 'Yes', 'modular' ),
				),
				'left-choice'	 => array(
					'value'	 => 'xs-col-no-padding',
					'label'	 => __( 'No', 'modular' ),
				),
			),
			$margin_and_padding_group,
			$height,
			'txtcolor'			 => array(
				'label'	 => __( 'Text Color', 'modular' ),
				'type'	 => 'color-picker',
				'desc'	 => 'Change text color in this column.  Note some times its not work for default color',
			),
			$text_align,
		)
	),
	'column_style'			 => array(
		'title'		 => __( 'Style', 'modular' ),
		'type'		 => 'tab',
		'options'	 => array(
			'background_options' => array(
				'type'			 => 'multi-picker',
				'label'			 => false,
				'desc'			 => false,
				'attr'			 => array( 'class' => 'xs_column_background' ),
				'picker'		 => array(
					'background' => array(
						'label'		 => __( 'Background', 'modular' ),
						'desc'		 => __( 'Select the background for your column', 'modular' ),
						'attr'		 => array( 'class' => 'fw-checkbox-float-left' ),
						'type'		 => 'radio',
						'choices'	 => array(
							'none'		 => __( 'None', 'modular' ),
							'image'		 => __( 'Image', 'modular' ),
							'bgcolor'	 => __( 'Color', 'modular' ),
						),
						'value'		 => 'none'
					),
				),
				'choices'		 => array(
					'none'		 => array(),
					'color'		 => array(
						'background_color' => array(
							'label'	 => __( '', 'modular' ),
							'help'	 => __( '', 'modular' ),
							'desc'	 => __( 'Select the background color', 'modular' ),
							'value'	 => '',
							'type'	 => 'color-picker'
						),
					),
					'image'		 => array(
						'background_image'		 => array(
							'label'	 => __( '', 'modular' ),
							'type'	 => 'background-image',
						),
						'image_position_group'	 => array(
							'type'		 => 'group',
							'options'	 => array(
								'html_label'	 => array(
									'type'	 => 'html',
									'value'	 => '',
									'label'	 => __( 'Position', 'modular' ),
									'html'	 => '',
								),
								'repeat'		 => array(
									'label'		 => false,
									'desc'		 => __( 'Repeat', 'modular' ),
									'type'		 => 'select',
									'choices'	 => array(
										'no-repeat'	 => __( 'No-Repeat', 'modular' ),
										'repeat'	 => __( 'Repeat', 'modular' ),
										'repeat-x'	 => __( 'Repeat-X', 'modular' ),
										'repeat-y'	 => __( 'Repeat-Y', 'modular' ),
									)
								),
								'bg_position_x'	 => array(
									'label'		 => false,
									'desc'		 => __( 'horizontal position', 'modular' ),
									'type'		 => 'select',
									'choices'	 => array(
										'left'	 => __( 'Left', 'modular' ),
										'center' => __( 'Center', 'modular' ),
										'right'	 => __( 'Right', 'modular' ),
									),
									'value'		 => 'center',
								),
								'bg_position_y'	 => array(
									'label'		 => false,
									'desc'		 => __( 'Vertical position', 'modular' ),
									'type'		 => 'select',
									'choices'	 => array(
										'top'	 => __( 'Top', 'modular' ),
										'center' => __( 'Center', 'modular' ),
										'bottom' => __( 'Bottom', 'modular' ),
									),
									'value'		 => 'center',
								),
								'bg_size'		 => array(
									'label'		 => false,
									'help'		 => __( '<strong>Auto</strong> - Default value, the background image has the original width and height.<br><br><strong>Cover</strong> - Scale the background image so that the background area is completely covered by the image.<br><br><strong>Contain</strong> - Scale the image to the largest size such that both its width and height can fit inside the content area.', 'modular' ),
									'desc'		 => __( 'Bg Size', 'modular' ),
									'type'		 => 'select',
									'choices'	 => array(
										'auto'		 => __( 'Auto', 'modular' ),
										'cover'		 => __( 'Cover', 'modular' ),
										'contain'	 => __( 'Contain', 'modular' ),
									)
								),
							)
						),
						'overlay_options'		 => array(
							'type'		 => 'multi-picker',
							'label'		 => false,
							'desc'		 => false,
							'picker'	 => array(
								'overlay' => array(
									'type'			 => 'switch',
									'label'			 => __( 'Image Overlay', 'modular' ),
									'desc'			 => __( 'Enable image overlay color?', 'modular' ),
									'value'			 => 'no',
									'right-choice'	 => array(
										'value'	 => 'yes',
										'label'	 => __( 'Yes', 'modular' ),
									),
									'left-choice'	 => array(
										'value'	 => 'no',
										'label'	 => __( 'No', 'modular' ),
									),
								),
							),
							'choices'	 => array(
								'no'	 => array(),
								'yes'	 => array(
									'background' => array(
										'label'	 => __( '', 'modular' ),
										'help'	 => __( '', 'modular' ),
										'desc'	 => __( 'Select the overlay color', 'modular' ),
										'type'	 => 'rgba-color-picker',
										'value'	 => 'rgba(0,0,0,0.30)'
									),
								),
							),
						),
					),
					'bgcolor'	 => array(
						'background_color' => array(
							'label'	 => __( '', 'modular' ),
							'help'	 => __( '', 'modular' ),
							'desc'	 => __( 'Select the background color', 'modular' ),
							'value'	 => '',
							'type'	 => 'color-picker'
						),
					)
				),
				'show_borders'	 => false,
			),
			'animation'			 => array(
				'type'			 => 'switch',
				'label'			 => __( 'Animation Effect', 'modular' ),
				'desc'			 => __( 'Enable column animation effect?', 'modular' ),
				'value'			 => 'no',
				'right-choice'	 => array(
					'value'	 => 'yes',
					'label'	 => __( 'Yes', 'modular' ),
				),
				'left-choice'	 => array(
					'value'	 => 'no',
					'label'	 => __( 'No', 'modular' ),
				),
			),
			'column_border'		 => array(
				'type'		 => 'multi-picker',
				'label'		 => false,
				'desc'		 => false,
				'picker'	 => array(
					'selected' => array(
						'type'			 => 'switch',
						'value'			 => 'no',
						'label'			 => __( 'Border', 'modular' ),
						'desc'			 => __( 'Want to add border this column ?', 'modular' ),
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
				'choices'	 => array(
					'yes' => array(
						'border_option' => array(
							'type'		 => 'group',
							'options'	 => array(
								'html_label'	 => array(
									'type'	 => 'html',
									'value'	 => '',
									'label'	 => __( 'Border Option', 'modular' ),
									'html'	 => '',
								),
								'border'		 => array(
									'label'		 => false,
									'desc'		 => __( 'Border', 'modular' ),
									'type'		 => 'select',
									'choices'	 => array(
										'border'		 => __( 'border', 'modular' ),
										'border-top'	 => __( 'border-top', 'modular' ),
										'border-right'	 => __( 'border-right', 'modular' ),
										'border-bottom'	 => __( 'border-bottom', 'modular' ),
										'border-left'	 => __( 'border-left', 'modular' ),
									),
								),
								'border_size'	 => array(
									'label'	 => false,
									'desc'	 => __( 'Size', 'modular' ),
									'type'	 => 'short-text',
									'help'	 => __( 'Border size in pixels. NO need to add "px"', 'modular' ),
									'value'	 => '1',
								),
								'border_style'	 => array(
									'label'		 => false,
									'desc'		 => __( 'Style', 'modular' ),
									'type'		 => 'select',
									'choices'	 => array(
										'solid'	 => __( 'solid', 'modular' ),
										'dotted' => __( 'dotted', 'modular' ),
										'dashed' => __( 'dashed', 'modular' ),
										'double' => __( 'double', 'modular' ),
									),
								),
								'border_color'	 => array(
									'label'	 => false,
									'desc'	 => __( 'Color', 'modular' ),
									'help'	 => __( 'Select border color', 'modular' ),
									'type'	 => 'color-picker'
								),
							)
						),
					)
				)
			),
			'column_radius'		 => array(
				'type'		 => 'multi-picker',
				'label'		 => false,
				'desc'		 => false,
				'picker'	 => array(
					'selected' => array(
						'type'			 => 'switch',
						'value'			 => 'no',
						'label'			 => __( 'Border Radius', 'modular' ),
						'desc'			 => __( 'Want to add border Radius this column ?', 'modular' ),
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
				'choices'	 => array(
					'yes' => array(
						'border_option' => array(
							'type'		 => 'group',
							'options'	 => array(
								'html_label'	 => array(
									'type'	 => 'html',
									'value'	 => '',
									'label'	 => __( 'Radius', 'modular' ),
									'html'	 => '',
								),
								'top_left'		 => array(
									'label'	 => false,
									'desc'	 => __( 'Top Left', 'modular' ),
									'type'	 => 'short-text',
									'value'	 => '5',
								),
								'top_right'		 => array(
									'label'	 => false,
									'desc'	 => __( 'Top Right', 'modular' ),
									'type'	 => 'short-text',
									'value'	 => '5',
								),
								'bottom_right'	 => array(
									'label'	 => false,
									'desc'	 => __( 'Bottom Right', 'modular' ),
									'type'	 => 'short-text',
									'value'	 => '5',
								),
								'bottom_left'	 => array(
									'label'	 => false,
									'desc'	 => __( 'Bottom Left', 'modular' ),
									'type'	 => 'short-text',
//									'help'	 => __( 'Border Radius  will be like ', 'modular' ),
									'value'	 => '5',
								),
							)
						),
					)
				)
			),
			'column_shadow'		 => array(
				'type'		 => 'multi-picker',
				'label'		 => false,
				'desc'		 => false,
				'picker'	 => array(
					'selected' => array(
						'type'			 => 'switch',
						'value'			 => '',
						'label'			 => __( 'Shadow', 'modular' ),
						'desc'			 => __( 'Want to Add a shadow?', 'modular' ),
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
				'choices'	 => array(
					'yes' => array(
						'shadow_option' => array(
							'type'		 => 'group',
							'options'	 => array(
								'html_label'		 => array(
									'type'	 => 'html',
									'value'	 => '',
									'label'	 => __( 'Shadow Option', 'modular' ),
									'html'	 => '',
								),
								'shadow_horiontal'	 => array(
									'desc'	 => __( 'Horizontal', 'modular' ),
									'type'	 => 'short-text',
									'value'	 => '10',
									'label'	 => false,
								),
								'shadow_vertical'	 => array(
									'desc'	 => __( 'Vertical', 'modular' ),
									'type'	 => 'short-text',
									'value'	 => '10',
									'label'	 => false,
								),
								'shadow_blur'		 => array(
									'desc'	 => __( 'Blur distance', 'modular' ),
									'type'	 => 'short-text',
									'value'	 => '5',
									'label'	 => false,
								),
								'shadow_size'		 => array(
									'desc'	 => __( 'Size of shadow', 'modular' ),
									'type'	 => 'short-text',
									'value'	 => '10',
									'label'	 => false,
								),
								'shadow_color'		 => array(
									'desc'	 => __( 'Color', 'modular' ),
									'type'	 => 'rgba-color-picker',
									'value'	 => '#e30707',
									'label'	 => false,
								),
							)
						),
					)
				)
			),
		)
	),
	'advanced'				 => array(
		'title'		 => __( 'Advanced', 'modular' ),
		'type'		 => 'tab',
		'options'	 => array(
			'column_offset'			 => array(
				'type'				 => 'fw-multi-inline',
				'label'				 => __( 'Column Offset', 'modular' ),
				'desc'				 => __( 'Move columns to the right. Offset uses left padding to offset the Column.', 'modular' ),
				'help'				 => __( 'These classes increase the left margin of a column by * columns. For example, .fw-col-md-offset-4 moves .fw-col-md-4 over four columns.', 'modular' ),
				'attr'				 => array( 'class' => 'xs_responsive_column_offset' ),
				'value'				 => array(
					'md_offset'	 => '',
					'sm_offset'	 => '',
				),
				'fw_multi_options'	 => array(
					'md_offset'	 => array(
						'title'		 => __( 'Large Device md', 'modular' ),
						'type'		 => 'select',
						'choices'	 => array(
							''					 => __( 'Default', 'modular' ),
							'fw-col-md-offset-1' => __( 'moves 1 column', 'modular' ),
							'fw-col-md-offset-2' => __( 'moves 2 column', 'modular' ),
							'fw-col-md-offset-3' => __( 'moves 3 column', 'modular' ),
							'fw-col-md-offset-4' => __( 'moves 4 column', 'modular' ),
							'fw-col-md-offset-5' => __( 'moves 5 column', 'modular' ),
							'fw-col-md-offset-6' => __( 'moves 6 column', 'modular' ),
						)
					),
					'sm_offset'	 => array(
						'title'		 => __( 'Small Device sm', 'modular' ),
						'type'		 => 'select',
						'choices'	 => array(
							''					 => __( 'Default', 'modular' ),
							'fw-col-sm-offset-1' => __( 'moves 1 column', 'modular' ),
							'fw-col-sm-offset-2' => __( 'moves 2 column', 'modular' ),
							'fw-col-sm-offset-3' => __( 'moves 3 column', 'modular' ),
							'fw-col-sm-offset-4' => __( 'moves 4 column', 'modular' ),
							'fw-col-sm-offset-5' => __( 'moves 5 column', 'modular' ),
							'fw-col-sm-offset-6' => __( 'moves 6 column', 'modular' ),
						)
					),
				)
			),
//			'column_position'		 => array(
//				'type'		 => 'multi-picker',
//				'label'		 => false,
//				'desc'		 => false,
//				'picker'	 => array(
//					'selected' => array(
//						'type'			 => 'switch',
//						'value'			 => '',
//						'label'			 => __( 'Column Position', 'modular' ),
//						'desc'			 => __( 'Want to Add Position?', 'modular' ),
//						'left-choice'	 => array(
//							'value'	 => 'no',
//							'label'	 => __( 'No', 'modular' ),
//						),
//						'right-choice'	 => array(
//							'value'	 => 'yes',
//							'label'	 => __( 'Yes', 'modular' ),
//						)
//					),
//				),
//				'choices'	 => array(
//					'yes' => array(
//						'position_options' => array(
//							'type'		 => 'group',
//							'options'	 => array(
//								'html_label' => array(
//									'type'	 => 'html',
//									'value'	 => '',
//									'label'	 => false,
//									'html'	 => '',
//								),
//								'position'	 => array(
//									'desc'		 => __( 'Position', 'modular' ),
//									'type'		 => 'select',
//									'choices'	 => array(
//										'static'	 => __( 'static', 'modular' ),
//										'relative'	 => __( 'relative', 'modular' ),
//										'absolute'	 => __( 'absolute', 'modular' ),
//										'fixed'		 => __( 'fixed', 'modular' ),
//									),
//									'value'		 => '',
//									'label'		 => false,
//								),
//								'top'		 => array(
//									'desc'	 => __( 'Top', 'modular' ),
//									'type'	 => 'short-text',
//									'value'	 => '',
//									'label'	 => false,
//								),
//								'right'		 => array(
//									'desc'	 => __( 'Right', 'modular' ),
//									'type'	 => 'short-text',
//									'value'	 => '',
//									'label'	 => false,
//								),
//								'bottom'	 => array(
//									'desc'	 => __( 'Bottom', 'modular' ),
//									'type'	 => 'short-text',
//									'value'	 => '',
//									'label'	 => false,
//								),
//								'left'		 => array(
//									'desc'	 => __( 'Left', 'modular' ),
//									'type'	 => 'short-text',
//									'value'	 => '',
//									'label'	 => false,
//								),
//							)
//						),
//					)
//				)
//			),
			'column_element'		 => array(
				'type'		 => 'group',
				'options'	 => array(
					'html_label' => array(
						'type'	 => 'html',
						'value'	 => '',
						'label'	 => __( 'Element Style', 'modular' ),
						'html'	 => '',
					),
					'display'	 => array(
						'desc'		 => __( 'Display', 'modular' ),
						'type'		 => 'select',
						'choices'	 => array(
							''				 => __( '', 'modular' ),
							//'none'			 => __( 'None', 'modular' ), //
							'block'			 => __( 'Block', 'modular' ),
							'inline-block'	 => __( 'inline-block', 'modular' ),
							'inline'		 => __( 'inline', 'modular' ),
						),
						'value'		 => '',
						'label'		 => false,
					),
					'overflow'	 => array(
						'desc'		 => __( 'Overflow', 'modular' ),
						'type'		 => 'select',
						'choices'	 => array(
							''			 => __( '', 'modular' ),
							'hidden'	 => __( 'hidden', 'modular' ),
							'scroll'	 => __( 'scroll', 'modular' ),
							'visible'	 => __( 'visible', 'modular' ),
							'auto'		 => __( 'auto', 'modular' ),
						),
						'value'		 => '',
						'label'		 => false,
					),
					'overflow-x' => array(
						'desc'		 => __( 'Overflow-X', 'modular' ),
						'type'		 => 'select',
						'choices'	 => array(
							''			 => __( '', 'modular' ),
							'hidden'	 => __( 'hidden', 'modular' ),
							'scroll'	 => __( 'scroll', 'modular' ),
							'visible'	 => __( 'visible', 'modular' ),
							'auto'		 => __( 'auto', 'modular' ),
						),
						'value'		 => '',
						'label'		 => false,
					),
					'overflow-y' => array(
						'desc'		 => __( 'Overflow-Y', 'modular' ),
						'type'		 => 'select',
						'choices'	 => array(
							''			 => __( '', 'modular' ),
							'hidden'	 => __( 'hidden', 'modular' ),
							'scroll'	 => __( 'scroll', 'modular' ),
							'visible'	 => __( 'visible', 'modular' ),
							'auto'		 => __( 'auto', 'modular' ),
						),
						'value'		 => '',
						'label'		 => false,
					),
					'z-index'	 => array(
						'desc'	 => __( 'Z-index', 'modular' ),
						'type'	 => 'short-text',
						'value'	 => '',
						'label'	 => false,
					),
				)
			),
			'last_column'			 => array(
				'type'		 => 'group',
				'attr'		 => array( 'class' => 'xs-group' ),
				'options'	 => array(
					'html_label'				 => array(
						'type'	 => 'html',
						'value'	 => '',
						'label'	 => __( 'Last Column', 'modular' ),
						'html'	 => '',
					),
					'last_column_large_device'	 => array(
						'label'		 => false,
						'desc'		 => __( 'Large Device md', 'modular' ),
						'type'		 => 'select',
						'choices'	 => array(
							'no'	 => __( 'no', 'modular' ),
							'yes'	 => __( 'yes', 'modular' ),
						),
					),
					'last_column_small_device'	 => array(
						'desc'		 => __( 'Small Device sm', 'modular' ),
						'type'		 => 'select',
						'choices'	 => array(
							'no'	 => __( 'no', 'modular' ),
							'yes'	 => __( 'yes', 'modular' ),
						),
						'help'		 => __( 'Last column will apply "clearfix" after this Column to reset the floating. So the next Column after this one will be pushed onto a new line.', 'modular' ),
						'label'		 => false,
					),
				)
			),
			'xs_column_pull_push'	 => array(
				'type'		 => 'multi-picker',
				'attr'		 => array( 'class' => 'xs_column_pull_pushoption' ),
				'label'		 => false,
				'desc'		 => false,
				'picker'	 => array(
					'selected' => array(
						'type'			 => 'switch',
						'value'			 => 'no',
						'label'			 => __( 'Push Pull', 'modular' ),
						'desc'			 => __( 'Easily change the order of our built-in grid columns with .fw-col-md-push-* and .fw-col-md-pull-* modifier classes. <b>Do NOT change</b> if you dont have idea about this', 'modular' ),
						'right-choice'	 => array(
							'value'	 => 'yes',
							'label'	 => __( 'Yes', 'modular' ),
						),
						'left-choice'	 => array(
							'value'	 => 'no',
							'label'	 => __( 'No', 'modular' ),
						)
					),
				),
				'choices'	 => array(
					'yes'	 => array(
						'column_push'	 => array(
							'type'				 => 'fw-multi-inline',
							'label'				 => __( 'Column Push Right', 'modular' ),
							'desc'				 => __( 'Column Push allows you to change the order of your Columns left column to right column for different breakpoints.', 'modular' ),
							'help'				 => __( 'Easily change the order of our built-in grid columns with .col-md-push-* and .col-md-pull-* modifier classes.', 'modular' ),
							'attr'				 => array( 'class' => 'xs_responsive_column_offset' ),
							'value'				 => array(
								'column_md_push' => '',
								'column_sm_push' => '',
							),
							'fw_multi_options'	 => array(
								'column_md_push' => array(
									'title'		 => __( 'Large Device md', 'modular' ),
									'type'		 => 'select',
									'choices'	 => array(
										''					 => __( 'Default', 'modular' ),
										'fw-col-md-push-1'	 => __( 'Push 1 column', 'modular' ),
										'fw-col-md-push-2'	 => __( 'Push 2 column', 'modular' ),
										'fw-col-md-push-3'	 => __( 'Push 3 column', 'modular' ),
										'fw-col-md-push-4'	 => __( 'Push 4 column', 'modular' ),
										'fw-col-md-push-5'	 => __( 'Push 5 column', 'modular' ),
										'fw-col-md-push-6'	 => __( 'Push 6 column', 'modular' ),
										'fw-col-md-push-7'	 => __( 'Push 7 column', 'modular' ),
										'fw-col-md-push-8'	 => __( 'Push 8 column', 'modular' ),
									)
								),
								'column_sm_push' => array(
									'title'		 => __( 'Small Device sm', 'modular' ),
									'type'		 => 'select',
									'choices'	 => array(
										''					 => __( 'Default', 'modular' ),
										'fw-col-sm-push-1'	 => __( 'Push 1 column', 'modular' ),
										'fw-col-sm-push-2'	 => __( 'Push 2 column', 'modular' ),
										'fw-col-sm-push-3'	 => __( 'Push 3 column', 'modular' ),
										'fw-col-sm-push-4'	 => __( 'Push 4 column', 'modular' ),
										'fw-col-sm-push-5'	 => __( 'Push 5 column', 'modular' ),
										'fw-col-sm-push-6'	 => __( 'Push 6 column', 'modular' ),
										'fw-col-sm-push-7'	 => __( 'Push 7 column', 'modular' ),
										'fw-col-sm-push-8'	 => __( 'Push 8 column', 'modular' ),
									)
								),
							)
						),
						'column_pull'	 => array(
							'type'				 => 'fw-multi-inline',
							'label'				 => __( 'Column Pull Left', 'modular' ),
							'desc'				 => __( 'Column Pull allows you to change the order of your right Column to left for different breakpoints.', 'modular' ),
							'help'				 => __( 'Easily change the order of our built-in grid columns with .col-md-push-* and .col-md-pull-* modifier classes.', 'modular' ),
							'attr'				 => array( 'class' => 'xs_responsive_column_offset' ),
							'value'				 => array(
								'column_md_pull' => '',
								'column_sm_pull' => '',
							),
							'fw_multi_options'	 => array(
								'column_md_pull' => array(
									'title'		 => __( 'Large Device md', 'modular' ),
									'type'		 => 'select',
									'choices'	 => array(
										''					 => __( 'Default', 'modular' ),
										'fw-col-md-pull-1'	 => __( 'Pull 1 column', 'modular' ),
										'fw-col-md-pull-2'	 => __( 'Pull 2 column', 'modular' ),
										'fw-col-md-pull-3'	 => __( 'Pull 3 column', 'modular' ),
										'fw-col-md-pull-4'	 => __( 'Pull 4 column', 'modular' ),
										'fw-col-md-pull-5'	 => __( 'Pull 5 column', 'modular' ),
										'fw-col-md-pull-6'	 => __( 'Pull 6 column', 'modular' ),
										'fw-col-md-pull-7'	 => __( 'Pull 7 column', 'modular' ),
										'fw-col-md-pull-8'	 => __( 'Pull 8 column', 'modular' ),
									)
								),
								'column_sm_pull' => array(
									'title'		 => __( 'Small Device sm', 'modular' ),
									'type'		 => 'select',
									'choices'	 => array(
										''					 => __( 'Default', 'modular' ),
										'fw-col-sm-pull-1'	 => __( 'Pull 1 column', 'modular' ),
										'fw-col-sm-pull-2'	 => __( 'Pull 2 column', 'modular' ),
										'fw-col-sm-pull-3'	 => __( 'Pull 3 column', 'modular' ),
										'fw-col-sm-pull-4'	 => __( 'Pull 4 column', 'modular' ),
										'fw-col-sm-pull-5'	 => __( 'Pull 5 column', 'modular' ),
										'fw-col-sm-pull-6'	 => __( 'Pull 6 column', 'modular' ),
										'fw-col-sm-pull-7'	 => __( 'Pull 7 column', 'modular' ),
										'fw-col-sm-pull-8'	 => __( 'Pull 8 column', 'modular' ),
									)
								),
							)
						),
					),
					'no'	 => array(),
				)
			),
			'info'					 => array(
				'type'	 => 'html',
				'label'	 => false,
				'html'	 => 'More detailed information about the Bootstrap Grid can be <a href="http://getbootstrap.com/css/#grid" target="_blank">found here</a>'
			),
		)
	),
	'xs_responsive_options'	 => array(
		'title'		 => __( 'Responsive', 'modular' ),
		'type'		 => 'tab',
		'options'	 => array(
			'responsive_layout'	 => array(
				'type'				 => 'fw-multi-inline',
				'label'				 => __( 'Responsive Layout', 'modular' ),
				'desc'				 => __( 'Choose the responsive tablet and phone display for this column.', 'modular' ),
				'help'				 => __( 'Use this option in order to control how this column behaves on tablets (and devices with the resoution between 768px - 990px for tablet, and less than 768px for mobile ). Note that on phones all the columns are 1/1 by default.', 'modular' ),
				'attr'				 => array( 'class' => 'xs_responsive_layout_postion' ),
				'value'				 => array(
					'desktop'	 => '',
					'tablet'	 => '',
					'phonexs'	 => 'fw-col-xs-12',
				),
				'fw_multi_options'	 => array(
					'desktop'	 => array(
						'title'		 => __( 'For Large Device', 'modular' ),
						'type'		 => 'select',
						'choices'	 => array(
							''				 => __( 'Default layout', 'modular' ),
							'fw-col-lg-2'	 => __( 'Make it a 1/6', 'modular' ),
							'fw-col-lg-3'	 => __( 'Make it a 1/4', 'modular' ),
							'fw-col-lg-4'	 => __( 'Make it a 1/3', 'modular' ),
							'fw-col-lg-6'	 => __( 'Make it a 1/2', 'modular' ),
							'fw-col-lg-8'	 => __( 'Make it a 2/3', 'modular' ),
							'fw-col-lg-9'	 => __( 'Make it a 3/4', 'modular' ),
							'fw-col-lg-12'	 => __( 'Make it a 1/1', 'modular' ),
						)
					),
					'tablet'	 => array(
						'title'		 => __( 'For Tablet', 'modular' ),
						'type'		 => 'select',
						'choices'	 => array(
							''				 => __( 'Default layout', 'modular' ),
							'fw-col-sm-2'	 => __( 'Make it a 1/6', 'modular' ),
							'fw-col-sm-3'	 => __( 'Make it a 1/4', 'modular' ),
							'fw-col-sm-4'	 => __( 'Make it a 1/3', 'modular' ),
							'fw-col-sm-6'	 => __( 'Make it a 1/2', 'modular' ),
							'fw-col-sm-8'	 => __( 'Make it a 2/3', 'modular' ),
							'fw-col-sm-9'	 => __( 'Make it a 3/4', 'modular' ),
							'fw-col-sm-12'	 => __( 'Make it a 1/1', 'modular' ),
						)
					),
					'phonexs'	 => array(
						'title'		 => __( 'For Phones', 'modular' ),
						'type'		 => 'select',
						'choices'	 => array(
							'fw-col-xs-2'	 => __( 'Make it a 1/6', 'modular' ),
							'fw-col-xs-3'	 => __( 'Make it a 1/4', 'modular' ),
							'fw-col-xs-4'	 => __( 'Make it a 1/3', 'modular' ),
							'fw-col-xs-6'	 => __( 'Make it a 1/2', 'modular' ),
							'fw-col-xs-8'	 => __( 'Make it a 2/3', 'modular' ),
							'fw-col-xs-9'	 => __( 'Make it a 3/4', 'modular' ),
							'fw-col-xs-12'	 => __( 'Default 1/1', 'modular' ),
						)
					),
				)
			),
			'display_desktop'	 => array(
				'type'	 => 'multi-picker',
				'label'	 => false,
				'desc'	 => false,
				'picker' => array(
					'selected' => array(
						'type'			 => 'switch',
						'value'			 => 'yes',
						'label'			 => __( 'Desktop', 'modular' ),
						'desc'			 => __( 'Display this column on desktop?', 'modular' ),
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
				'type'		 => 'multi-picker',
				'label'		 => false,
				'desc'		 => false,
				'picker'	 => array(
					'selected' => array(
						'type'			 => 'switch',
						'value'			 => 'yes',
						'label'			 => __( 'Medium Device & Tablet Landscape', 'modular' ),
						'desc'			 => __( 'Display this column on tablet landscape?', 'modular' ),
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
				),
				'choices'	 => array(
					'yes' => array(
						$margin_and_padding_group,
						'change_height' => array(
							'type'		 => 'multi-picker',
							'label'		 => false,
							'desc'		 => false,
							'picker'	 => array(
								'selected' => array(
									'type'			 => 'switch',
									'value'			 => 'no',
									'label'			 => __( 'Height', 'modular' ),
									'desc'			 => __( 'Change this column height medium device?', 'modular' ),
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
							'choices'	 => array(
								'yes' => array(
									$height,
								),
							)
						),
						$text_align,
					),
				)
			),
			'display_tablet'	 => array(
				'type'		 => 'multi-picker',
				'label'		 => false,
				'desc'		 => false,
				'picker'	 => array(
					'selected' => array(
						'type'			 => 'switch',
						'value'			 => 'yes',
						'label'			 => __( 'Tablet Portrait', 'modular' ),
						'desc'			 => __( 'Display this column on tablet portrait?', 'modular' ),
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
				),
				'choices'	 => array(
					'yes' => array(
						$margin_and_padding_group,
						'change_height' => array(
							'type'			 => 'multi-picker',
							'label'			 => false,
							'desc'			 => false,
							'picker'		 => array(
								'selected' => array(
									'type'			 => 'switch',
									'value'			 => 'no',
									'label'			 => __( 'Height', 'modular' ),
									'desc'			 => __( 'Change this column height medium device?', 'modular' ),
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
							'choices'		 => array(
								'yes' => array(
									$height,
								),
							),
							'show_borders'	 => false,
						),
						$text_align,
					),
				)
			),
			'display_phone'		 => array(
				'type'		 => 'multi-picker',
				'label'		 => false,
				'desc'		 => false,
				'picker'	 => array(
					'selected' => array(
						'type'			 => 'switch',
						'value'			 => 'yes',
						'label'			 => __( 'Smartphone', 'modular' ),
						'desc'			 => __( 'Display this column on smartphone?', 'modular' ),
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
				),
				'choices'	 => array(
					'yes' => array(
						$margin_and_padding_group,
						'change_height' => array(
							'type'		 => 'multi-picker',
							'label'		 => false,
							'desc'		 => false,
							'picker'	 => array(
								'selected' => array(
									'type'			 => 'switch',
									'value'			 => 'no',
									'label'			 => __( 'Height', 'modular' ),
									'desc'			 => __( 'Change this column height medium device?', 'modular' ),
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
							'choices'	 => array(
								'yes' => array(
									$height,
								),
							)
						),
						$text_align,
					),
				)
			),
		)
	),
	'custom_css'			 => array(
		'title'		 => __( 'Custom Css', 'modular' ),
		'type'		 => 'tab',
		'options'	 => array(
			'class'		 => array(
				'label'	 => __( 'Custom Class', 'modular' ),
				'desc'	 => __( 'Enter custom CSS class', 'modular' ),
				'help'	 => __( 'You can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /modular-child/style.css', 'modular' ),
				'type'	 => 'text',
				'value'	 => '',
			),
			'custom_id'	 => array(
				'label'	 => __( 'Custom ID', 'modular' ),
				'desc'	 => __( 'Enter custom CSS ID', 'modular' ),
				'help'	 => __( 'You can use this options to add a Css ID and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /modular-child/style.css', 'modular' ),
				'type'	 => 'text',
				'value'	 => '',
			),
		)
	),
);
