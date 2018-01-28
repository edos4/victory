<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'icon' => array(
	'type' => 'new-icon',
	'label' => __('Icon', 'modular')
    ),
    'title' => array(
	'type' => 'text',
	'label' => __('Title', 'modular'),
	'desc' => __('Icon title', 'modular'),
    )
);
