<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'image' => array(
        'label' => esc_html__('Image', 'modular'),
        'desc' => esc_html__('Upload your image', 'modular'),
        'type' => 'upload'
    ),
    'title' => array(
        'label' => esc_html__('Title', 'modular'),
        'desc' => esc_html__('Add your title', 'modular'),
        'type' => 'text',
        'value' => esc_html__('Prototyping','modular')
    ),
    'desc' => array(
        'label' => esc_html__('Description', 'modular'),
        'desc' => esc_html__('Add your description', 'modular'),
        'type' => 'textarea',
        'value' => esc_html__('A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.','modular')
    )
);
