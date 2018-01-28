<?php

if ( !defined( 'ABSPATH' ) )
	die( 'Direct access forbidden.' );
/**
 * Include static files: javascript and css for backend
 */
wp_enqueue_style( 'xs-admin', MODULAR_CSS . '/xs_admin.css', null, MODULAR_VERSION );
wp_enqueue_style( 'themify-icons', MODULAR_CSS . '/themify-icons.css', null, MODULAR_VERSION );



wp_enqueue_script( 'xs-admin', MODULAR_SCRIPTS . '/xs-admin.js', array( 'jquery' ), MODULAR_VERSION, true );
