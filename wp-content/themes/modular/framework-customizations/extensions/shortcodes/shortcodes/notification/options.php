<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'type' => array(
        'label' => __('Type', 'modular'),
        'desc' => __('Select the notification type', 'modular'),
        'value' => 'fw-alert-info',
        'type' => 'image-picker',
        'choices' => array(
            'success' => array(
                'small' => array(
                    'height' => 50,
                    'src' => MODULAR_IMAGES . '/image-picker/notification-congratulation.jpg',
                    'title' => __('Congratulations', 'modular')
                ),
            ),
            'info' => array(
                'small' => array(
                    'height' => 50,
                    'src' => MODULAR_IMAGES . '/image-picker/notification-information.jpg',
                    'title' => __('Information', 'modular')
                ),
            ),
            'warning' => array(
                'small' => array(
                    'height' => 50,
                    'src' => MODULAR_IMAGES . '/image-picker/notification-warning.jpg',
                    'title' => __('Alert', 'modular')
                ),
            ),
            'danger' => array(
                'small' => array(
                    'height' => 50,
                    'src' => MODULAR_IMAGES . '/image-picker/notification-error.jpg',
                    'title' => __('Error', 'modular')
                ),
            ),
        ),
    ),
    'message' => array(
        'label' => __('Message', 'modular'),
        'desc' => __('Notification message', 'modular'),
        'type' => 'text',
        'value' => __('Message!', 'modular'),
    ),
);
