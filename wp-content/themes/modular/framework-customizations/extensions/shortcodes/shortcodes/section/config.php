<?php

if (!defined('FW'))
    die('Forbidden');

$cfg = array(
    'page_builder' => array(
	'tab' => __('Layout Elements', 'modular'),
	'title' => __('Section', 'modular'),
	'description' => __('Add a Section', 'modular'),
	'popup_size' => 'large',
	'title_template' => '{{-title}}{{ if (o.section_title) { }} : <strong>{{= o.section_title}}</strong>{{ } }}',
	'type' => 'section', // WARNING: Do not edit this
	'disable_modal_reset_btn' => true,
	'popup_header_elements' => '<a class="xs-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/modular/modular-documentation/#SectionShortcode"><span class="xs-docs-info dashicons dashicons-sos"></span>' . __('Go to Docs', 'modular') . '</a>',
    ),
);
