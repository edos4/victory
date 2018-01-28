<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'button_settings' => array(
	'type' => 'addable-popup',
	'size' => 'large',
	'label' => esc_html__('Button', 'modular'),
	'desc' => esc_html__('Add your button', 'modular'),
	'template' => 'Button : {{- label }}',
	'popup-options' => array(
	    'style' => array(
		'label' => esc_html__('Style', 'modular'),
		'desc' => esc_html__('Choose button style', 'modular'),
		'type' => 'image-picker',
		'value' => '',
		'choices' => array(
		    'default' => array(
			'small' => array(
			    'height' => 70,
			    'src' => MODULAR_IMAGES . '/image-picker/button-style1.png'
			),
			'large' => array(
			    'height' => 208,
			    'src' => MODULAR_IMAGES . '/image-picker/button-style1.png'
			),
		    ),
		    'primary' => array(
			'small' => array(
			    'height' => 70,
			    'src' => MODULAR_IMAGES . '/image-picker/button-style2.png'
			),
			'large' => array(
			    'height' => 208,
			    'src' => MODULAR_IMAGES . '/image-picker/button-style2.png'
			),
		    ),
		    'download' => array(
			'small' => array(
			    'height' => 70,
			    'src' => MODULAR_IMAGES . '/image-picker/button-style3.png'
			),
			'large' => array(
			    'height' => 208,
			    'src' => MODULAR_IMAGES . '/image-picker/button-style3.png'
			),
		    ),
		),
	    ),
	    'label' => array(
		'label' => esc_html__('Button Label', 'modular'),
		'desc' => esc_html__('This is the text that appears on your button', 'modular'),
		'type' => 'text',
		'value' => esc_html__('Read More', 'modular')
	    ),
	    'link' => array(
		'label' => esc_html__('Button Link', 'modular'),
		'desc' => esc_html__('Where should your button link to', 'modular'),
		'type' => 'text',
		'value' => '#'
	    ),
	    'target' => array(
		'type' => 'switch',
		'label' => esc_html__('Open Link in New Window', 'modular'),
		'desc' => esc_html__('Select here if you want to open the linked page in a new window', 'modular'),
		'right-choice' => array(
		    'value' => '_blank',
		    'label' => esc_html__('Yes', 'modular'),
		),
		'left-choice' => array(
		    'value' => '_self',
		    'label' => esc_html__('No', 'modular'),
		),
	    ),
	    'size' => array(
		'attr' => array('class' => 'xs-radio-inline'),
		'label' => esc_html__('Size', 'modular'),
		'desc' => esc_html__('Choose a size for your button', 'modular'),
		'type' => 'radio',
		'choices' => array(
		    'bttn-large' => esc_html__('Large', 'modular'),
		    'bttn-med' => esc_html__('Medium', 'modular'),
		    'bttn-small' => esc_html__('Small', 'modular'),
		)
	    ),
	    'background' => array(
		'label' => esc_html__('Background', 'modular'),
		'desc' => esc_html__('Select a color name for your button background', 'modular'),
		'attr' => array('class' => 'xs-radio-inline'),
		'type' => 'radio',
		'choices' => array(
		    'bttn-white' => esc_html__('White', 'modular'),
		    'bttn-light' => esc_html__('Light', 'modular'),
		    'bttn-black' => esc_html__('Black', 'modular'),
		    'bttn-blue' => esc_html__('Blue', 'modular'),
		    'bttn-green' => esc_html__('Green', 'modular'),
		)
	    ),
	    'scale' => array(
		'type' => 'switch',
		'label' => esc_html__('Hover Scale Effect', 'modular'),
		'desc' => esc_html__('Do you want to use button hover scale effect?', 'modular'),
		'right-choice' => array(
		    'value' => 'bttn-scale',
		    'label' => esc_html__('Yes', 'modular'),
		),
		'left-choice' => array(
		    'value' => '',
		    'label' => esc_html__('No', 'modular'),
		),
	    ),
	    'radius' => array(
		'type' => 'switch',
		'label' => esc_html__('Border Radius', 'modular'),
		'desc' => esc_html__('Do you want to use button border radius style?', 'modular'),
		'right-choice' => array(
		    'value' => 'bttn75',
		    'label' => esc_html__('Yes', 'modular'),
		),
		'left-choice' => array(
		    'value' => '',
		    'label' => esc_html__('No', 'modular'),
		),
	    ),
	    'shadow' => array(
		'type' => 'switch',
		'label' => esc_html__('Button Shadow', 'modular'),
		'desc' => esc_html__('Do you want to use button background shadow?', 'modular'),
		'right-choice' => array(
		    'value' => 'bttn-shadow',
		    'label' => esc_html__('Yes', 'modular'),
		),
		'left-choice' => array(
		    'value' => '',
		    'label' => esc_html__('No', 'modular'),
		),
	    ),
	    'btn_icon_group' => array(
		'type' => 'group',
		'options' => array(
		    'icon' => array(
			'type' => 'new-icon',
			'label' => __('Icon', 'modular')
		    ),
		    'icon_position' => array(
			'type' => 'switch',
			'label' => esc_html__('', 'modular'),
			'desc' => esc_html__('Choose the icon position', 'modular'),
			'right-choice' => array(
			    'value' => 'pull-right',
			    'label' => esc_html__('Right', 'modular'),
			),
			'left-choice' => array(
			    'value' => '',
			    'label' => esc_html__('Left', 'modular'),
			),
		    ),
		)
	    )
	)
    ),
    'btn_alignment' => array(
	'label' => esc_html__('Alignment', 'modular'),
	'desc' => esc_html__('Choose button or image alignment', 'modular'),
	'type' => 'image-picker',
	'value' => '',
	'choices' => array(
	    '' => array(
		'small' => array(
		    'height' => 50,
		    'src' => MODULAR_IMAGES . '/image-picker/no-align.jpg',
		    'title' => esc_html__('None', 'modular')
		),
	    ),
	    'text-left' => array(
		'small' => array(
		    'height' => 50,
		    'src' => MODULAR_IMAGES . '/image-picker/left-position.jpg',
		    'title' => esc_html__('Left', 'modular')
		),
	    ),
	    'text-center' => array(
		'small' => array(
		    'height' => 50,
		    'src' => MODULAR_IMAGES . '/image-picker/center-position.jpg',
		    'title' => esc_html__('Center', 'modular')
		),
	    ),
	    'text-right' => array(
		'small' => array(
		    'height' => 50,
		    'src' => MODULAR_IMAGES . '/image-picker/right-position.jpg',
		    'title' => esc_html__('Right', 'modular')
		),
	    ),
	),
    ),
    'class' => array(
	'label' => esc_html__('Custom Class', 'modular'),
	'desc' => esc_html__('Enter custom CSS class', 'modular'),
	'help' => esc_html__('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /altron-child/style.css', 'modular'),
	'type' => 'text',
	'value' => '',
    ),
);
