<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'image' => array(
        'type' => 'upload',
        'label' => esc_html__('Choose Image', 'modular'),
        'desc' => esc_html__('Either upload a new, or choose an existing image from your media library', 'modular')
    ),
//    'frame' => array(
//        'type' => 'switch',
//        'value' => '',
//        'label' => '',
//        'desc' => esc_html__('Add a border to your image?', 'modular'),
//        'left-choice' => array(
//            'value' => '',
//            'label' => esc_html__('No', 'modular'),
//        ),
//        'right-choice' => array(
//            'value' => 'fw-image-frame',
//            'label' => esc_html__('Yes', 'modular'),
//        )
//    ),
    'image_size' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'select_size' => array(
                'label' => esc_html__('Size', 'modular'),
                'desc' => esc_html__('Select the image size', 'modular'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'value' => 'auto',
                'choices' => array(
                    'auto' => esc_html__('auto', 'modular'),
                    'custom' => esc_html__('Custom', 'modular')
                ),
            ),
        ),
        'choices' => array(
            'custom' => array(
                'width' => array(
                    'label' => '',
                    'desc' => esc_html__('Image width in pixels', 'modular'),
                    'type' => 'short-text',
                    'value' => '',
                ),
                'position' => array(
                    'label' => '',
                    'desc' => esc_html__('Select image position', 'modular'),
                    'type' => 'image-picker',
                    'value' => 'fw-single-image-center',
                    'choices' => array(
                        'fw-single-image-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => MODULAR_IMAGES . '/image-picker/left-position.jpg',
                                'title' => esc_html__('Left', 'modular')
                            ),
                        ),
                        'fw-single-image-center' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => MODULAR_IMAGES . '/image-picker/center-position.jpg',
                                'title' => esc_html__('Center', 'modular')
                            ),
                        ),
                        'fw-single-image-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => MODULAR_IMAGES . '/image-picker/right-position.jpg',
                                'title' => esc_html__('Right', 'modular')
                            ),
                        ),
                    ),
                ),
            ),
        )
    ),
    'height' => array(
        'label' => esc_html__('Height', 'modular'),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => esc_html__('auto', 'modular'),
        ),
        'custom' => 'custom_height',
        'help' => esc_html__('This option to use your custom height to like just add 500 (dont include with px)', 'modular'),
    ),
    'image-link-group' => array(
        'type' => 'group',
        'options' => array(
            'link' => array(
                'type' => 'text',
                'label' => esc_html__('Image Link', 'modular'),
                'desc' => esc_html__('Where should your image link to?', 'modular')
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
        )
    )
);

