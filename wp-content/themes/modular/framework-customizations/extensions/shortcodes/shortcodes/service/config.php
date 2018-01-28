<?php

if (!defined('FW'))
    die('Forbidden');

$cfg = array();

$cfg['page_builder'] = array(
    'title' => __('Services', 'modular'),
    'description' => __('Add a Customer Service', 'modular'),
    'tab' => __('Content Elements', 'modular'),
    'popup_size' => 'large',
    'title_template' => 'Service{{ if (o.title) { }} : <strong>{{= o.title}}</strong>{{ } }}',
    'popup_header_elements' => '<a class="xs-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/modular/modular-documentation/#Services"><span class="xs-docs-info dashicons dashicons-sos"></span>' . __('Go to Docs', 'modular') . '</a>',
);
