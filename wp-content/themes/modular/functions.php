<?php

/**
 * functions.php
 *
 * The theme's functions and definitions.
 */
/**
 * 1.0 - Define constants. Current Version number & Theme Name.
 */
define('MODULAR_THEME', 'Modular Landing Page WordPress Theme');
define('MODULAR_VERSION', '1.0');
define('MODULAR_THEMEROOT', get_template_directory_uri());
define('MODULAR_THEMEROOT_DIR', get_template_directory());
define('MODULAR_IMAGES', MODULAR_THEMEROOT . '/assets/img');
define('MODULAR_IMAGES_DIR', MODULAR_THEMEROOT_DIR . '/assets/img');
define('MODULAR_CSS', MODULAR_THEMEROOT . '/assets/css');
define('MODULAR_CSS_DIR', MODULAR_THEMEROOT_DIR . '/assets/css');
define('MODULAR_SCRIPTS', MODULAR_THEMEROOT . '/assets/js');
define('MODULAR_SCRIPTS_DIR', MODULAR_THEMEROOT_DIR . '/assets/js');
define('MODULAR_PHPSCRIPTS', MODULAR_THEMEROOT . '/assets/php');
define('MODULAR_PHPSCRIPTS_DIR', MODULAR_THEMEROOT_DIR . '/assets/php');
define('MODULAR_INC', MODULAR_THEMEROOT_DIR . '/inc');







/**
 * ----------------------------------------------------------------------------------------
 * 3.0 - Set up the content width value based on the theme's design.
 * ----------------------------------------------------------------------------------------
 */
if (!isset($content_width)) {
    $content_width = 800;
}



/**
 * ----------------------------------------------------------------------------------------
 * 4.0 - Set up theme default and register various supported features.
 * ----------------------------------------------------------------------------------------
 */
if (!function_exists('modular_setup')) {

    function modular_setup() {
	/**
	 * Make the theme available for translation.
	 */
	$lang_dir = MODULAR_THEMEROOT . '/languages';
	load_theme_textdomain('modular', $lang_dir);

	/**
	 * Add support for post formats.
	 */
	add_theme_support('post-formats', array()
	);

	/**
	 * Add support for automatic feed links.
	 */
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');


	/**
	 * Add support for post thumbnails.
	 */
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(770, 460, array('center', 'center')); // Hard crop center center
	add_image_size('modular-blog-thumb', 740, 460, TRUE);



	/**
	 * Register nav menus.
	 */
	register_nav_menus(
		array(
		    'primary' => esc_html__('Main Menu', 'modular')
		)
	);
	register_nav_menus(
		array(
		    'footer' => esc_html__('Footer Menu', 'modular')
		)
	);
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support('html5', array(
	    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	));
    }

    add_action('after_setup_theme', 'modular_setup');
}

/**
 * ----------------------------------------------------------------------------------------
 * 7.0 - theme INC.
 * ----------------------------------------------------------------------------------------
 */
include_once get_template_directory() . '/inc/init.php';




