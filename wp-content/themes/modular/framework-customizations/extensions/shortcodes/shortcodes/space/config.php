<?php

if (!defined('FW'))
    die('Forbidden');

$cfg = array(
    'page_builder' => array(
	'title' => __('Extra Space', 'modular'),
	'description' => __('Add a Space', 'modular'),
	'tab' => __('Content Elements', 'modular'),
	'title_template' => 'Extra Space{{ if (o.height) { }} : <strong>{{= o.height}}</strong>{{ } }}',
	'popup_header_elements' => '<a class="xs-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/modular/modular-documentation/#ExtraSpace"><span class="xs-docs-info dashicons dashicons-sos"></span>' . __('Go to Docs', 'modular') . '</a>',
    )
);
