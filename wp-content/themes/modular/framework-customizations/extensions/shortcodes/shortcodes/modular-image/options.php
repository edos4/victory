<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'image' => array(
        'type' => 'upload',
        'label' => esc_html__('Main Image', 'modular'),
        'desc' => esc_html__('Either upload a new, or choose an existing image from your media library', 'modular')
    ),
    'image_shadow' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'shadow' => array(
                'label' => esc_html__('Image Shadow', 'modular'),
                'desc' => esc_html__('Do you want to use image shadow?', 'modular'),
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
                'shadow_postion' => array(
                    'label' => esc_html__('Shadow Position', 'modular'),
                    'desc' => esc_html__('Select the shadow position', 'modular'),
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'type' => 'radio',
                    'choices' => array(
                        'left' => esc_html__('Left', 'modular'),
                        'right' => esc_html__('Right', 'modular'),
                    ),
                ),
                'color' => array(
                    'label' => esc_html__('Shadow Color', 'modular'),
                    'type' => 'color-picker',
                    'value' => '#cccccc',
                ),
            ),
            'off' => array(
            ),
        ),
        'show_borders' => false,
    ),
);

