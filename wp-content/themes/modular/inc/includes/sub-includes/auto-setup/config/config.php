<?php

if ( !defined( 'ABSPATH' ) )
	die( 'Direct access forbidden.' );
return array(
	/**
	 * Array for demos
	 */
	'demos'				 => array(
		'multipage-rev-agency'		 => array(
			array(
				'name'	 => 'Revolution Slider Slicey Addon',
				'slug'	 => 'revslider-slicey-addon',
				'source' => 'http://xpeedstudio.net/demo-content/modular/plugins/revslider-slicey-addon.zip'
			),
		),
		'multipage-rev-portfolio'	 => array(
			array(
				'name'	 => 'Revolution Slider Slicey Addon',
				'slug'	 => 'revslider-slicey-addon',
				'source' => 'http://xpeedstudio.net/demo-content/modular/plugins/revslider-slicey-addon.zip'
			),
		),
	),
	'plugins'			 =>
	array(
		array(
			'name'	 => 'Revolution Slider',
			'slug'	 => 'revslider',
			'source' => 'http://xpeedstudio.net/demo-content/modular/plugins/revslider.zip'
		),
	),
	'theme_id'			 => 'modular',
	'child_theme_source' => 'http://xpeedstudio.net/demo-content/modular/plugins/modular-child.zip',
	'has_demo_content'	 => true
);
