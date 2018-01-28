<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'footer_settings' => array(
        'title' => esc_html__('Footer Settings', 'modular'),
        'type' => 'tab',
        'options' => array(
            'footer_box' => array(
                'title' => esc_html__('Footer Settings', 'modular'),
                'type' => 'box',
                'options' => array(
                    'footer_style_settings' => array(
                        'type' => 'multi-picker',
                        'size' => 'large',
                        'label' => false,
                        'desc' => false,
                        'picker' => array(
                            'footer_style' => array(
                                'label' => esc_html__('Footer Style', 'modular'),
                                'type' => 'image-picker',
                                'size' => 'large',
                                'value' => esc_html__('footer-1', 'modular'),
                                'desc' => esc_html__('Select your footer style', 'modular'),
                                'choices' => array(
                                    'footer-1' => array(
                                        'small' => array(
                                            'height' => 70,
                                            'src' => MODULAR_IMAGES . '/image-picker/footer-style-1.png'
                                        ),
                                        'large' => array(
                                            'height' => 214,
                                            'src' => MODULAR_IMAGES . '/image-picker/footer-style-1.png'
                                        ),
                                    ),
                                    'footer-2' => array(
                                        'small' => array(
                                            'height' => 70,
                                            'src' => MODULAR_IMAGES . '/image-picker/footer-style-2.png'
                                        ),
                                        'large' => array(
                                            'height' => 214,
                                            'src' => MODULAR_IMAGES . '/image-picker/footer-style-2.png'
                                        ),
                                    )
                                ),
                            ),
                        ),
                        'choices' => array(
                            'footer-2' => array(
                                'footer_heading' => array(
                                    'label' => esc_html__('Copyright Text', 'modular'),
                                    'type' => 'text',
                                    'value' => esc_html__('Copyright 2016. All Rights Reserved', 'modular'),
                                    'desc' => esc_html__('Add footer copyright text in here', 'modular'),
                                ),
                                'footer_socials' => array(
                                    'type' => 'addable-popup',
                                    'label' => esc_html__('Social Links', 'modular'),
                                    'desc' => esc_html__('Add your social profiles', 'modular'),
                                    'limit' => '4',
                                    'template' => '{{=social_name}}',
                                    'popup-options' => array(
                                        'social_name' => array(
                                            'label' => esc_html__('Name', 'modular'),
                                            'desc' => esc_html__('Enter a name (it is for internal use and will not appear on the front end)', 'modular'),
                                            'type' => 'text',
                                            'value' => esc_html__('Facebook', 'modular'),
                                        ),
                                        'icon' => array(
                                            'type' => 'new-icon',
                                            'value' => esc_html__('ti-facebook', 'modular'),
                                            'label' => esc_html__('Social Icon', 'modular')
                                        ),
                                        'link' => array(
                                            'label' => esc_html__('Link', 'modular'),
                                            'desc' => wp_kses_post('Enter your social URL link ( dont forget to add <b>http://</b>)', 'modular'),
                                            'type' => 'text',
                                            'value' => '#',
                                        )
                                    ),
                                ),
                                'custom_links' => array(
                                    'type' => 'addable-popup',
                                    'label' => esc_html__('Custom Links', 'modular'),
                                    'desc' => esc_html__('Add your footer custom links', 'modular'),
                                    'limit' => '4',
                                    'template' => '{{=title}}',
                                    'popup-options' => array(
                                        'title' => array(
                                            'label' => esc_html__('Title', 'modular'),
                                            'desc' => esc_html__('Enter the footer link title', 'modular'),
                                            'type' => 'text',
                                            'value' => esc_html__('Terms and Conditions', 'modular'),
                                        ),
                                        'link' => array(
                                            'label' => esc_html__('Link URL', 'modular'),
                                            'desc' => esc_html__('Enter your footer link URL', 'modular'),
                                            'type' => 'text',
                                            'value' => '#',
                                        ),
                                        'target' => array(
                                            'type' => 'switch',
                                            'label' => esc_html__('Open Link in New Window', 'modular'),
                                            'desc' => esc_html__('Select here if you want to open the linked page in a new window', 'modular'),
                                            'right-choice' => array(
                                                'value' => '_blank',
                                                'label' => esc_html__('Yes', 'modular'),
                                            ),
                                            'left-choice' => array(
                                                'value' => '_self',
                                                'label' => esc_html__('No', 'modular'),
                                            ),
                                        ),
                                    ),
                                ),
                            )
                        ),
                        'show_borders' => false,
                    ),
                    'footer_logo' => array(
                        'type' => 'upload',
                        'label' => esc_html__('Footer Logo', 'modular'),
                    )
                ),
            ),
        ),
    ),
);
