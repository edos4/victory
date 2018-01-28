<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'portfolio_style_settings' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'portfolio_style' => array(
                'label' => esc_html__('Portfolio Style', 'modular'),
                'type' => 'image-picker',
                'value' => 'portfolio_style_one',
                'desc' => esc_html__('Select Portfolio style', 'modular'),
                'choices' => array(
                    'portfolio_style_one' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => MODULAR_IMAGES . '/image-picker/portfolio1.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => MODULAR_IMAGES . '/image-picker/portfolio1.png'
                        ),
                    ),
                    'portfolio_style_two' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => MODULAR_IMAGES . '/image-picker/portfolio2.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => MODULAR_IMAGES . '/image-picker/portfolio2.png'
                        ),
                    )
                ),
            ),
        ),
        'choices' => array(
            'portfolio_style_one' => array(
                'portfolios' => array(
                    'label' => esc_html__('Portfolio Items', 'modular'),
                    'popup-title' => esc_html__('Add/Edit', 'modular'),
                    'desc' => esc_html__('Here you can add, remove and edit your content.', 'modular'),
                    'type' => 'addable-popup',
                    'size' => 'large',
                    'template' => '{{=title}}',
                    'popup-options' => array(
                        'image' => array(
                            'label' => esc_html__('Image', 'modular'),
                            'desc' => esc_html__('Upload portfolio main image', 'modular'),
                            'type' => 'upload'
                        ),
                        'title' => array(
                            'label' => esc_html__('Title', 'modular'),
                            'type' => 'text',
                            'desc' => esc_html__('Add portfolio main title', 'modular'),
                            'value' => esc_html__('Cosmetics', 'modular'),
                        ),
                        'subtitle' => array(
                            'label' => esc_html__('SubTitle', 'modular'),
                            'type' => 'text',
                            'desc' => esc_html__('Add portfolio main subtitle', 'modular'),
                            'value' => esc_html__('Motionwebs', 'modular'),
                        )
                    ),
                )
            ),
            'portfolio_style_two' => array(
                'portfolios' => array(
                    'label' => esc_html__('Portfolio Items', 'modular'),
                    'popup-title' => esc_html__('Add/Edit', 'modular'),
                    'desc' => esc_html__('Here you can add, remove and edit your content.', 'modular'),
                    'type' => 'addable-popup',
                    'size' => 'large',
                    'template' => '{{=title}}',
                    'popup-options' => array(
                        'image' => array(
                            'label' => esc_html__('Image', 'modular'),
                            'desc' => esc_html__('Upload portfolio main image', 'modular'),
                            'type' => 'upload'
                        ),
                        'image_size' => array(
                            'type' => 'switch',
                            'value' => '1x',
                            'label' => esc_html__('Image Size', 'modular'),
                            'desc' => esc_html__('Image size 1x = 285x178 and 2x = 285x356', 'modular'),
                            'help' => esc_html__('Change the switch to change the image size', 'modular'),
                            'left-choice' => array(
                                'value' => '1x',
                                'label' => esc_html__('1x', 'modular'),
                            ),
                            'right-choice' => array(
                                'value' => '2x',
                                'label' => esc_html__('2x', 'modular'),
                            ),
                        ),
                        'title' => array(
                            'label' => esc_html__('Title', 'modular'),
                            'type' => 'text',
                            'desc' => esc_html__('Add portfolio main title', 'modular'),
                            'value' => esc_html__('Cosmetics', 'modular'),
                        ),
                        'subtitle' => array(
                            'label' => esc_html__('SubTitle', 'modular'),
                            'type' => 'text',
                            'desc' => esc_html__('Add portfolio main subtitle', 'modular'),
                            'value' => esc_html__('Motionwebs', 'modular'),
                        )
                    ),
                ),
            )
        ),
        'show_borders' => false,
    ),
    'grid' => array(
        'type' => 'switch',
        'value' => 'grid-3',
        'label' => esc_html__('Portfolio Grid', 'modular'),
        'desc' => esc_html__('How many grids do you want to use for your portfolio items?', 'modular'),
        'left-choice' => array(
            'value' => 'grid-3',
            'label' => esc_html__('Grid 3', 'modular'),
        ),
        'right-choice' => array(
            'value' => 'grid-4',
            'label' => esc_html__('Grid 4', 'modular'),
        ),
    ),
    'gutter' => array(
        'type' => 'switch',
        'value' => 'gutter',
        'label' => esc_html__('Portfolio Gutter', 'modular'),
        'desc' => esc_html__('Do you want to use portfolio items column gutter?', 'modular'),
        'left-choice' => array(
            'value' => 'gutter',
            'label' => esc_html__('YES', 'modular'),
        ),
        'right-choice' => array(
            'value' => '',
            'label' => esc_html__('NO', 'modular'),
        ),
    )
);
