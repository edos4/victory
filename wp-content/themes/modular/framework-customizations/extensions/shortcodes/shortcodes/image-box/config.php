<?php

if (!defined('FW'))
    die('Forbidden');

$cfg = array(
    'page_builder' => array(
	'title' => __('Image Box', 'modular'),
	'description' => __('Add Feature Image Box', 'modular'),
	'tab' => __('Content Elements', 'modular'),
	'title_template' => 'Image Box{{ if (o.title) { }} : <strong>{{= o.title}}</strong>{{ } }}',
	'popup_header_elements' => '<a class="xs-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/modular/modular-documentation/#Imagebox"><span class="xs-docs-info dashicons dashicons-sos"></span>' . __('Go to Docs', 'modular') . '</a>',
    )
);
