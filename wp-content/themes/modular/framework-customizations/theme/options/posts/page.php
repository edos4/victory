<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'main' => array(
		'title'		 => false,
		'type'		 => 'box',
		'options'	 => array(
			'Page' => array(
				'title'		 => esc_html__( 'Page Options', 'modular' ),
				'type'		 => 'tab',
				'options'	 => array(
					'page_sections' => array(
						'type'			 => 'multi-picker',
						'label'			 => false,
						'desc'			 => false,
						'picker'		 => array(
							'xs_page_section' => array(
								'label'			 => esc_html__( 'This page is a section:', 'modular' ),
								'type'			 => 'switch',
								'right-choice'	 => array(
									'value'	 => 'on',
									'label'	 => esc_html__( 'Yes', 'modular' )
								),
								'left-choice'	 => array(
									'value'	 => 'no',
									'label'	 => esc_html__( 'No', 'modular' )
								),
								'value'			 => 'no',
								'desc'			 => modular_kses( __( 'If this a <b>One page Section</b>,  set this field to <b>yes</b>. And if this page is not section, set it to <b>no</b>', 'modular' ) ),
								'help'			 => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>", esc_html__( 'If this page for one page section. set yes ', 'modular' ), esc_html__( 'For One page always will be <b>yes</b>', 'modular' )
								),
							)
						),
						'choices'		 => array(
							'on' => array(
								'hide_title_from_menu' => array(
									'type'			 => 'switch',
									'label'			 => esc_html__( 'Hide title from menu ?', 'modular' ),
									'right-choice'	 => array(
										'value'	 => 'yes',
										'label'	 => esc_html__( 'Yes', 'modular' )
									),
									'left-choice'	 => array(
										'value'	 => 'no',
										'label'	 => esc_html__( 'No', 'modular' )
									),
									'value'			 => 'no',
									'desc'			 => esc_html__( 'If you dont want to add title(or this page) on menu. you can set yes. if you set yes. this menu will be hide in menu.', 'modular' ),
								),
							),
							'no' => array(
								'header_title'			 => array(
									'type'	 => 'text',
									'label'	 => esc_html__( 'Page Title', 'modular' ),
									'desc'	 => esc_html__( 'Add your Page hero title', 'modular' ),
									'value'	 => esc_html__( 'Hero Title', 'modular' ),
								),
								'header_desc'			 => array(
									'type'	 => 'text',
									'label'	 => esc_html__( 'Page Description', 'modular' ),
									'desc'	 => esc_html__( 'Add your Page hero description', 'modular' ),
									'value'	 => esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts', 'modular' )
								),
								'header_image'			 => array(
									'label'	 => esc_html__( 'Page Header Image', 'modular' ),
									'desc'	 => esc_html__( 'Upload a Page header image', 'modular' ),
									'help'	 => esc_html__( "This default header image will be used for all your Page.", 'modular' ),
									'type'	 => 'upload'
								),
								'header_overlay_color'	 => array(
									'label'	 => esc_html__( 'Header Image Overlay Color', 'modular' ),
									'desc'	 => esc_html__( 'Select the image overlay color', 'modular' ),
									'value'	 => 'rgba(0,0,0,0.30)',
									'type'	 => 'rgba-color-picker'
								),
							),
						),
						'show_borders'	 => false,
					),
				),
			),
		),
	),
);


