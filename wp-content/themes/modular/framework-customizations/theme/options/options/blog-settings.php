<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'blog_settings' => array(
		'title'		 => esc_html__( 'Blog Settings', 'modular' ),
		'type'		 => 'tab',
		'options'	 => array(
			'header-posts-box'	 => array(
				'title'		 => esc_html__( 'Posts Header', 'modular' ),
				'type'		 => 'box',
				'options'	 => array(
					'general_posts_header' => array(
						'type'			 => 'multi',
						'label'			 => false,
						'attr'			 => array(
							'class' => 'fw-option-type-multi-show-borders',
						),
						'inner-options'	 => array(
							'posts_header_group' => array(
								'type'		 => 'group',
								'options'	 => array(
									'blog_header'			 => array(
										'type'			 => 'switch',
										'label'			 => esc_html__( 'Blog Header', 'modular' ),
										'desc'			 => esc_html__( 'Are you interested to use blog header?', 'modular' ),
										'right-choice'	 => array(
											'value'	 => 'yes',
											'label'	 => esc_html__( 'Yes', 'modular' ),
										),
										'left-choice'	 => array(
											'value'	 => 'no',
											'label'	 => esc_html__( 'No', 'modular' ),
										),
									),
									'blog_style'			 => array(
										'label'		 => esc_html__( 'Blog Style', 'modular' ),
										'desc'		 => esc_html__( 'Choose the blog style', 'modular' ),
										'type'		 => 'image-picker',
										'value'		 => 'blog-1',
										'choices'	 => array(
											'blog-1' => array(
												'small'	 => array(
													'height' => 70,
													'src'	 => MODULAR_IMAGES . '/image-picker/blog-style-1.png'
												),
												'large'	 => array(
													'height' => 208,
													'src'	 => MODULAR_IMAGES . '/image-picker/blog-style-1.png'
												),
											),
											'blog-2' => array(
												'small'	 => array(
													'height' => 70,
													'src'	 => MODULAR_IMAGES . '/image-picker/blog-style-2.png'
												),
												'large'	 => array(
													'height' => 208,
													'src'	 => MODULAR_IMAGES . '/image-picker/blog-style-2.png'
												),
											)
										),
									),
									'header_title'			 => array(
										'type'	 => 'text',
										'label'	 => esc_html__( 'Blog Title', 'modular' ),
										'value'	 => esc_html__( 'The Future of Web Design is Hidden in the History of Architecture', 'modular' ),
										'desc'	 => esc_html__( 'Add your blog hero title', 'modular' )
									),
									'header_desc'			 => array(
										'type'	 => 'text',
										'label'	 => esc_html__( 'Blog Description', 'modular' ),
										'value'	 => esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'modular' ),
										'desc'	 => esc_html__( 'Add your blog hero description', 'modular' )
									),
									'header_image'			 => array(
										'label'	 => esc_html__( 'Header Image', 'modular' ),
										'desc'	 => esc_html__( 'Upload a header image', 'modular' ),
										'help'	 => esc_html__( 'This default header image will be used for all your posts.', 'modular' ),
										'type'	 => 'upload'
									),
									'header_overlay_color'	 => array(
										'label'	 => esc_html__( '', 'modular' ),
										'desc'	 => esc_html__( 'Select the image overlay color', 'modular' ),
										'help'	 => esc_html__( '', 'modular' ),
										'type'	 => 'rgba-color-picker'
									),
								)
							),
						)
					)
				)
			),
			'blog'				 => array(
				'title'		 => esc_html__( 'Blog Settings', 'modular' ),
				'type'		 => 'box',
				'options'	 => array(
					'blog_display_settings' => array(
						'type'			 => 'multi',
						'label'			 => false,
						'attr'			 => array(
							'class' => 'fw-option-type-multi-show-borders',
						),
						'inner-options'	 => array(
							'post_date'			 => array(
								'label'			 => esc_html__( 'Post Date', 'modular' ),
								'desc'			 => esc_html__( 'Show post date?', 'modular' ),
								'type'			 => 'switch',
								'right-choice'	 => array(
									'value'	 => 'yes',
									'label'	 => esc_html__( 'Yes', 'modular' )
								),
								'left-choice'	 => array(
									'value'	 => 'no',
									'label'	 => esc_html__( 'No', 'modular' )
								),
								'value'			 => 'yes',
							),
							'post_author'		 => array(
								'label'			 => esc_html__( 'Post Author', 'modular' ),
								'desc'			 => esc_html__( 'Show post author?', 'modular' ),
								'type'			 => 'switch',
								'right-choice'	 => array(
									'value'	 => 'yes',
									'label'	 => esc_html__( 'Yes', 'modular' )
								),
								'left-choice'	 => array(
									'value'	 => 'no',
									'label'	 => esc_html__( 'No', 'modular' )
								),
								'value'			 => 'yes',
							),
							'post_categories'	 => array(
								'label'			 => esc_html__( 'Post Categories', 'modular' ),
								'desc'			 => esc_html__( 'Show post categories?', 'modular' ),
								'type'			 => 'switch',
								'right-choice'	 => array(
									'value'	 => 'yes',
									'label'	 => esc_html__( 'Yes', 'modular' )
								),
								'left-choice'	 => array(
									'value'	 => 'no',
									'label'	 => esc_html__( 'No', 'modular' )
								),
								'value'			 => 'yes',
							),
							'post_comment'		 => array(
								'label'			 => esc_html__( 'Post Comment', 'modular' ),
								'desc'			 => esc_html__( 'Show post Comment?', 'modular' ),
								'type'			 => 'switch',
								'right-choice'	 => array(
									'value'	 => 'yes',
									'label'	 => esc_html__( 'Yes', 'modular' )
								),
								'left-choice'	 => array(
									'value'	 => 'no',
									'label'	 => esc_html__( 'No', 'modular' )
								),
								'value'			 => 'yes',
							),
						),
					),
				),
			),
		),
	),
);
