<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
	wp_enqueue_style( 'child-styles',
        get_stylesheet_directory_uri() . '/custom.css',
        array('parent-style')
    ); 
}
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
function material_init() {
    $args = array(
      'label' => 'Victory Materials',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'victory-materials'),
        'query_var' => true,
        'menu_icon' => 'dashicons-welcome-widgets-menus',
        'taxonomies' => array( 'category' ),
        'supports' => array(
            'title',
            'editor',
            'custom-fields',
            'page-attributes',)
        );
    register_post_type( 'victory-materials', $args );
}
function victory_series_init() {
    $args = array(
      'label' => 'Victory Series',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'victory-series'),
        'query_var' => true,
       'menu_icon' => 'dashicons-welcome-widgets-menus',
       'taxonomies' => array( 'themes_categories' ),
        'supports' => array(
            'title',
            'editor',
            'custom-fields',
			'excerpt',
			'comments',
            'page-attributes',)
        );
  
    register_post_type( 'victory-series', $args );
}
function themes_taxonomy() {  
    register_taxonomy(  
        'themes_categories',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
        'years',        //post type name
        array(  
            'hierarchical' => true,  
            'label' => 'Years',  //Display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'years', // This controls the base slug that will display before each term
                'with_front' => false // Don't display the category base before 
            )
        )  
    );  
}  
add_action( 'init', 'themes_taxonomy');
function video_init() {
    $args = array(
      'label' => 'Video Updates',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'video-update'),
        'query_var' => true,
        'menu_icon' => 'dashicons-video-alt3',
       'taxonomies' => array( 'category' ),
        'supports' => array(
            'title',
            'editor',
            'custom-fields',
			'excerpt',
            'page-attributes',)
        );
  
    register_post_type( 'video-update', $args );
}

add_action( 'init', 'material_init' );
add_action( 'init', 'victory_series_init' );
add_action( 'init', 'video_init' );