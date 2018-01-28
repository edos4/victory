<?php

if (!defined('FW')) {
    die('Forbidden');
}

$cfg = array();

$cfg['page_builder'] = array(
    'title' => esc_html__('Portfolio', 'modular'),
    'description' => esc_html__('Add Content', 'modular'),
    'tab' => esc_html__('Content Elements', 'modular'),
    'popup_size' => 'large',
    'popup_header_elements' => '<a class="xs-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/modular/modular-documentation/#Portfolio"><span class="xs-docs-info dashicons dashicons-sos"></span>' . __('Go to Docs', 'modular') . '</a>',
);
