<?php

if (!defined('FW'))
    die('Forbidden');

$cfg = array(
    'page_builder' => array(
	'title' => __('Popup Video', 'modular'),
	'description' => __('Add a Video', 'modular'),
	'tab' => __('Media Elements', 'modular'),
	'title_template' => 'Popup Video{{ if (o.title) { }} : <strong>{{= o.title}}</strong>{{ } }}',
	'popup_header_elements' => '<a class="xs-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/modular/modular-documentation/#PopupVideo"><span class="xs-docs-info dashicons dashicons-sos"></span>' . __('Go to Docs', 'modular') . '</a>',
    )
);
