<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'genarel-options'		 => array(
		'title'		 => __( 'General', 'modular' ),
		'type'		 => 'tab',
		'options'	 => array(
			'xs_id'				 => array(
				'type'	 => 'unique',
				'length' => 8
			),
			'section_title'		 => array(
				'type'	 => 'text',
				'label'	 => __( 'Sorting title', 'modular' ),
				'value'	 => '',
				'desc'	 => __( 'Enter a name (it is for internal use and will not appear on the front end) ', 'modular' )
			),
			'is_fullwidth'		 => array(
				'label'	 => __( 'Full Width', 'modular' ),
				'type'	 => 'switch',
			),
//			'row'					 => array(
//				'label'			 => __( 'Row', 'modular' ),
//				'type'			 => 'switch',
//				'desc'			 => __( 'If YES 30px default gutter will be stay with row div. If NO Default gutter will be removed', 'modular' ),
//				'value'			 => 'yes',
//				'right-choice'	 => array(
//					'value'	 => 'yes',
//					'label'	 => __( 'Yes', 'modular' ),
//				),
//				'left-choice'	 => array(
//					'value'	 => 'no',
//					'label'	 => __( 'No', 'modular' ),
//				)
//			),
			'default_spacing'	 => array(
				'type'		 => 'radio',
				'label'		 => __( 'Section Spacing', 'modular' ),
				'desc'		 => __( 'Top and bottom spacing of this section', 'modular' ),
				'help'		 => __( 'Add top and bottom spacing like Default spacing 80px, padding-top:80px padding-bottom:80px ', 'modular' ),
				'value'		 => 'section-padding',
				'choices'	 => array(
					'section-padding'		 => __( 'Default Spacing', 'modular' ),
					'section-padding-small'	 => __( 'Min Spacing', 'modular' ),
					'section-padding-zero'	 => __( 'No Spacing', 'modular' ),
				),
			),
			'height'			 => array(
				'label'		 => __( 'Height', 'modular' ),
				'desc'		 => __( "Select the section's height in px (Ex: 400) (dont include with <b>px</b>)", "modular" ),
				'type'		 => 'radio-text',
				'value'		 => 'auto',
				'choices'	 => array(
					'auto'					 => __( 'auto', 'modular' ),
					'xs-section-height-sm'	 => __( 'small', 'modular' ),
					'xs-section-height-md'	 => __( 'medium', 'modular' ),
					'xs-section-height-lg'	 => __( 'large', 'modular' ),
				),
				'custom'	 => 'custom_width',
				'help'		 => __( 'This option to set extra height in your section. We have used three classes for extra height which small = 350px, medium= 450px , large = 650px. you can use your custom height to like just add 400 (no need to add px)', 'modular' ),
			),
//			'columns_equal_height'	 => array(
//				'type'	 => 'switch',
//				'label'	 => __( 'Columns Equalize', 'modular' ),
//				'desc'	 => __( 'Equalize the height of all inner Columns in this section (calculated from the tallest one)', 'modular' ),
//				'value'			 => 'no',
//				'right-choice'	 => array(
//					'value'	 => 'equalcol',
//					'label'	 => __( 'Yes', 'modular' ),
//				),
//				'left-choice'	 => array(
//					'value'	 => 'no',
//					'label'	 => __( 'No', 'modular' ),
//				),
//			),
		)
	),
	'style-options'			 => array(
		'title'		 => __( 'Styles', 'modular' ),
		'type'		 => 'tab',
		'options'	 => array(
			'background_options' => array(
				'type'			 => 'multi-picker',
				'label'			 => false,
				'desc'			 => false,
				'picker'		 => array(
					'background' => array(
						'label'		 => __( 'Background', 'modular' ),
						'desc'		 => __( 'Select the background for your section', 'modular' ),
						'attr'		 => array( 'class' => 'fw-checkbox-float-left' ),
						'type'		 => 'radio',
						'choices'	 => array(
							'none'		 => __( 'None', 'modular' ),
							'image'		 => __( 'Image', 'modular' ),
							'video'		 => __( 'Video', 'modular' ),
							'color'		 => __( 'Color', 'modular' ),
							'gradient'	 => __( 'Gradient', 'modular' ),
						),
						'value'		 => 'none'
					),
				),
				'choices'		 => array(
					'none'		 => array(),
					'color'		 => array(
						'background_color' => array(
							'label'	 => __( '', 'modular' ),
							'desc'	 => __( 'Select the background color', 'modular' ),
							'value'	 => '',
							'type'	 => 'color-picker'
						),
					),
					'gradient'	 => array(
						'background' => array(
							'type'	 => 'gradient',
							'value'	 => array(
								'primary'	 => '#33001b',
								'secondary'	 => '#ff0084',
							),
							'desc'	 => __( 'Add your Gradient color', 'modular' ),
						),
					),
					'image'		 => array(
						'background_image'		 => array(
							'label'	 => __( '', 'modular' ),
							'type'	 => 'background-image',
						),
						'image_position_group'	 => array(
							'type'		 => 'group',
							'attr'		 => array( 'class' => 'xs-shortwidth-group' ),
							'options'	 => array(
								'html_label'			 => array(
									'type'	 => 'html',
									'value'	 => '',
									'label'	 => __( 'Position', 'modular' ),
									'html'	 => '',
								),
								'repeat'				 => array(
									'label'		 => false,
									'desc'		 => __( 'Repeat', 'modular' ),
									'type'		 => 'short-select',
									'choices'	 => array(
										'no-repeat'	 => __( 'No-Repeat', 'modular' ),
										'repeat'	 => __( 'Repeat', 'modular' ),
										'repeat-x'	 => __( 'Repeat-X', 'modular' ),
										'repeat-y'	 => __( 'Repeat-Y', 'modular' ),
									)
								),
								'bg_position_x'			 => array(
									'label'		 => false,
									'desc'		 => __( 'horizontal position', 'modular' ),
									'type'		 => 'short-select',
									'choices'	 => array(
										'left'	 => __( 'Left', 'modular' ),
										'center' => __( 'Center', 'modular' ),
										'right'	 => __( 'Right', 'modular' ),
									),
									'value'		 => 'center',
									'attr'		 => array( 'class' => 'xs-shortwidth' ),
								),
								'bg_position_y'			 => array(
									'label'		 => false,
									'desc'		 => __( 'Vertical position', 'modular' ),
									'type'		 => 'short-select',
									'choices'	 => array(
										'top'	 => __( 'Top', 'modular' ),
										'center' => __( 'Center', 'modular' ),
										'bottom' => __( 'Bottom', 'modular' ),
									),
									'value'		 => 'center',
									'attr'		 => array( 'class' => 'xs-shortwidth' ),
								),
								'bg_size'				 => array(
									'label'		 => false,
									'help'		 => __( '<strong>Auto</strong> - Default value, the background image has the original width and height.<br><br><strong>Cover</strong> - Scale the background image so that the background area is completely covered by the image.<br><br><strong>Contain</strong> - Scale the image to the largest size such that both its width and height can fit inside the content area.', 'modular' ),
									'desc'		 => __( 'Bg Size', 'modular' ),
									'type'		 => 'short-select',
									'value'		 => 'cover',
									'choices'	 => array(
										'auto'		 => __( 'Auto', 'modular' ),
										'cover'		 => __( 'Cover', 'modular' ),
										'contain'	 => __( 'Contain', 'modular' ),
									),
									'attr'		 => array( 'class' => 'xs-shortwidth' ),
								),
								'background_attachment'	 => array(
									'label'		 => false,
									'help'		 => __( 'The background-attachment property sets whether a background image is fixed or scrolls with the rest of the page.', 'modular' ),
									'desc'		 => __( 'Attachement', 'modular' ),
									'type'		 => 'short-select',
									'value'		 => 'scroll',
									'choices'	 => array(
										'scroll' => __( 'scroll', 'modular' ),
										'fixed'	 => __( 'fixed', 'modular' ),
									)
								),
							),
						),
						'parallax'				 => array(
							'type'			 => 'switch',
							'label'			 => __( 'Parallax Effect', 'modular' ),
							'desc'			 => __( 'Enable parllax effect in this image?', 'modular' ),
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
						'tab_item'				 => array(
							'type'			 => 'multi-picker',
							'label'			 => false,
							'desc'			 => false,
							'picker'		 => array(
								'selected_value' => array(
									'label'		 => __( 'Overlay', 'modular' ),
									'desc'		 => __( 'Select the tab type', 'modular' ),
									'attr'		 => array( 'class' => 'fw-checkbox-float-left' ),
									'value'		 => 'overlay11',
									'type'		 => 'radio',
									'choices'	 => array(
										'overlay11'	 => __( 'Overlay', 'modular' ),
										'gradient11' => __( 'Gradient', 'modular' ),
									),
								)
							),
							'choices'		 => array(
								'overlay11'	 => array(
									'background' => array(
										'label'	 => __( '', 'modular' ),
										'desc'	 => __( 'Select the overlay color', 'modular' ),
										'value'	 => 'rgba(0,0,0,0.35)',
										'type'	 => 'rgba-color-picker'
									),
								),
								'gradient11' => array(
									'background'			 => array(
										'type'	 => 'gradient',
										'value'	 => array(
											'primary'	 => '#33001b',
											'secondary'	 => '#ff0084',
										),
										'help'	 => __( 'Help tip', 'modular' ),
									),
									'gradient_trnsparent'	 => array(
										'type'		 => 'slider',
										'value'		 => 85,
										'properties' => array(
											'min'	 => 30,
											'max'	 => 90,
											'step'	 => 1, // Set slider step. Always > 0. Could be fractional.
										),
										'attr'		 => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
										'label'		 => __( ' ', 'modular' ),
										'desc'		 => __( 'Set your Gradient color', 'modular' ),
									)
								),
							),
							'show_borders'	 => false,
						),
					),
					'video'		 => array(
						'video_type'		 => array(
							'type'			 => 'multi-picker',
							'label'			 => false,
							'desc'			 => false,
							'attr'			 => array( 'class' => 'xs-video-background-image' ),
							'picker'		 => array(
								'select_video_xs' => array(
									'label'		 => __( 'Video Type', 'modular' ),
									'desc'		 => __( 'Select the video type', 'modular' ),
									'attr'		 => array( 'class' => 'fw-checkbox-float-left' ),
									'type'		 => 'radio',
									'choices'	 => array(
										'youtube'		 => __( 'Youtube', 'modular' ),
										'media_upload'	 => __( 'Upload', 'modular' ),
									),
									'value'		 => 'youtube'
								),
							),
							'choices'		 => array(
								'youtube'		 => array(
									'video'		 => array(
										'label'	 => __( '', 'modular' ),
										'desc'	 => __( 'Insert a YouTube video URL', 'modular' ),
										'type'	 => 'text',
									),
									'video_img'	 => array(
										'label'	 => __( 'Replacement Image', 'modular' ),
										'type'	 => 'background-image',
										'help'	 => __( 'This image will replace the video on mobile devices that disable background videos', 'modular' ),
									),
								),
								'media_upload'	 => array(
									'video'		 => array(
										'label'			 => __( '', 'modular' ),
										'desc'			 => __( 'Upload a video', 'modular' ),
										'images_only'	 => false,
										'type'			 => 'upload',
									),
									'video_img'	 => array(
										'label'	 => __( 'Alternate Image', 'modular' ),
										'type'	 => 'background-image',
										'help'	 => __( 'This image will replace the video on mobile devices that disable background videos', 'modular' ),
									),
								),
							),
							'show_borders'	 => false,
						),
						'overlay_options'	 => array(
							'type'		 => 'multi-picker',
							'label'		 => false,
							'desc'		 => false,
							'picker'	 => array(
								'overlay' => array(
									'type'			 => 'switch',
									'label'			 => __( 'Overlay Color', 'modular' ),
									'desc'			 => __( 'Enable video overlay color?', 'modular' ),
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
										'desc'	 => __( 'Select the overlay color', 'modular' ),
										'value'	 => 'rgba(0,0,0,0.25)',
										'type'	 => 'rgba-color-picker'
									),
								),
							),
						),
					),
				),
				'show_borders'	 => false,
			),
			'section_element'	 => array(
				'type'		 => 'group',
				
				'attr'		 => array( 'class' => 'xs-group' ),
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
	'custom-options'		 => array(
		'title'		 => __( 'Custom css', 'modular' ),
		'type'		 => 'tab',
		'options'	 => array(
			'class'		 => array(
				'label'	 => __( 'CSS Class', 'modular' ),
				'desc'	 => __( 'Enter custom CSS class', 'modular' ),
				'type'	 => 'text',
				'value'	 => '',
			),
			'link_id'	 => array(
				'label'	 => __( 'CSS ID', 'modular' ),
				'desc'	 => __( 'Enter custom CSS ID', 'modular' ),
				'type'	 => 'text',
				'value'	 => '',
			),
		)
	),
);
