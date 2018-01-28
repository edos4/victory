<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'video' => array(
	'label' => esc_html__('Video', 'modular'),
	'desc' => esc_html__('Enter Youtube or Vimeo video URL', 'modular'),
	'type' => 'text',
	'value' => 'https://www.youtube.com/watch?v=6v2L2UGZJAM'
    ),
    'icon' => array(
	'label' => __('Image Picker', 'modular'),
	'type' => 'image-picker',
	'value' => '',
	'desc' => __('Select Button Style.', 'modular'),
	'choices' => array(
	    'choice-1' => array(
		'small' => array(
		    'height' => 70,
		    'src' => MODULAR_IMAGES . '/image-picker/popup/1.jpg'
		),
		'large' => array(
		    'height' => 110,
		    'src' => MODULAR_IMAGES . '/image-picker/popup/1.jpg'
		),
	    ),
	    'choice-2' => array(
		'small' => array(
		    'height' => 70,
		    'src' => MODULAR_IMAGES . '/image-picker/popup/2.jpg'
		),
		'large' => array(
		    'height' => 110,
		    'src' => MODULAR_IMAGES . '/image-picker/popup/2.jpg'
		),
	    ),
	    'choice-3' => array(
		'small' => array(
		    'height' => 70,
		    'src' => MODULAR_IMAGES . '/image-picker/popup/3.jpg'
		),
		'large' => array(
		    'height' => 110,
		    'src' => MODULAR_IMAGES . '/image-picker/popup/3.jpg'
		),
	    ),
	    'choice-4' => array(
		'small' => array(
		    'height' => 70,
		    'src' => MODULAR_IMAGES . '/image-picker/popup/4.jpg'
		),
		'large' => array(
		    'height' => 110,
		    'src' => MODULAR_IMAGES . '/image-picker/popup/4.jpg'
		),
	    ),
	),
    ),
    'title' => array(
	'type' => 'text',
	'label' => esc_html__('Title', 'modular'),
	'desc' => esc_html__('This is for only Internal Use and button style 4', 'modular'),
    ),
    'centered' => array(
	'type' => 'switch',
	'label' => esc_html__('Centered', 'modular'),
	'desc' => esc_html__('Make this heading center', 'modular'),
    ),
);
