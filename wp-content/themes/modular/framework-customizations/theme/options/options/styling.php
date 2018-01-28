<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'styling_settings' => array(
		'title'		 => esc_html__( 'Styling Settings', 'modular' ),
		'type'		 => 'tab',
		'options'	 => array(
			'header-styling-box' => array(
				'title'		 => esc_html__( 'Styling Settings', 'modular' ),
				'type'		 => 'box',
				'options'	 => array(
					'main_color'		 => array(
						'type'	 => 'color-picker',
						'label'	 => 'Theme Color',
						'desc'	 => 'You can use any color in your theme',
						'value'	 => '#31aff5'
					),
					'typography-global'	 => array(
						'title'		 => esc_html__( 'Global Typography', 'modular' ),
						'type'		 => 'box',
						'options'	 => array(
							'body_font'			 => array(
								'type'		 => 'typography-v2',
								'value'		 => array(
									'family'		 => 'PT Serif',
									// For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
									'style'			 => 'regular',
									'weight'		 => 400,
									'subset'		 => 'latin-ext',
									'size'			 => 15,
									'line-height'	 => 21,
									'letter-spacing' => .75,
									'color'			 => '#2e71f2'
								),
								'components' => array(
									'family'		 => true,
									'style'			 => true,
									'weight'		 => true,
									// 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
									'size'			 => true,
									'line-height'	 => true,
									'letter-spacing' => true,
									'color'			 => true
								),
								'label'		 => __( 'Body Font', 'modular' ),
								'desc'		 => __( 'This is default body font for your site', 'modular' ),
							),
							'heading_title'		 => array(
								'type'		 => 'typography-v2',
								'value'		 => array(
									'family'		 => 'Hind Madurai',
									'style'			 => 'normal',
									'weight'		 => 300,
									'subset'		 => 'latin-ext',
									'variation'		 => 300,
//									'size'			 => 14,
									'line-height'	 => 15,
									'letter-spacing' => 0,
									'color'			 => '#111111'
								),
								'components' => array(
									'family'		 => true,
									'style'			 => true,
									'weight'		 => true,
									'size'			 => false,
									'line-height'	 => false,
									'letter-spacing' => false,
									'color'			 => true
								),
								'attr'		 => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
								'label'		 => __( 'Heading Title', 'modular' ),
								'desc'		 => __( 'Description', 'modular' ),
							),
							'heading_subtitle'	 => array(
								'type'		 => 'typography-v2',
								'value'		 => array(
									'family'		 => 'Hind Madurai',
									'style'			 => 'normal',
									'weight'		 => 300,
									'subset'		 => 'latin-ext',
									'variation'		 => 300,
//									'size'			 => 14,
									'line-height'	 => 15,
									'letter-spacing' => 0,
									'color'			 => '#111111'
								),
								'components' => array(
									'family'		 => true,
									'style'			 => true,
									'weight'		 => true,
									'size'			 => false,
									'line-height'	 => false,
									'letter-spacing' => false,
									'color'			 => true
								),
								'attr'		 => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
								'label'		 => __( 'Heading Subtitle', 'modular' ),
								'desc'		 => __( 'Description', 'modular' ),
							),
						),
					),
				)
			),
			'css-box'			 => array(
				'title'		 => esc_html__( 'EXTRA CSS', 'modular' ),
				'type'		 => 'box',
				'options'	 => array(
					'custom_css' => array(
						'label'	 => esc_html__( 'Custom CSS', 'modular' ),
						'desc'	 => esc_html__( 'Custom Css changes that will be applied to the theme', 'modular' ),
						'help'	 => esc_html__( 'If you need to change major portions of the theme please add your custom CSS in the style.css file. This file is located on your server in the <strong>/child-theme/style.css</strong>', 'modular' ),
						'type'	 => 'textarea',
						'value'	 => '',
					),
				)
			),
		),
	),
);
