<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'counter_style_settings' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'counter_style' => array(
                'label' => esc_html__('Funfact Style', 'modular'),
                'type' => 'image-picker',
                'value' => 'counter_one',
                'desc' => false,
                'choices' => array(
                    'counter_one' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => MODULAR_IMAGES . '/image-picker/count-1.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => MODULAR_IMAGES . '/image-picker/count-1.png'
                        ),
                    ),
                    'counter_two' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => MODULAR_IMAGES . '/image-picker/count-2.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => MODULAR_IMAGES . '/image-picker/count-2.png'
                        ),
                    ),
                ),
            ),
        ),
        'choices' => array(
            'counter_one' => array(
                'funfacts' => array(
                    'type' => 'addable-popup',
                    'label' => esc_html__('Funfact Details', 'modular'),
                    'desc' => esc_html__('Add Funfact items', 'modular'),
                    'template' => '{{-title}}',
                    'popup-options' => array(
                        'title' => array(
                            'type' => 'text',
                            'label' => esc_html__('Title', 'modular'),
                            'value' => esc_html__('Clients', 'modular'),
                        ),
                        'number' => array(
                            'type' => 'text',
                            'label' => esc_html__('Number', 'modular'),
                            'value' => esc_html__('1,234,567', 'modular'),
                        )
                    ),
                ),
            ),
            'counter_two' => array(
                'funfacts' => array(
                    'type' => 'addable-popup',
                    'label' => esc_html__('Funfact Details', 'modular'),
                    'desc' => esc_html__('Add Funfact items', 'modular'),
                    'template' => '{{-title}}',
                    'popup-options' => array(
                        'title' => array(
                            'type' => 'text',
                            'label' => esc_html__('Title', 'modular'),
                            'value' => esc_html__('Clients', 'modular'),
                        ),
                        'number' => array(
                            'type' => 'text',
                            'label' => esc_html__('Number', 'modular'),
                            'value' => esc_html__('1,234,567', 'modular'),
                        ),
                        'icon' => array(
                            'type' => 'new-icon',
                            'label' => esc_html__('Icon', 'modular'),
                            'value' => esc_html__('ti-user', 'modular'),
                        ),
                    ),
                ),
            ),
        ),
        'show_borders' => false,
    ),
);
