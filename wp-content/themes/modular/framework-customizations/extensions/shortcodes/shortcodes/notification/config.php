<?php

if (!defined('FW')) {
    die('Forbidden');
}

$cfg = array();

$cfg['page_builder'] = array(
    'title' => __('Notification', 'modular'),
    'description' => __('Add a Notification Box', 'modular'),
    'tab' => __('Content Elements', 'modular'),
    'title_template' => 'Notification{{ if (o.message) { }} : <strong>{{= o.message}}</strong>{{ } }}',
    'popup_header_elements' => '<a class="xs-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/modular/modular-documentation/#Notification"><span class="xs-docs-info dashicons dashicons-sos"></span>' . __('Go to Docs', 'modular') . '</a>',
);
