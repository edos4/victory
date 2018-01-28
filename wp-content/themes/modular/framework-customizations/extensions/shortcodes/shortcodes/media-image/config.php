<?php

if (!defined('FW'))
    die('Forbidden');

$cfg = array();

$cfg['page_builder'] = array(
    'title' => esc_html__('Image', 'modular'),
    'description' => esc_html__('Add an Image', 'modular'),
    'tab' => esc_html__('Media Elements', 'modular'),
    'popup_header_elements' => '<a class="xs-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/modular/modular-documentation/#Image"><span class="xs-docs-info dashicons dashicons-sos"></span>' . __('Go to Docs', 'modular') . '</a>',
);
