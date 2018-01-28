<?php

if (!defined('FW')) {
    die('Forbidden');
}

$cfg = array(
    'page_builder' => array(
	'title' => __('Quote', 'modular'),
	'description' => __('Add a Quote', 'modular'),
	'tab' => __('Content Elements', 'modular'),
	'popup_size' => 'medium',
	'title_template' => 'Quote{{ if (o.author) { }} : <strong>{{= o.author}}</strong>{{ } }}',
	'popup_header_elements' => '<a class="xs-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/modular/modular-documentation/#Quote"><span class="xs-docs-info dashicons dashicons-sos"></span>' . __('Go to Docs', 'modular') . '</a>',
    )
);
