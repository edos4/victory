<?php

if (!defined('FW'))
    die('Forbidden');

$cfg = array(
    'page_builder' => array(
	'title' => __('Content Box', 'modular'),
	'description' => __('Add Feature Content', 'modular'),
	'tab' => __('Content Elements', 'modular'),
	'title_template' => '{{ if (o.title) { }} <strong>{{= o.title}}</strong>{{ } }}',
	'popup_header_elements' => '<a class="xs-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/modular/modular-documentation/#ContentBox"><span class="xs-docs-info dashicons dashicons-sos"></span>' . __('Go to Docs', 'modular') . '</a>',
    )
);
