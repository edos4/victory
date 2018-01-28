<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'page_settings' => array(
		'title'		 => esc_html__( 'Page Settings', 'modular' ),
		'type'		 => 'tab',
		'options'	 => array(
			'header-page-box' => array(
				'title'		 => esc_html__( 'Page Settings', 'modular' ),
				'type'		 => 'box',
				'options'	 => array(
					'general_page_header' => array(
						'type'			 => 'multi',
						'label'			 => false,
						'attr'			 => array(
							'class' => 'fw-option-type-multi-show-borders',
						),
						'inner-options'	 => array(
							'page_header_group' => array(
								'type'		 => 'group',
								'options'	 => array(
									'page_header'			 => array(
										'type'			 => 'switch',
										'label'			 => esc_html__( 'Page Header', 'modular' ),
										'desc'			 => esc_html__( 'Are you interested to use page header?', 'modular' ),
										'right-choice'	 => array(
											'value'	 => 'yes',
											'label'	 => esc_html__( 'Yes', 'modular' ),
										),
										'left-choice'	 => array(
											'value'	 => 'no',
											'label'	 => esc_html__( 'No', 'modular' ),
										),
									),
									'page_style'			 => array(
										'label'		 => esc_html__( 'Page Hero Style', 'modular' ),
										'type'		 => 'image-picker',
										'value'		 => 'page_style_one',
										'desc'		 => esc_html__( 'Select your page hero style', 'modular' ),
										'choices'	 => array(
											'page-1' => array(
												'small'	 => array(
													'height' => 70,
													'src'	 => MODULAR_IMAGES . '/image-picker/page-hero-1.png'
												),
												'large'	 => array(
													'height' => 214,
													'src'	 => MODULAR_IMAGES . '/image-picker/page-hero-1.png'
												),
											),
											'page-2' => array(
												'small'	 => array(
													'height' => 70,
													'src'	 => MODULAR_IMAGES . '/image-picker/page-hero-2.png'
												),
												'large'	 => array(
													'height' => 214,
													'src'	 => MODULAR_IMAGES . '/image-picker/page-hero-2.png'
												),
											)
										),
									),
									'header_image'			 => array(
										'label'	 => esc_html__( 'Page Header Image', 'modular' ),
										'desc'	 => esc_html__( 'Upload a Page header image', 'modular' ),
										'help'	 => esc_html__( "This default header image will be used for all your Page.", "modular" ),
										'type'	 => 'upload'
									),
									'header_overlay_color'	 => array(
										'label'	 => esc_html__( '', 'modular' ),
										'desc'	 => esc_html__( 'Select the image overlay color', 'modular' ),
										'help'	 => esc_html__( '', 'modular' ),
										'value'	 => 'rgba(255,255,255,0.30)',
										'type'	 => 'rgba-color-picker'
									),
									'header_title'			 => array(
										'type'	 => 'text',
										'label'	 => esc_html__( 'Page Title', 'modular' ),
										'desc'	 => esc_html__( 'Add your Page hero title', 'modular' ),
										'value'	 => esc_html__( 'Hero Title', 'modular' )
									),
									'header_desc'			 => array(
										'type'	 => 'textarea',
										'label'	 => esc_html__( 'Page Description', 'modular' ),
										'desc'	 => esc_html__( 'Add your Page hero description', 'modular' ),
										'value'	 => esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts', 'modular' )
									),
								)
							),
						)
					)
				)
			),
		),
	),
);
