<?php

if (!defined('FW'))
    die('Forbidden');

$cfg = array();

$cfg['page_builder'] = array(
    'title' => __('Icon Box', 'modular'),
    'description' => __('Add a Service With Icon', 'modular'),
    'tab' => __('Content Elements', 'modular'),
    'title_template' => 'Icon Box{{ if (o.title) { }} : <strong>{{= o.title}}</strong>{{ } }}',
    'popup_header_elements' => '<a class="xs-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/modular/modular-documentation/#Iconbox"><span class="xs-docs-info dashicons dashicons-sos"></span>' . __('Go to Docs', 'modular') . '</a>',
);
