<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'features' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'feature_style' => array(
                'label' => esc_html__('Feature Style', 'modular'),
                'desc' => esc_html__('Choose Feature Style', 'modular'),
                'type' => 'image-picker',
                'value' => 'feature-1',
                'choices' => array(
                    'feature-1' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => MODULAR_IMAGES . '/image-picker/features-style1.png'
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => MODULAR_IMAGES . '/image-picker/features-style1.png'
                        ),
                    ),
                    'feature-2' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => MODULAR_IMAGES . '/image-picker/features-style2.png'
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => MODULAR_IMAGES . '/image-picker/features-style2.png'
                        ),
                    )
                ),
            ),
        ),
        'choices' => array(
            'feature-1' => array(
                'feature_left' => array(
                    'label' => esc_html__('Left Items', 'modular'),
                    'type' => 'addable-popup',
                    'size' => 'large',
                    'limit' => '3',
                    'desc' => esc_html__('Add features left items', 'modular'),
                    'template' => 'Feature : {{- title}}',
                    'popup-options' => array(
                        'icon' => array(
                            'type' => 'new-icon',
                            'value' => 'ti-vector',
                            'label' => esc_html__('Choose an Icon', 'modular'),
                        ),
                        'title' => array(
                            'type' => 'text',
                            'value' => esc_html__('Prototyping', 'modular'),
                            'label' => esc_html__('Title of the Box', 'modular'),
                        ),
                        'content' => array(
                            'label' => esc_html__('Box Description', 'modular'),
                            'desc' => esc_html__('Enter the box description text', 'modular'),
                            'type' => 'textarea',
                            'value' => esc_html__('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia', 'modular')
                        ),
                    )
                ),
                'feature_right' => array(
                    'label' => esc_html__('Right Items', 'modular'),
                    'type' => 'addable-popup',
                    'size' => 'large',
                    'limit' => '3',
                    'desc' => esc_html__('Add features right items', 'modular'),
                    'template' => 'Feature : {{- title}}',
                    'popup-options' => array(
                        'icon' => array(
                            'type' => 'new-icon',
                            'value' => 'ti-cloud',
                            'label' => esc_html__('Choose an Icon', 'modular'),
                        ),
                        'title' => array(
                            'type' => 'text',
                            'value' => esc_html__('Cloud', 'modular'),
                            'label' => esc_html__('Title of the Box', 'modular'),
                        ),
                        'content' => array(
                            'label' => esc_html__('Box Description', 'modular'),
                            'desc' => esc_html__('Enter the box description text', 'modular'),
                            'type' => 'textarea',
                            'value' => esc_html__('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia', 'modular')
                        )
                    )
                ),
            ),
            'feature-2' => array(
                'feature_left' => array(
                    'label' => esc_html__('Left Items', 'modular'),
                    'type' => 'addable-popup',
                    'size' => 'large',
                    'limit' => '3',
                    'desc' => esc_html__('Add features left items', 'modular'),
                    'template' => 'Feature : {{- title}}',
                    'popup-options' => array(
                        'icon' => array(
                            'type' => 'new-icon',
                            'value' => 'ti-palette',
                            'label' => esc_html__('Choose an Icon', 'modular'),
                        ),
                        'title' => array(
                            'type' => 'text',
                            'value' => esc_html__('Beautiful Design Makes me wonder', 'modular'),
                            'label' => esc_html__('Title of the Box', 'modular'),
                        ),
                        'content' => array(
                            'label' => esc_html__('Box Description', 'modular'),
                            'desc' => esc_html__('Enter the box description text', 'modular'),
                            'type' => 'textarea',
                            'value' => esc_html__('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast', 'modular')
                        ),
                        'label' => array(
                            'label' => esc_html__('Button Label', 'modular'),
                            'desc' => esc_html__('This is the text that appears on your button', 'modular'),
                            'type' => 'text',
                            'value' => esc_html__('Check Availability', 'modular')
                        ),
                        'link' => array(
                            'label' => esc_html__('Button Link', 'modular'),
                            'desc' => esc_html__('Where should your button link to', 'modular'),
                            'type' => 'text',
                            'value' => '#'
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
                        )
                    )
                ),
                'feature_right' => array(
                    'label' => esc_html__('Right Items', 'modular'),
                    'type' => 'addable-popup',
                    'size' => 'large',
                    'limit' => '3',
                    'desc' => esc_html__('Add features right items', 'modular'),
                    'template' => 'Feature : {{- title}}',
                    'popup-options' => array(
                        'icon' => array(
                            'type' => 'new-icon',
                            'value' => 'ti-paint',
                            'label' => esc_html__('Choose an Icon', 'modular'),
                        ),
                        'title' => array(
                            'type' => 'text',
                            'value' => esc_html__('Best Design Drives me crazy', 'modular'),
                            'label' => esc_html__('Title of the Box', 'modular'),
                        ),
                        'content' => array(
                            'label' => esc_html__('Box Description', 'modular'),
                            'desc' => esc_html__('Enter the box description text', 'modular'),
                            'type' => 'textarea',
                            'value' => esc_html__('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast', 'modular')
                        ),
                        'label' => array(
                            'label' => esc_html__('Button Label', 'modular'),
                            'desc' => esc_html__('This is the text that appears on your button', 'modular'),
                            'type' => 'text',
                            'value' => esc_html__('Check Availability', 'modular')
                        ),
                        'link' => array(
                            'label' => esc_html__('Button Link', 'modular'),
                            'desc' => esc_html__('Where should your button link to', 'modular'),
                            'type' => 'text',
                            'value' => '#'
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
                        )
                    )
                )
            )
        ),
        'show_borders' => false,
    ),
    'image' => array(
        'label' => esc_html__('Main Image', 'modular'),
        'desc' => esc_html__('Add features middle main image', 'modular'),
        'type' => 'upload',
    ),
);
