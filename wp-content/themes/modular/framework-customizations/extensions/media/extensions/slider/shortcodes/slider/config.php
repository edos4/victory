<?php

if (!defined('FW')) {
    die('Forbidden');
}

$cfg = array();

$cfg['page_builder'] = array(
    'title' => esc_html__('Slider', 'modular'),
    'description' => esc_html__('Add a Slider', 'modular'),
    'tab' => esc_html__('Media Elements', 'modular'),
    'popup_size' => 'small',
);
