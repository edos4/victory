<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'video' => array(
        'label' => __('Video', 'modular'),
        'desc' => __('Enter Youtube or Vimeo video URL', 'modular'),
        'type' => 'text',
    ),
    'width' => array(
        'label' => __('Width', 'modular'),
        'desc' => __('Video width in pixels', 'modular'),
        'type' => 'short-text',
        'value' => '',
    ),
    'height' => array(
        'label' => __('Height', 'modular'),
        'desc' => __('Video height in pixels', 'modular'),
        'type' => 'short-text',
        'value' => '',
    ),
    'frame' => array(
        'type' => 'switch',
        'value' => '',
        'label' => __('Video Border', 'modular'),
        'desc' => __('Add a border to your video?', 'modular'),
        'left-choice' => array(
            'value' => '',
            'label' => __('No', 'modular'),
        ),
        'right-choice' => array(
            'value' => 'fw-video-frame',
            'label' => __('Yes', 'modular'),
        )
    ),
    'class' => array(
        'attr' => array('class' => 'border-bottom-none'),
        'label' => __('Custom Class', 'modular'),
        'desc' => __('Enter custom CSS class', 'modular'),
        'type' => 'text',
        'help' => __('You can use this class to further style this shortcode.', 'modular'),
        'value' => '',
    ),
);
