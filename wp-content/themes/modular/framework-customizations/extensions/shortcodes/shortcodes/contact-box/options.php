<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'contact_box' => array(
        'type' => 'addable-popup',
        'label' => esc_html__('Contact Box', 'modular'),
        'desc' => esc_html__('Add your contact box items', 'modular'),
        'template' => '{{- title}}',
        'size' => 'medium',
        'add-button-text' => esc_html__('Add', 'modular'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'type' => 'text',
                'title' => esc_html__('Title', 'modular'),
                'value' => esc_html__('Information 1', 'modular'),
                'desc' => esc_html__('Box information title but it does not appears in the front-end', 'modular'),
            ),
            'box_info' => array(
                'type' => 'fw-multi-inline',
                'label' => esc_html__('Box Informatons', 'modular'),
                'desc' => esc_html__('This is the space between the element and the surrounding elements.', 'modular'),
                'value' => array(
                    'fast_text' => esc_html__('E-mail', 'modular'),
                    'last_text' => esc_html__('contact@company.com', 'modular')
                ),
                'fw_multi_options' => array(
                    'fast_text' => array(
                        'type' => 'short-text',
                        'title' => esc_html__('Title', 'modular'),
                    ),
                    'last_text' => array(
                        'type' => 'text',
                        'title' => esc_html__('Information', 'modular'),
                    ),
                )
            ),
        ),
    ),
);
