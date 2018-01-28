<?php

if (!defined('FW')) {
    die('Forbidden');
}



$options = array(
    'type' => array(
        'label' => __('Type', 'modular'),
        'desc' => __('Select divider type', 'modular'),
        'type' => 'image-picker',
        'value' => 'fw-line-solid',
        'choices' => array(
            'fw-line-solid' => array(
                'small' => array(
                    'height' => 50,
                    'src' => MODULAR_IMAGES . '/image-picker/solid.jpg',
                    'title' => __('Solid Line', 'modular')
                ),
            ),
            'fw-line-dashed' => array(
                'small' => array(
                    'height' => 50,
                    'src' => MODULAR_IMAGES . '/image-picker/dashed.jpg',
                    'title' => __('Dashed Line', 'modular')
                ),
            ),
            'fw-line-dotted' => array(
                'small' => array(
                    'height' => 50,
                    'src' => MODULAR_IMAGES . '/image-picker/dotted.jpg',
                    'title' => __('Dotted Line', 'modular')
                ),
            ),
            'fw-line-double' => array(
                'small' => array(
                    'height' => 50,
                    'src' => MODULAR_IMAGES . '/image-picker/double.jpg',
                    'title' => __('Double Line', 'modular')
                ),
            ),
            'fw-line-thick' => array(
                'small' => array(
                    'height' => 50,
                    'src' => MODULAR_IMAGES . '/image-picker/thick.jpg',
                    'title' => __('Thick Line', 'modular')
                ),
            ),
            'fw-divider-space' => array(
                'small' => array(
                    'height' => 50,
                    'src' => MODULAR_IMAGES . '/image-picker/space_gap.jpg',
                    'title' => __('Space', 'modular')
                ),
            ),
        ),
    ),
    'divider_size' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'size' => array(
                'label' => __('Height', 'modular'),
                'desc' => __('Select the top and bottom margin in px', 'modular'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'space-sm' => __('Small', 'modular'),
                    'space-md' => __('Medium', 'modular'),
                    'space-lg' => __('Large', 'modular'),
                    'custom' => __('Custom', 'modular'),
                ),
                'value' => 'space-md'
            ),
        ),
        'choices' => array(
            'custom' => array(
                'margin_top' => array(
                    'label' => __('Margin Top', 'modular'),
                    'desc' => __('Enter margin-top in px', 'modular'),
                    'attr' => array('class' => 'fw-option-width-small'),
                    'type' => 'short-text',
                    'value' => ''
                ),
                'margin_bottom' => array(
                    'label' => __('Margin Bottom', 'modular'),
                    'attr' => array('class' => 'fw-option-width-small'),
                    'desc' => __('Enter margin-bottom in px', 'modular'),
                    'type' => 'short-text',
                    'value' => ''
                ),
            ),
            'no' => array(),
        ),
        'show_borders' => false,
    ),
    'width' => array(
        'label' => __('Width', 'modular'),
        'desc' => __('Select the width size in %', 'modular'),
        'type' => 'radio-text',
        'choices' => array(
            '25' => __('25%', 'modular'),
            '50' => __('50%', 'modular'),
            '100' => __('100%', 'modular'),
        ),
        'custom' => 'custom_width',
        'value' => '100'
    ),
    'bg_color' => array(
        'label' => __('Color', 'modular'),
        'desc' => __('Select divider color', 'modular'),
        'value' => '',
        'type' => 'color-picker'
    ),
    'special_divider' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'selected_value' => array(
                'label' => __('Add Element', 'modular'),
                'desc' => __('Make a special divider by adding an icon or text to it', 'modular'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'value' => 'none',
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'modular'),
                    'text' => __('Text', 'modular'),
                    'icon' => __('Icon', 'modular'),
                ),
            )
        ),
        'choices' => array(
            'text' => array(
                'title_text' => array(
                    'label' => __('', 'modular'),
                    'desc' => __('This text will be displayed on the divider', 'modular'),
                    'type' => 'text',
                    'value' => '',
                ),
                'color' => array(
                    'label' => __('Text Color', 'modular'),
                    'desc' => __('Select the text color', 'modular'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
                'show_bg' => array(
                    'type' => 'switch',
                    'label' => __('Background', 'modular'),
                    'desc' => __('Add a background to your text?', 'modular'),
                    'value' => 'no',
                    'right-choice' => array(
                        'value' => 'yes',
                        'label' => __('Yes', 'modular'),
                    ),
                    'left-choice' => array(
                        'value' => 'no',
                        'label' => __('No', 'modular'),
                    ),
                ),
                'position' => array(
                    'label' => __('Position', 'modular'),
                    'desc' => __('Select text position', 'modular'),
                    'type' => 'image-picker',
                    'value' => '',
                    'choices' => array(
                        'title-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => MODULAR_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'modular')
                            ),
                        ),
                        '' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => MODULAR_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'modular')
                            ),
                        ),
                        'title-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => MODULAR_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'modular')
                            ),
                        ),
                    ),
                ),
                'divider_size' => array(
                    'label' => __('Size', 'modular'),
                    'desc' => __('Select divider size', 'modular'),
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'type' => 'radio',
                    'value' => 'fw-divider-size-md',
                    'choices' => array(
                        'fw-divider-size-sm' => __('Small', 'modular'),
                        'fw-divider-size-md' => __('Medium', 'modular'),
                        'fw-divider-size-lg' => __('Large', 'modular'),
                    ),
                ),
            ),
            'icon' => array(
                'icon_class' => array(
                    'type' => 'icon',
                    'label' => __('', 'modular')
                ),
                'color' => array(
                    'label' => __('Icon Color', 'modular'),
                    'desc' => __('Select the icon color', 'modular'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
                'position' => array(
                    'label' => __('Position', 'modular'),
                    'desc' => __('Select icon position', 'modular'),
                    'type' => 'image-picker',
                    'value' => '',
                    'choices' => array(
                        'title-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => MODULAR_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'modular')
                            ),
                        ),
                        '' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => MODULAR_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'modular')
                            ),
                        ),
                        'title-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => MODULAR_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'modular')
                            ),
                        ),
                    ),
                ),
                'divider_size' => array(
                    'label' => __('Size', 'modular'),
                    'desc' => __('Select divider size', 'modular'),
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'type' => 'radio',
                    'value' => 'fw-divider-size-md',
                    'choices' => array(
                        'fw-divider-size-sm' => __('Small', 'modular'),
                        'fw-divider-size-md' => __('Medium', 'modular'),
                        'fw-divider-size-lg' => __('Large', 'modular'),
                    ),
                ),
            ),
            'none' => array(),
        ),
        'show_borders' => false,
    ),
    'link_id' => array(
        'type' => 'text',
        'label' => __('Link ID', 'modular'),
        'desc' => __('Enter a custom CSS id for this divider', 'modular'),
        'help' => sprintf("%s", __('Use this ID in any URL link in the page in order to anchor link to this divider', 'modular')),
        'value' => '',
    ),
    'class' => array(
        'label' => __('Custom Class', 'modular'),
        'desc' => __('Enter custom CSS class', 'modular'),
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'modular'),
        'type' => 'text',
        'value' => '',
    ),
);
