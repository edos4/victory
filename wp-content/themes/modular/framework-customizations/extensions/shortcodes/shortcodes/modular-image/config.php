<?php

if (!defined('FW'))
    die('Forbidden');

$cfg = array();

$cfg['page_builder'] = array(
    'title' => __('Modular Image', 'modular'),
    'description' => __('Add an Image', 'modular'),
    'tab' => __('Content Elements', 'modular'),
    'title_template' => 'Modular Image{{ if (o.image["url"]) { }} : <strong><img class="builder_thumb_img" src="{{= o.image["url"]}}" /></strong>{{ } }}',
    'popup_header_elements' => '<a class="xs-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/modular/modular-documentation/#ModularImage"><span class="xs-docs-info dashicons dashicons-sos"></span>' . __('Go to Docs', 'modular') . '</a>',
);
