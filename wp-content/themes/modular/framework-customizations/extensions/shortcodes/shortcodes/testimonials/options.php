<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'testimonialpage_style_settings' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'testimonial_style' => array(
                'label' => esc_html__('Testimonialpage Style', 'modular'),
                'type' => 'image-picker',
                'value' => 'testimonial-1-style',
                'desc' => esc_html__('Select testimonial style', 'modular'),
                'choices' => array(
                    'testimonial-1-style' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => MODULAR_IMAGES . '/image-picker/testimonial-1-style.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => MODULAR_IMAGES . '/image-picker/testimonial-1-style.png'
                        ),
                    ),
                    'testimonial-2-style' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => MODULAR_IMAGES . '/image-picker/testimonial-2-style.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => MODULAR_IMAGES . '/image-picker/testimonial-2-style.png'
                        ),
                    ),
                    'testimonial-3-style' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => MODULAR_IMAGES . '/image-picker/testimonial-3-style.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => MODULAR_IMAGES . '/image-picker/testimonial-3-style.png'
                        ),
                    ),
                    'testimonial-4-style' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => MODULAR_IMAGES . '/image-picker/testimonial-4-style.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => MODULAR_IMAGES . '/image-picker/testimonial-4-style.png'
                        ),
                    ),
                    'testimonial-5-style' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => MODULAR_IMAGES . '/image-picker/testimonial-5-style.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => MODULAR_IMAGES . '/image-picker/testimonial-5-style.png'
                        ),
                    ),
                ),
            ),
        ),
        'choices' => array(
            'testimonial-1-style' => array(
                'testimonial-1-img' => array(
                    'type' => 'upload',
                    'label' => esc_html__('Photo', 'modular'),
                    'desc' => esc_html__('Upload your testimonial person photo', 'modular'),
                ),
                'testimonial-1-content' => array(
                    'type' => 'textarea',
                    'label' => esc_html__('Quotation', 'modular'),
                    'desc' => esc_html__('Write testimonial main quotations', 'modular'),
                    'value' => esc_html__('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.','modular')
                ),
                'testi-one-title' => array(
                    'type' => 'text',
                    'label' => esc_html__('Name', 'modular'),
                    'desc' => esc_html__('Write testimonial author name', 'modular'),
                    'value' => esc_html__('Jason Medina','modular')
                ),
                'testi-one-subtitle' => array(
                    'type' => 'text',
                    'label' => esc_html__('Position', 'modular'),
                    'desc' => esc_html__('Write your testimonial author position', 'modular'),
                    'value' => wp_kses_post('Creative Director @ The Company','modular')
                )
            ),
            'testimonial-2-style' => array(
                'testimonial_element_option' => array(
                    'type' => 'addable-popup',
                    'label' => esc_html__('Testimonials', 'modular'),
                    'desc' => esc_html__('You can add multiple testimonials here', 'modular'),
                    'size' => 'large',
                    'template' => '{{- testi_two_author }}',
                    'add-button-text' => esc_html__('Add Testimonial', 'modular'),
                    'popup-options' => array(
                        'testi-2-img' => array(
                            'type' => 'upload',
                            'label' => esc_html__('Photo', 'modular'),
                            'desc' => esc_html__('You can add author photo from here', 'modular'),
                        ),
                        'testi-2-content' => array(
                            'type' => 'textarea',
                            'label' => esc_html__('Quotations', 'modular'),
                            'desc' => esc_html__('Write your main testimonial Quotation text', 'modular'),
                            'value' => esc_html__('But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.','modular')
                        ),
                        'testi_two_author' => array(
                            'type' => 'text',
                            'label' => esc_html__('Name', 'modular'),
                            'desc' => esc_html__('Add your testimonial author name', 'modular'),
                            'value' => esc_html__('William Jimenez','modular')
                        ),
                        'testi-2-author-rank' => array(
                            'type' => 'text',
                            'label' => esc_html__('Position', 'modular'),
                            'desc' => esc_html__('Add your testimonial author position', 'modular'),
                            'value' => wp_kses_post('Creative Director @ The Compan','modular')
                        ),
                    ),
                ),
            ),
            'testimonial-3-style' => array(
                'testimoni_three_title' => array(
                    'type' => 'text',
                    'label' => esc_html__('Top Title', 'modular'),
                    'desc' => esc_html__('Write testimonial top title', 'modular'),
                    'value' => esc_html__('Our Client','modular')
                ),
                'testimonial_element_option_three' => array(
                    'type' => 'addable-popup',
                    'label' => esc_html__('Testimonials', 'modular'),
                    'desc' => esc_html__('You can add multiple testimonial here', 'modular'),
                    'size' => 'large',
                    'template' => '{{- testimoni_three_author }}',
                    'add-button-text' => esc_html__('Add Testimonial', 'modular'),
                    'popup-options' => array(
                        'testimoni_three_content' => array(
                            'type' => 'textarea',
                            'label' => esc_html__('Quotations', 'modular'),
                            'desc' => esc_html__('Add your testimonial main quotations text', 'modular'),
                            'value' => esc_html__('But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.','modular')
                        ),
                        'testimoni_three_img' => array(
                            'type' => 'upload',
                            'label' => esc_html__('Photo', 'modular'),
                            'desc' => esc_html__('Upload your author photo', 'modular'),
                        ),
                        'testimoni_three_author' => array(
                            'type' => 'text',
                            'label' => esc_html__('Name', 'modular'),
                            'desc' => esc_html__('Add your author name', 'modular'),
                            'value' => esc_html__('Anthony Beck','modular')
                        ),
                        'testimoni_three_author_rank' => array(
                            'type' => 'text',
                            'label' => esc_html__('Position', 'modular'),
                            'desc' => esc_html__('Add your author position', 'modular'),
                            'value' => wp_kses_post('Creative Director @ The Company','modular')
                        ),
                    ),
                ),
            ),
            'testimonial-4-style' => array(
                'testimonial_element_option_four' => array(
                    'type' => 'addable-popup',
                    'label' => esc_html__('Testimonials', 'modular'),
                    'desc' => esc_html__('You can add multiple testimonials in here', 'modular'),
                    'size' => 'large',
                    'template' => '{{- testimoni_four_author }}',
                    'add-button-text' => esc_html__('Add Testimonial', 'modular'),
                    'popup-options' => array(
                        'testimoni_four_content' => array(
                            'type' => 'textarea',
                            'label' => esc_html__('Quotations', 'modular'),
                            'desc' => esc_html__('Add your testimonial main quotations', 'modular'),
                            'value' => esc_html__('The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.','modular')
                        ),
                        'testimoni_four_img' => array(
                            'type' => 'upload',
                            'label' => esc_html__('Photo', 'modular'),
                            'desc' => esc_html__('Upload your testimonial person photo', 'modular'),
                        ),
                        'testimoni_four_author' => array(
                            'type' => 'text',
                            'label' => esc_html__('Name', 'modular'),
                            'desc' => esc_html__('Add your testimonial person name', 'modular'),
                            'value' => esc_html__('Russell Bowman','modular')
                        ),
                        'testimoni_four_author_rank' => array(
                            'type' => 'text',
                            'label' => esc_html__('Position', 'modular'),
                            'desc' => esc_html__('Add your testimonial person positions', 'modular'),
                            'value' => wp_kses_post('@ Microsoft','modular')
                        ),
                    ),
                )
            ),
            'testimonial-5-style' => array(
                'testimonial_element_option_five' => array(
                    'type' => 'addable-popup',
                    'label' => esc_html__('Testimonials', 'modular'),
                    'desc' => esc_html__('You can add multiple testimonial in here', 'modular'),
                    'size' => 'large',
                    'template' => '{{- testimoni_five_author }}',
                    'add-button-text' => esc_html__('Add Testimonial', 'modular'),
                    'popup-options' => array(
                        'testimoni_five_content' => array(
                            'type' => 'textarea',
                            'label' => esc_html__('Quotations', 'modular'),
                            'desc' => esc_html__('Add your testimonial main quotation', 'modular'),
                            'value' => esc_html__('But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.','modular')
                        ),
                        'testimoni_five_img' => array(
                            'type' => 'upload',
                            'label' => esc_html__('Photo', 'modular'),
                            'desc' => esc_html__('Add your testimonial person photo', 'modular'),
                        ),
                        'testimoni_five_author' => array(
                            'type' => 'text',
                            'label' => esc_html__('Name', 'modular'),
                            'desc' => esc_html__('Add your testimonial person name', 'modular'),
                            'value' => esc_html__('Matthew Gardner','modular')
                        ),
                        'testimoni_five_author_rank' => array(
                            'type' => 'text',
                            'label' => esc_html__('Position', 'modular'),
                            'desc' => esc_html__('Add your testimonial person positions', 'modular'),
                            'value' => wp_kses_post('CEO @Company Inc.','modular')
                        ),
                    ),
                ),
            ),
        ),
        'show_borders' => false,
    ),
);
