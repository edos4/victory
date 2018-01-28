<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'partner_style' => array(
        'label' => esc_html__('Partner Style', 'modular'),
        'type' => 'image-picker',
        'size' => 'large',
        'value' => esc_html__('partner-1','modular'),
        'desc' => esc_html__('Select Partner style', 'modular'),
        'choices' => array(
            'partner-1' => array(
                'small' => array(
                    'height' => 70,
                    'src' => MODULAR_IMAGES . '/image-picker/partner-1.png'
                ),
                'large' => array(
                    'height' => 214,
                    'src' => MODULAR_IMAGES . '/image-picker/partner-1.png'
                ),
            ),
            'partner-2' => array(
                'small' => array(
                    'height' => 70,
                    'src' => MODULAR_IMAGES . '/image-picker/partner-2.png'
                ),
                'large' => array(
                    'height' => 214,
                    'src' => MODULAR_IMAGES . '/image-picker/partner-2.png'
                ),
            ),
            'partner-3' => array(
                'small' => array(
                    'height' => 70,
                    'src' => MODULAR_IMAGES . '/image-picker/partner-3.png'
                ),
                'large' => array(
                    'height' => 214,
                    'src' => MODULAR_IMAGES . '/image-picker/partner-3.png'
                ),
            )
        ),
    ),
    'title' => array(
        'label' => esc_html__('Main Top Title', 'modular'),
        'type' => 'text',
        'value' => esc_html__('Trusted by Biggest Brands', 'modular'),
        'desc' => esc_html__('Add your partner main top title.', 'modular'),
    ),
    'partners' => array(
        'type' => 'addable-popup',
        'size' => 'large',
        'label' => esc_html__('Partner Brand Image', 'modular'),
        'value' => esc_html__('Image 1', 'modular'),
        'desc' => esc_html__(' Use maximum 4 in one row.', 'modular'),
        'template' => '{{- title }}',
        'add-button-text' => esc_html__('Add Partner', 'modular'),
        'popup-options' => array(
            'title' => array(
                'label' => esc_html__('Title', 'modular'),
                'type' => 'text',
                'desc' => esc_html__('Add your partner title but its does not show in the front-end', 'modular'),
            ),
            'image' => array(
                'label' => esc_html__('Image', 'modular'),
                'type' => 'upload',
                'desc' => esc_html__('Upload your partner brand logo image', 'modular'),
            ),
        ),
    ),
);
