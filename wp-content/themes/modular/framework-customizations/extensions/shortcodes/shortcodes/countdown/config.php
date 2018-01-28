<?php

if (!defined('FW')) {
    die('Forbidden');
}

$cfg = array(
    'page_builder' => array(
	'title' => __('Conuntdown', 'modular'),
	'description' => __('Add a Countdown for event', 'modular'),
	'tab' => __('Content Elements', 'modular'),
	'popup_size' => 'small',
	'popup_header_elements' => '<a class="xs-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/modular/modular-documentation/#Countdown"><span class="xs-docs-info dashicons dashicons-sos"></span>' . __('Go to Docs', 'modular') . '</a>',
    )
);
