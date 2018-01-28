<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'title' => array(
        'label' => esc_html__('Title', 'modular'),
        'desc' => esc_html__('Add your content title', 'modular'),
        'type' => 'text',
        'value' => esc_html__('Design','modular')
    ),
    'description' => array(
        'label' => esc_html__('Description', 'modular'),
        'desc' => esc_html__('Add your content description', 'modular'),
        'type' => 'textarea',
        'value' => esc_html__('But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was.','modular')
    ),
);
