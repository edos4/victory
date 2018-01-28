<?php

if (!defined('FW')) {
    die('Forbidden');
}

$cfg = array();

$cfg['page_builder'] = array(
    'title' => __('Text Block', 'modular'),
    'description' => __('Add a Text Block', 'modular'),
    'tab' => __('Content Elements', 'modular'),
    'popup_size' => 'medium',
    'title_template' => 'Text Block {{ if (o.text) { }} : {{= o.text}}{{ } }}',
    'popup_header_elements' => '<a class="xs-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/modular/modular-documentation/#TextBlock"><span class="xs-docs-info dashicons dashicons-sos"></span>' . __('Go to Docs', 'modular') . '</a>',
);
