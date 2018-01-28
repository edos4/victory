<?php

if (!defined('FW')) {
    die('Forbidden');
}

$template_directory = get_template_directory_uri();
$options = array(
    'list_group' => array(
        'type' => 'group',
        'options' => array(
            'list_items' => array(
                'type' => 'addable-popup',
                'label' => __('List Items', 'modular'),
                'desc' => __('Add list items', 'modular'),
                'template' => '{{=item}}',
                'popup-options' => array(
                    'sublist_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'item' => array(
                                'label' => __('Item', 'modular'),
                                'desc' => __('Enter an item in list', 'modular'),
                                'type' => 'text',
                            ),
                            'sublist_items' => array(
                                'type' => 'addable-popup',
                                'label' => __('Sublist Items', 'modular'),
                                'desc' => __('Add sublist items', 'modular'),
                                'template' => '{{=subitem}}',
                                'popup-options' => array(
                                    'subitem' => array(
                                        'label' => __('Sublist Item', 'modular'),
                                        'desc' => __('Enter a sublist item', 'modular'),
                                        'type' => 'text',
                                    ),
                                    'btn_link_group' => array(
                                        'type' => 'group',
                                        'options' => array(
                                            'link' => array(
                                                'label' => __('Link', 'modular'),
                                                'desc' => __('you can add link if you want', 'modular'),
                                                'type' => 'text',
                                            ),
                                            'target_subitem' => array(
                                                'type' => 'switch',
                                                'label' => __('', 'modular'),
                                                'desc' => __('Open link in new window?', 'modular'),
                                                'value' => '_self',
                                                'right-choice' => array(
                                                    'value' => '_blank',
                                                    'label' => __('Yes', 'modular'),
                                                ),
                                                'left-choice' => array(
                                                    'value' => '_self',
                                                    'label' => __('No', 'modular'),
                                                ),
                                            ),
                                        )
                                    ),
                                ),
                            ),
                        )
                    ),
                    'btn_link_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'link' => array(
                                'label' => __('Link', 'modular'),
                                'desc' => __('you can add link if you want', 'modular'),
                                'type' => 'text',
                            ),
                            'target' => array(
                                'type' => 'switch',
                                'label' => __('', 'modular'),
                                'desc' => __('Open link in new window?', 'modular'),
                                'value' => '_self',
                                'right-choice' => array(
                                    'value' => '_blank',
                                    'label' => __('Yes', 'modular'),
                                ),
                                'left-choice' => array(
                                    'value' => '_self',
                                    'label' => __('No', 'modular'),
                                ),
                            ),
                        )
                    ),
                ),
            ),
            'separator' => array(
                'type' => 'switch',
                'label' => __('', 'modular'),
                'desc' => __('Separate each list item by a line?', 'modular'),
                'value' => '_self',
                'right-choice' => array(
                    'value' => 'list-bordered',
                    'label' => __('Yes', 'modular'),
                ),
                'left-choice' => array(
                    'value' => '',
                    'label' => __('No', 'modular'),
                ),
            ),
        )
    ),
    'list_type' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'selected_value' => array(
                'label' => __('Add Element', 'modular'),
                'desc' => __('Make a numbered list or add an icon to list items', 'modular'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'value' => 'list-default',
                'type' => 'radio',
                'choices' => array(
                    'list-default' => __('None', 'modular'),
                    'list-numbers' => __('Number', 'modular'),
                    'list-icon' => __('Icon', 'modular'),
                ),
            )
        ),
        'choices' => array(
            'list-default' => array(),
            'list-numbers' => array(),
            'list-icon' => array(
                'icon' => array(
                    'type' => 'icon',
                    'label' => __('', 'modular')
                ),
            ),
        ),
        'show_borders' => false,
    ),
    'class' => array(
        'label' => __('Custom Class', 'modular'),
        'desc' => __('Enter custom CSS class', 'modular'),
        'type' => 'text',
        'value' => '',
        'help' => __('You can use this class to further style this shortcode', 'modular'),
    ),
);
