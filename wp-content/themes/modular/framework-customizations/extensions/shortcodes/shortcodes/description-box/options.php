<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'description_box' => array(
	'type' => 'addable-popup',
	'label' => esc_html__('Description Box', 'modular'),
	'desc' => esc_html__('Add description box items', 'modular'),
	'template' => '{{-title }}',
	'popup-title' => null,
	'size' => 'large',
	'add-button-text' => esc_html__('Add Items', 'modular'),
	'popup-options' => array(
	    'title' => array(
		'type' => 'text',
		'label' => esc_html__('Title of the Box', 'modular'),
		'desc' => esc_html__('Enter the service title', 'modular'),
		'value' => esc_html__('Prototyping', 'modular'),
	    ),
	    'title_color' => array(
		'type' => 'color-picker',
		'label' => esc_html__('Title Color', 'modular'),
		'value' => '#ffffff',
		'desc' => esc_html__('Select the service title color', 'modular')
	    ),
	    'content' => array(
		'label' => esc_html__('Description', 'modular'),
		'type' => 'textarea',
		'desc' => esc_html__('Enter the service description', 'modular'),
		'value' => esc_html__('A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.', 'modular'),
	    ),
	    'content_color' => array(
		'type' => 'color-picker',
		'label' => esc_html__('Description Color', 'modular'),
		'value' => '#ffffff',
		'desc' => esc_html__('Select the service content color', 'modular')
	    ),
	    'box_icon' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
		    'status' => array(
			'label' => esc_html__('Box Icon', 'modular'),
			'desc' => esc_html__('Do you want to use icon of the box?', 'modular'),
			'type' => 'switch',
			'right-choice' => array(
			    'value' => 'yes',
			    'label' => esc_html__('YES', 'modular')
			),
			'left-choice' => array(
			    'value' => 'no',
			    'label' => esc_html__('NO', 'modular')
			),
		    )
		),
		'choices' => array(
		    'yes' => array(
			'icon' => array(
			    'type' => 'new-icon',
			    'value' => 'ti-vector'
			),
			'icon_color' => array(
			    'type' => 'color-picker',
			    'label' => esc_html__('Icon Color', 'modular'),
			    'value' => '#ffffff',
			    'desc' => esc_html__('Select the service title color', 'modular')
			),
		    ),
		    'no' => array(
		    ),
		),
		'show_borders' => false,
	    ),
	)
    )
);
