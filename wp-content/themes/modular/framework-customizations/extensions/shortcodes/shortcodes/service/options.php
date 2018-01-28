<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'service_style' => array(
	'label' => esc_html__('Service Box Style', 'modular'),
	'desc' => esc_html__('Choose service style', 'modular'),
	'type' => 'image-picker',
	'attr' => array(
	    'class' => 'custom-class', 'data-foo' => 'bar'),
	'value' => 'service-1',
	'choices' => array(
	    'service-1' => array(
		'small' => array(
		    'height' => 70,
		    'src' => MODULAR_IMAGES . '/image-picker/service-style-1.png'
		),
		'large' => array(
		    'height' => 214,
		    'src' => MODULAR_IMAGES . '/image-picker/service-style-1.png'
		),
	    ),
	    'service-2' => array(
		'small' => array(
		    'height' => 70,
		    'src' => MODULAR_IMAGES . '/image-picker/service-style-2.png'
		),
		'large' => array(
		    'height' => 214,
		    'src' => MODULAR_IMAGES . '/image-picker/service-style-2.png'
		),
	    ),
	    'service-3' => array(
		'small' => array(
		    'height' => 70,
		    'src' => MODULAR_IMAGES . '/image-picker/service-style-3.png'
		),
		'large' => array(
		    'height' => 214,
		    'src' => MODULAR_IMAGES . '/image-picker/service-style-3.png'
		),
	    ),
	    'service-4' => array(
		'small' => array(
		    'height' => 70,
		    'src' => MODULAR_IMAGES . '/image-picker/service-style-4.png'
		),
		'large' => array(
		    'height' => 214,
		    'src' => MODULAR_IMAGES . '/image-picker/service-style-4.png'
		),
	    ),
	    'service-5' => array(
		'small' => array(
		    'height' => 70,
		    'src' => MODULAR_IMAGES . '/image-picker/service-style-5.png'
		),
		'large' => array(
		    'height' => 214,
		    'src' => MODULAR_IMAGES . '/image-picker/service-style-5.png'
		),
	    ),
	),
    ),
    'title' => array(
	'type' => 'text',
	'label' => esc_html__('Title of the Box', 'modular'),
	'desc' => esc_html__('Enter the service title', 'modular'),
	'value' => esc_html__('Prototyping', 'modular'),
    ),
    'title_color' => array(
	'type' => 'color-picker',
	'label' => esc_html__('Title Color', 'modular'),
	'value' => '#000000',
	'desc' => esc_html__('Select the service title color', 'modular')
    ),
    'content' => array(
	'label' => esc_html__('Box Description', 'modular'),
	'type' => 'textarea',
	'desc' => esc_html__('Enter the service description', 'modular'),
	'value' => esc_html__('A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.', 'modular'),
    ),
    'content_color' => array(
	'type' => 'color-picker',
	'label' => esc_html__('Description Color', 'modular'),
	'value' => '#777777',
	'desc' => esc_html__('Select the service description color', 'modular')
    ),
    'icon' => array(
	'type' => 'new-icon',
	'label' => esc_html__('Box Main Icon', 'modular'),
	'value' => 'ti-vector',
	'desc' => esc_html__('Select your service icon without service style 1', 'modular')
    )
);
