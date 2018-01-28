<?php

if (!defined('FW')) {
    die('Forbidden');
}

$cfg = array();

$cfg['page_builder'] = array(
    'title' => __('Testimonials', 'modular'),
    'description' => __('Add some Testimonials', 'modular'),
    'tab' => __('Content Elements', 'modular'),
    'popup_size' => 'large',
    'popup_header_elements' => '<a class="xs-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/modular/modular-documentation/#Testimonials"><span class="xs-docs-info dashicons dashicons-sos"></span>' . __('Go to Docs', 'modular') . '</a>',
);
