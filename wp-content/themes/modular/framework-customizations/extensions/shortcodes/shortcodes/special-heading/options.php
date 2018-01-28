<?php

if (!defined('FW')) {
    die('Forbidden');
}
$global_title_font = fw_get_db_settings_option('heading_title');
$global_subtitle_font = fw_get_db_settings_option('heading_subtitle');
$options = array(
    'genarel-options' => array(
	'title' => __('General', 'modular'),
	'type' => 'tab',
	'options' => array(
	    'xs_id' => array(
		'type' => 'unique',
		'length' => 8
	    ),
	    'heading_group' => array(
		'type' => 'group',
		'attr' => array('class' => 'xs-group'),
		'options' => array(
		    'html_label' => array(
			'type' => 'html',
			'value' => '',
			'label' => __('Heading', 'modular'),
			'html' => '',
		    ),
		    'title' => array(
			'type' => 'text',
			'label' => false,
			'desc' => esc_html__('Write the heading title content', 'modular'),
		    ),
		    'heading' => array(
			'type' => 'short-select',
			'label' => false,
			'value' => 'h3',
			'choices' => array(
			    'h1' => 'H1',
			    'h2' => 'H2',
			    'h3' => 'H3',
			    'h4' => 'H4',
			    'h5' => 'H5',
			    'h6' => 'H6',
			)
		    ),
		    'heading_typography' => array(
			'type' => 'popup',
			'attr' => array('class' => 'xs-popup-button'),
			'label' => false,
			'desc' => __('Optional.', 'modular'),
			'popup-title' => __('Heading Typography', 'modular'),
			'button' => __('Heading Style', 'modular'),
			'popup-title' => null,
			'size' => 'medium', // small, medium, large
			'popup-options' => array(
			    'heading' => array(
				'type' => 'typography-v2',
				'value' => array(
				    'family' => $global_title_font['family'],
				    'style' => $global_title_font['style'],
				    'weight' => $global_title_font['weight'],
				    'variation' => $global_title_font['variation'],
				    'subset' => $global_title_font['subset'],
				    'line-height' => '',
				    'letter-spacing' => $global_title_font['letter-spacing'],
				    'color' => $global_title_font['color']
				),
				'components' => array(
				    'family' => true,
				    'style' => true,
				    'weight' => true,
				    'size' => false,
				    'line-height' => true,
				    'letter-spacing' => true,
				    'color' => true
				),
				'label' => false,
			    ),
			    'heading_sprintf' => array(
				'type' => 'typography-v2',
				'value' => array(
				    'family' => '',
				    'style' => $global_title_font['style'],
				    'weight' => $global_title_font['weight'],
				    'variation' => $global_title_font['variation'],
				    'subset' => $global_title_font['subset'],
				    'color' => ''
				),
				'components' => array(
				    'family' => true,
				    'style' => true,
				    'weight' => true,
				    'size' => false,
				    'line-height' => false,
				    'letter-spacing' => false,
				    'color' => true
				),
				'label' => esc_html__('Styling', 'modular'),
				'desc' => esc_html__('This is for Extra heading style. like: hello %sWorld%s', 'modular'),
			    ),
			),
		    ),
		),
	    ),
	    'subheading_group' => array(
		'type' => 'group',
		'attr' => array('class' => 'xs-group'),
		'options' => array(
		    'html_label' => array(
			'type' => 'html',
			'value' => '',
			'label' => __('Sub Heading', 'modular'),
			'html' => '',
		    ),
		    'subtitle' => array(
			'type' => 'text',
			'label' => false,
			'desc' => esc_html__('Write the heading subtitle content', 'modular'),
		    ),
		    'subheading' => array(
			'type' => 'short-select',
			'label' => false,
			'value' => 'h6',
			'choices' => array(
			    'h1' => 'H1',
			    'h2' => 'H2',
			    'h3' => 'H3',
			    'h4' => 'H4',
			    'h5' => 'H5',
			    'h6' => 'H6',
			)
		    ),
		    'subheading_typography' => array(
			'attr' => array('class' => 'xs-popup-button'),
			'type' => 'popup',
			'label' => false,
			'desc' => __('Optional .', 'modular'),
			'popup-title' => __('Heading Typography', 'modular'),
			'button' => __('Subheading Styles', 'modular'),
			'popup-title' => null,
			'size' => 'medium', // small, medium, large
			'popup-options' => array(
			    'subheading' => array(
				'type' => 'typography-v2',
				'value' => array(
				    'family' => $global_subtitle_font['family'],
				    'style' => $global_subtitle_font['style'],
				    'weight' => $global_subtitle_font['weight'],
				    'variation' => $global_subtitle_font['variation'],
				    'subset' => $global_subtitle_font['subset'],
				    'line-height' => '',
				    'letter-spacing' => $global_subtitle_font['letter-spacing'],
				    'color' => $global_subtitle_font['color']
				),
				'components' => array(
				    'family' => true,
				    'style' => true,
				    'weight' => true,
				    'size' => false,
				    'line-height' => true,
				    'letter-spacing' => true,
				    'color' => true
				),
				'label' => false,
			    ),
			),
		    ),
		),
	    ),
	),
    ),
    'styles' => array(
	'title' => __('Styles', 'modular'),
	'type' => 'tab',
	'options' => array(
	    'text_center' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
		    'centered' => array(
			'type' => 'switch',
			'value' => 'no',
			'label' => esc_html__('Centered', 'modular'),
			'desc' => esc_html__('Make this heading center', 'modular'),
			'left-choice' => array(
			    'value' => 'no',
			    'label' => __('No', 'modular'),
			),
			'right-choice' => array(
			    'value' => 'yes',
			    'label' => __('Yes', 'modular'),
			)
		    ),
		),
		'choices' => array(
		    'yes' => array(
			'title_width' => array(
			    'type' => 'slider',
			    'properties' => array(
				'min' => 40,
				'max' => 100,
			    ),
			    'value' => 50,
			    'label' => esc_html__('Max Width', 'modular'),
			    'desc' => esc_html__('Heading max with in %', 'modular'),
			),
		    ),
		)
	    ),
	    'bottom_space' => array(
		'type' => 'slider',
		'properties' => array(
		    'min' => 0,
		    'max' => 100,
		),
		'value' => 50,
		'label' => esc_html__('Bottom Space', 'modular'),
		'desc' => esc_html__('Heading bottom space', 'modular'),
	    ),
	),
    ),
    'xs_responsive_options' => array(
	'title' => __('Responsive', 'modular'),
	'type' => 'tab',
	'options' => array(
	    'display_desktop' => array(
		'type' => 'switch',
		'value' => 'yes',
		'label' => __('Desktop', 'modular'),
		'desc' => __('Display this on desktop?', 'modular'),
		'help' => __('Applies to devices with the resolution higher then 1200px (desktops and laptops)', 'modular'),
		'left-choice' => array(
		    'value' => 'no',
		    'label' => __('No', 'modular'),
		),
		'right-choice' => array(
		    'value' => 'yes',
		    'label' => __('Yes', 'modular'),
		)
	    ),
	    'display_medium' => array(
		'type' => 'switch',
		'value' => 'yes',
		'label' => __('Medium Device & Tablet Landscape', 'modular'),
		'desc' => __('Display this  on tablet landscape?', 'modular'),
		'help' => __('Applies to devices with the resolution between 992px - 1199px (Medium device and tablet landscape)', 'modular'),
		'left-choice' => array(
		    'value' => 'no',
		    'label' => __('No', 'modular'),
		),
		'right-choice' => array(
		    'value' => 'yes',
		    'label' => __('Yes', 'modular'),
		)
	    ),
	    'display_tablet' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
		    'selected' => array(
			'type' => 'switch',
			'value' => 'yes',
			'label' => __('Tablet Portrait', 'modular'),
			'desc' => __('Display this column on tablet portrait?', 'modular'),
			'help' => __('Applies to devices with the resolution between 768px - 991px (tablet portrait)', 'modular'),
			'left-choice' => array(
			    'value' => 'no',
			    'label' => __('No', 'modular'),
			),
			'right-choice' => array(
			    'value' => 'yes',
			    'label' => __('Yes', 'modular'),
			)
		    ),
		),
		'choices' => array(
		    'yes' => array(
		    ),
		)
	    ),
	    'display_phone' => array(
		'type' => 'switch',
		'value' => 'yes',
		'label' => __('Smartphone', 'modular'),
		'desc' => __('Display this on smartphone?', 'modular'),
		'help' => __('Applies to devices with the resolution up to 767px (smartphones both portrait and landscape as well as some low-resolution tablets)', 'modular'),
		'left-choice' => array(
		    'value' => 'no',
		    'label' => __('No', 'modular'),
		),
		'right-choice' => array(
		    'value' => 'yes',
		    'label' => __('Yes', 'modular'),
		)
	    ),
	)
    ),
    'custom-css-options' => array(
	'title' => __('Custom Css', 'modular'),
	'type' => 'tab',
	'options' => array(
	    'class' => array(
		'type' => 'text',
		'label' => esc_html__('Custom Class', 'modular'),
		'desc' => esc_html__('Enter a custom CSS class', 'modular'),
		'help' => esc_html__('You can use this class to further style this shortcode by adding your custom CSS.', 'modular'),
	    ),
	),
    ),
);
