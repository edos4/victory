<?php

if (!defined('FW'))
    die('Forbidden');

$cfg = array();

$cfg['page_builder'] = array(
    'title' => __('Special Heading', 'modular'),
    'description' => __('Add a Special Heading', 'modular'),
    'tab' => __('Content Elements', 'modular'),
    'popup_size' => 'large',
    'title_template' => 'Special Heading{{ if (o.title) { }}<p><strong>Title </strong>: {{= o.title}}</p>{{ } }} {{ if (o.subtitle) { }}<p><strong>Subtitle </strong>: {{= o.subtitle}}</p>{{ } }}',
    'popup_header_elements' => '<a class="xs-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/modular/modular-documentation/#SpecialHeading"><span class="xs-docs-info dashicons dashicons-sos"></span>' . __('Go to Docs', 'modular') . '</a>',
);
