<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'team_style_settings' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'team_style' => array(
                'label' => esc_html__('Team Style', 'modular'),
                'type' => 'image-picker',
                'value' => 'team_style_one',
                'desc' => esc_html__('Select Team style.', 'modular'),
                'choices' => array(
                    'team_style_one' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => MODULAR_IMAGES . '/image-picker/team-1.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => MODULAR_IMAGES . '/image-picker/team-1.png'
                        ),
                    ),
                    'team_style_two' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => MODULAR_IMAGES . '/image-picker/team-2.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => MODULAR_IMAGES . '/image-picker/team-2.png'
                        ),
                    ),
                    'team_style_three' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => MODULAR_IMAGES . '/image-picker/team-3.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => MODULAR_IMAGES . '/image-picker/team-3.png'
                        ),
                    ),
                ),
            ),
        ),
    ),
    'member_team' => array(
        'type' => 'addable-popup',
        'size' => 'large',
        'label' => esc_html__('Team Members', 'modular'),
        'desc' => esc_html__('Add your team members informations', 'modular'),
        'template' => '{{- team_member_name }}',
        'add-button-text' => esc_html__('Add Member', 'modular'),
        'popup-options' => array(
            'team_member_name' => array(
                'type' => 'text',
                'label' => esc_html__('Title', 'modular'),
                'desc' => esc_html__('Write your team member title', 'modular'),
                'value' => esc_html__('Charles Alvarado', 'modular')
            ),
            'team_member_position' => array(
                'type' => 'text',
                'label' => esc_html__('Position', 'modular'),
                'desc' => esc_html__('Type your team member position', 'modular'),
                'value' => esc_html__('CO-FOUNDER, CEO', 'modular')
            ),
            'member_img' => array(
                'type' => 'upload',
                'label' => esc_html__('Photo', 'modular'),
                'desc' => esc_html__('Add your team member photo', 'modular'),
            ),
            'member_social_icon' => array(
                'type' => 'addable-popup',
                'label' => esc_html__('Icon', 'modular'),
                'size' => 'large',
                'template' => '{{- social_icon_name }}',
                'add-button-text' => esc_html__('Add Social Icon', 'modular'),
                'limit' => 4,
                'popup-options' => array(
                    'social_icon_name' => array(
                        'type' => 'text',
                        'label' => esc_html__('Title', 'modular'),
                        'desc' => esc_html__('Write the social icon title but it does not show in the front-end', 'modular'),
                        'value' => esc_html__('Facebook', 'modular')
                    ),
                    'social_link' => array(
                        'type' => 'text',
                        'label' => esc_html__('Link', 'modular'),
                        'desc' => esc_html__('Insert your social URL', 'modular'),
                        'value' => '#'
                    ),
                    'social_icon' => array(
                        'type' => 'new-icon',
                        'label' => esc_html__('Icon', 'modular'),
                        'desc' => esc_html__('Add your social icon', 'modular'),
                        'value' => 'Facebook',
                    ),
                ),
            ),
        ),
    ),
);
