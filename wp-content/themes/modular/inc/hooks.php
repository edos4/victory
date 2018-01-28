<?php

if ( !defined( 'ABSPATH' ) )
	die( 'Direct access forbidden.' );
/**
 * Theme’s filters and actions
 */
/*
 * Widget register
 */
if ( !function_exists( 'modular_widget_init' ) ) {

	function modular_widget_init() {
		if ( function_exists( 'register_sidebar' ) ) {
			register_sidebar(
			array(
				'name'			 => esc_html__( 'Blog Widget Area', 'modular' ),
				'id'			 => 'sidebar-1',
				'description'	 => esc_html__( 'Appears on posts and pages.', 'modular' ),
				'before_widget'	 => '<div id="%1$s" class="widget blog-popular %2$s">',
				'after_widget'	 => '</div> <!-- end widget -->',
				'before_title'	 => '<span class="subh-basic-dark">',
				'after_title'	 => '</span>',
			)
			);
		}
	}

	add_action( 'widgets_init', 'modular_widget_init' );
}

/*
 * TGM REQUIRE PLUGIN
 * require or recommend plugins for your WordPress themes
 */

/** @internal */
function _action_modular_register_required_plugins() {

	$plugin_dir = MODULAR_THEMEROOT_DIR . '/inc/includes/plugins';

	$plugins = array(
		array(
			'name'		 => esc_html__( 'Unyson', 'modular' ),
			'slug'		 => 'unyson',
			'required'	 => true,
		),
	);

	$config = array(
		'id'			 => 'modular', // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path'	 => '', // Default absolute path to bundled plugins.
		'menu'			 => 'modular-install-plugins', // Menu slug.
		'parent_slug'	 => 'themes.php', // Parent menu slug.
		'capability'	 => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'	 => true, // Show admin notices or not.
		'dismissable'	 => true, // If false, a user cannot dismiss the nag message.
		'dismiss_msg'	 => '', // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic'	 => true, // Automatically activate plugins after installation or not.
		'message'		 => '', // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', '_action_modular_register_required_plugins' );

// Initializing online demo contents
function _filter_modular_fw_ext_backups_demos( $demos ) {
	$demo_content_installer	 = 'http://xpeedstudio.net/demo-content/modular';
	$demos_array			 = array(
		'multipage-rev-agency'			 => array(
			'title'			 => esc_html__( 'Multipage Rev Agency', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/multipage-rev-agency/rev-agency.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'multipage-rev-creative'		 => array(
			'title'			 => esc_html__( 'Multipage Rev Creative', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/multipage-rev-creative/rev-creative.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'multipage-rev-portfolio'		 => array(
			'title'			 => esc_html__( 'Multipage Rev Portfolio', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/multipage-rev-portfolio/rev-portfolio.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'multipage-home-classic'		 => array(
			'title'			 => esc_html__( 'Multipage Classic', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/multipage-home-classic/classic.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'multipage-home-corporate'		 => array(
			'title'			 => esc_html__( 'Multipage Corporate', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/multipage-home-corporate/corporate.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'multipage-home-agency'			 => array(
			'title'			 => esc_html__( 'Multipage Agency', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/multipage-home-agency/agency.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'multipage-home-media-agency'	 => array(
			'title'			 => esc_html__( 'Multipage Media Agency', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/multipage-home-media-agency/media.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'multipage-home-parallax'		 => array(
			'title'			 => esc_html__( 'Multipage Parallax', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/multipage-home-parallax/parallax.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'multipage-home-business'		 => array(
			'title'			 => esc_html__( 'Multipage Business', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/multipage-home-business/business.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'multipage-home-event'			 => array(
			'title'			 => esc_html__( 'Multipage Event', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/multipage-home-event/event.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'multipage-home-minimal'		 => array(
			'title'			 => esc_html__( 'Multipage Minimal', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/multipage-home-minimal/minimal.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'multipage-home-personal'		 => array(
			'title'			 => esc_html__( 'Multipage Personal', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/multipage-home-personal/personal.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'multipage-landing-page'		 => array(
			'title'			 => esc_html__( 'Multipage Landing Page', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/multipage-landing-page/landing-page.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'multipage-portfolio'			 => array(
			'title'			 => esc_html__( 'Multipage Portfolio', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/multipage-portfolio/portfolio.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'onepage-home-agency'			 => array(
			'title'			 => esc_html__( 'Onepage Agency', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/onepage-home-agency/agency.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'onepage-home-classic'			 => array(
			'title'			 => esc_html__( 'Onepage Classic', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/onepage-home-classic/classic.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'onepage-home-event'			 => array(
			'title'			 => esc_html__( 'Onepage Event', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/onepage-home-event/event.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'onepage-home-media-agency'		 => array(
			'title'			 => esc_html__( 'Onepage Media Agency', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/onepage-home-media-agency/media.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'onepage-home-parallax'			 => array(
			'title'			 => esc_html__( 'Onepage Parallax', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/onepage-home-parallax/parallax.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'onepage-home-personal'			 => array(
			'title'			 => esc_html__( 'Onepage Personal', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/onepage-home-personal/personal.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'onepage-landing-page'			 => array(
			'title'			 => esc_html__( 'Onepage Landing Page', 'modular' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/onepage-landing-page/landing-page.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
	);
	$download_url			 = esc_url( $demo_content_installer ) . '/manifest.php';
	foreach ( $demos_array as $id => $data ) {
		$demo					 = new FW_Ext_Backups_Demo( $id, 'piecemeal', array(
			'url'		 => $download_url,
			'file_id'	 => $id,
		) );
		$demo->set_title( $data[ 'title' ] );
		$demo->set_screenshot( $data[ 'screenshot' ] );
		$demo->set_preview_link( $data[ 'preview_link' ] );
		$demos[ $demo->get_id() ]	 = $demo;
		unset( $demo );
	}
	return $demos;
}

add_filter( 'fw:ext:backups-demo:demos', '_filter_modular_fw_ext_backups_demos' );



if ( !function_exists( 'modular_action_shortcode_column_enqueue_dynamic_css' ) ):

	/**
	 * @internal
	 *
	 * @param array $data
	 */
	function modular_action_shortcode_column_enqueue_dynamic_css( $data ) {
		$shortcode	 = 'column';
		$atts		 = shortcode_parse_atts( $data[ 'atts_string' ] );


		$atts = fw_ext_shortcodes_decode_attr( $atts, $shortcode, $data[ 'post' ]->ID );

		$custom_column_styles = '';

// additional spacing
		$padding_top	 = (int) $atts[ 'padding_top' ];
		$padding_right	 = (int) $atts[ 'padding_right' ];
		$padding_bottom	 = (int) $atts[ 'padding_bottom' ];
		$padding_left	 = (int) $atts[ 'padding_left' ];


		$margin_top		 = (int) $atts[ 'margin_top' ];
		$margin_right	 = (int) $atts[ 'margin_right' ];
		$margin_bottom	 = (int) $atts[ 'margin_bottom' ];
		$margin_left	 = (int) $atts[ 'margin_left' ];


		if ( $padding_top != 0 || $padding_right != 0 || $padding_bottom != 0 || $padding_left != 0 ) {
			$custom_column_styles .= '.xs-sc-' . $atts[ 'xs_id' ] . ' .fw-col-inner{padding: ' . $padding_top . 'px ' . $padding_right . 'px ' . $padding_bottom . 'px ' . $padding_left . 'px;}';
		}
		if ( $margin_top != 0 || $margin_right != 0 || $margin_bottom != 0 || $margin_left != 0 ) {
			$custom_column_styles .= '.xs-sc-' . $atts[ 'xs_id' ] . ' .fw-col-inner{margin: ' . $margin_top . 'px ' . $margin_right . 'px ' . $margin_bottom . 'px ' . $margin_left . 'px;}';
		}
//Text Color style
		$custom_column_styles .= $atts[ 'txtcolor' ] != '' ? '.xs-sc-' . $atts[ 'xs_id' ] . '{ color:' . $atts[ 'txtcolor' ] . ';}' : '';

//Border
		$border = $atts[ 'column_border' ];
		if ( isset( $border[ 'selected' ] ) && $border[ 'selected' ] == 'yes' ) {
			$custom_column_styles .= '.xs-sc-' . $atts[ 'xs_id' ] . '{' . $border[ 'yes' ][ 'border' ] . ':' . (int) $border[ 'yes' ][ 'border_size' ] . 'px ' . $border[ 'yes' ][ 'border_style' ] . ' ' . $border[ 'yes' ][ 'border_color' ] . ';}';
		}

//Radius
		$border_radius = $atts[ 'column_radius' ];
		if ( isset( $border_radius[ 'selected' ] ) && $border_radius[ 'selected' ] == 'yes' ) {
			$custom_column_styles .= '.xs-sc-' . $atts[ 'xs_id' ] . '{border-top-left-radius:' . (int) $border_radius[ 'yes' ][ 'top_left' ] . 'px; '
			. 'border-top-right-radius:' . (int) $border_radius[ 'yes' ][ 'top_right' ] . 'px;'
			. 'border-bottom-right-radius:' . (int) $border_radius[ 'yes' ][ 'bottom_right' ] . 'px;'
			. 'border-bottom-left-radius:' . (int) $border_radius[ 'yes' ][ 'bottom_left' ] . 'px;}';
		}

//Radius
		$box_shadow = $atts[ 'column_shadow' ];
		if ( isset( $box_shadow[ 'selected' ] ) && $box_shadow[ 'selected' ] == 'yes' ) {
			$shadow_horiontal	 = (int) $box_shadow[ 'yes' ][ 'shadow_horiontal' ] . 'px ';
			$shadow_vertical	 = (int) $box_shadow[ 'yes' ][ 'shadow_vertical' ] . 'px ';
			$shadow_blur		 = (int) $box_shadow[ 'yes' ][ 'shadow_vertical' ] . 'px ';
			$shadow_size		 = (int) $box_shadow[ 'yes' ][ 'shadow_size' ] . 'px ';
			$shadow_color		 = $box_shadow[ 'yes' ][ 'shadow_color' ] . ';';

			$custom_column_styles .= '.xs-sc-' . $atts[ 'xs_id' ] . '{-webkit-box-shadow:' . '' . $shadow_horiontal . ' ' . $shadow_vertical . ' ' . $shadow_blur . ' ' . $shadow_size . ' ' . $shadow_color . '-moz-box-shadow:' . '' . $shadow_horiontal . ' ' . $shadow_vertical . ' ' . $shadow_blur . ' ' . $shadow_size . ' ' . $shadow_color . 'box-shadow:' . '' . $shadow_horiontal . ' ' . $shadow_vertical . ' ' . $shadow_blur . ' ' . $shadow_size . ' ' . $shadow_color . '}';
		}

//Set Position
		if ( isset( $atts[ 'column_position' ][ 'selected' ] ) && $atts[ 'column_position' ][ 'selected' ] == 'yes' && $atts[ 'column_position' ][ 'yes' ][ 'position' ] != 'static' ) {
			$loc = $atts[ 'column_position' ][ 'yes' ];

			$position = '.xs-sc-' . $atts[ 'xs_id' ] . '{position:' . $loc[ 'position' ] . '; ';
			$position .= $loc[ 'top' ] != '' ? 'top:' . (int) $loc[ 'top' ] . 'px; ' : '';
			$position .= $loc[ 'right' ] != '' ? 'right:' . (int) $loc[ 'right' ] . 'px; ' : '';
			$position .= $loc[ 'bottom' ] != '' ? 'bottom:' . (int) $loc[ 'bottom' ] . 'px; ' : '';
			$position .= $loc[ 'left' ] != '' ? 'left:' . (int) $loc[ 'left' ] . 'px; ' : '';
			$position .= '}';
			$custom_column_styles .= $position;
		}

//Element

		$element = isset( $atts[ 'display' ] ) && $atts[ 'display' ] != '' ? 'display:' . $atts[ 'display' ] . ';' : '';
		$element .= isset( $atts[ 'overflow' ] ) && $atts[ 'overflow' ] != '' ? 'overflow:' . $atts[ 'overflow' ] . ';' : '';
		$element .= isset( $atts[ 'overflow_x' ] ) && $atts[ 'overflow_x' ] != '' ? 'overflow-x:' . $atts[ 'overflow_x' ] . ';' : '';
		$element .= isset( $atts[ 'overflow_y' ] ) && $atts[ 'overflow_y' ] != '' ? 'overflow-y:' . $atts[ 'overflow_y' ] . ';' : '';
		$element .= isset( $atts[ 'z_index' ] ) && $atts[ 'z_index' ] != '' ? 'z-index:' . $atts[ 'z_index' ] . ';' : '';
		if ( !empty( $element ) ) {
			$custom_column_styles .= '.xs-sc-' . $atts[ 'xs_id' ] . '{' . $element . '}';
		}
//Column Height
		if ( !empty( $atts[ 'height' ] ) && $atts[ 'height' ] != 'auto' ) {
			$custom_column_styles .= '.xs-sc-' . $atts[ 'xs_id' ] . '{height:' . $atts[ 'height' ] . 'px}';
		}


//Background
		$bgtype = $atts[ 'background_options' ][ 'background' ];

		if ( isset( $bgtype ) && $bgtype == 'image' && !empty( $atts[ 'background_options' ][ 'image' ][ 'background_image' ][ 'data' ] ) ) {
			$img		 = $atts[ 'background_options' ][ 'image' ];
			$bg_image	 = 'background-image:url(' . $img[ 'background_image' ][ 'data' ][ 'icon' ] . ');';
			$bg_image .= ' background-repeat: ' . $img[ 'repeat' ] . ';';
			$bg_image .= ' background-position: ' . $img[ 'bg_position_x' ] . ' ' . $img[ 'bg_position_y' ] . ';';
			$bg_image .= ' background-size: ' . $img[ 'bg_size' ] . ';';

			$custom_column_styles .= '.xs-sc-' . $atts[ 'xs_id' ] . '{' . $bg_image . '}';


			$overlay = $img[ 'overlay_options' ][ 'overlay' ];
			if ( $overlay == 'yes' && !empty( $img[ 'overlay_options' ][ 'yes' ][ 'background' ] ) ) {
				$custom_column_styles .= '.xs-sc-' . $atts[ 'xs_id' ] . ' .xs-main-overlay{background-color:' . $img[ 'overlay_options' ][ 'yes' ][ 'background' ] . '}';
			}
		} elseif ( $bgtype == 'bgcolor' ) {
			$color = $atts[ 'background_options' ][ 'bgcolor' ][ 'background_color' ];
			if ( !empty( $color ) )
				$custom_column_styles .= '.xs-sc-' . $atts[ 'xs_id' ] . '{background-color:' . $color . '}';
		}


//Responsive

		if ( isset( $atts[ 'display_medium' ][ 'selected' ] ) && $atts[ 'display_medium' ][ 'selected' ] == 'yes' ) {
			$medium_device		 = $atts[ 'display_medium' ][ 'yes' ];
			$padding_top_md		 = (int) $medium_device[ 'padding_top' ];
			$padding_right_md	 = (int) $medium_device[ 'padding_right' ];
			$padding_bottom_md	 = (int) $medium_device[ 'padding_bottom' ];
			$padding_left_md	 = (int) $medium_device[ 'padding_left' ];

			if ( $padding_top_md != 0 || $padding_right_md != 0 || $padding_bottom_md != 0 || $padding_left_md != 0 ) {
				$custom_column_styles .= '@media only screen and (min-width: 992px) and (max-width: 1199px) {.xs-sc-' . $atts[ 'xs_id' ] . ' .fw-col-inner{padding: ' . $padding_top_md . 'px ' . $padding_right_md . 'px ' . $padding_bottom_md . 'px ' . $padding_left_md . 'px;}}';
			}

			$margin_top_md		 = (int) $medium_device[ 'margin_top' ];
			$margin_right_md	 = (int) $medium_device[ 'margin_right' ];
			$margin_bottom_md	 = (int) $medium_device[ 'margin_bottom' ];
			$margin_left_md		 = (int) $medium_device[ 'margin_left' ];
			if ( $margin_top_md != 0 || $margin_right_md != 0 || $margin_bottom_md != 0 || $margin_left_md != 0 ) {
				$custom_column_styles .= '@media only screen and (min-width: 992px) and (max-width: 1199px) {.xs-sc-' . $atts[ 'xs_id' ] . ' .fw-col-inner{margin: ' . $margin_top_md . 'px ' . $margin_right_md . 'px ' . $margin_bottom_md . 'px ' . $margin_left_md . 'px;}}';
			}
			if ( isset( $medium_device[ 'change_height' ][ 'selected' ] ) && $medium_device[ 'change_height' ][ 'selected' ] == 'yes' ) {
				$height = $medium_device[ 'change_height' ][ 'yes' ][ 'height' ] != 'auto' ? (int) $medium_device[ 'change_height' ][ 'yes' ][ 'height' ] . 'px' : 'inherit';
				$custom_column_styles .= '@media only screen and (min-width: 992px) and (max-width: 1199px) {.xs-sc-' . $atts[ 'xs_id' ] . '{height:' . $height . '}}';
			}
			if ( isset( $medium_device[ 'txt_align' ] ) && $medium_device[ 'txt_align' ] != 'none' ) {
				$custom_column_styles .= '@media only screen and (min-width: 992px) and (max-width: 1199px) {.xs-sc-' . $atts[ 'xs_id' ] . '{text-align:' . $medium_device[ 'txt_align' ] . '}}';
			}
		}


		if ( isset( $atts[ 'display_tablet' ][ 'selected' ] ) && $atts[ 'display_tablet' ][ 'selected' ] == 'yes' ) {
			$tablet_device = $atts[ 'display_tablet' ][ 'yes' ];

			$padding_top_sm		 = (int) $tablet_device[ 'padding_top' ];
			$padding_right_sm	 = (int) $tablet_device[ 'padding_right' ];
			$padding_bottom_sm	 = (int) $tablet_device[ 'padding_bottom' ];
			$padding_left_sm	 = (int) $tablet_device[ 'padding_left' ];
			if ( $padding_top_sm != 0 || $padding_right_sm != 0 || $padding_bottom_sm != 0 || $padding_left_sm != 0 ) {
				$custom_column_styles .= '@media only screen and (min-width: 768px) and (max-width: 991px) {.xs-sc-' . $atts[ 'xs_id' ] . ' .fw-col-inner{padding: ' . $padding_top_sm . 'px ' . $padding_right_sm . 'px ' . $padding_bottom_sm . 'px ' . $padding_left_sm . 'px;}}';
			}

			$margin_top_sm		 = (int) $tablet_device[ 'margin_top' ];
			$margin_right_sm	 = (int) $tablet_device[ 'margin_right' ];
			$margin_bottom_sm	 = (int) $tablet_device[ 'margin_bottom' ];
			$margin_left_sm		 = (int) $tablet_device[ 'margin_left' ];
			if ( $margin_top_sm != 0 || $margin_right_sm != 0 || $margin_bottom_sm != 0 || $margin_left_sm != 0 ) {
				$custom_column_styles .= '@media only screen and (min-width: 768px) and (max-width: 991px) {.xs-sc-' . $atts[ 'xs_id' ] . ' .fw-col-inner{margin: ' . $margin_top_sm . 'px ' . $margin_right_sm . 'px ' . $margin_bottom_sm . 'px ' . $margin_left_sm . 'px;}}';
			}
			if ( isset( $tablet_device[ 'change_height' ][ 'selected' ] ) && $tablet_device[ 'change_height' ][ 'selected' ] == 'yes' ) {
				$height = $tablet_device[ 'change_height' ][ 'yes' ][ 'height' ] != 'auto' ? (int) $tablet_device[ 'change_height' ][ 'yes' ][ 'height' ] . 'px' : 'inherit';
				$custom_column_styles .= '@media only screen and (min-width: 768px) and (max-width: 991px) {.xs-sc-' . $atts[ 'xs_id' ] . '{height:' . $height . '}}';
			}
			if ( isset( $tablet_device[ 'txt_align' ] ) && $tablet_device[ 'txt_align' ] != 'none' ) {
				$custom_column_styles .= '@media only screen and (min-width: 768px) and (max-width: 991px) {.xs-sc-' . $atts[ 'xs_id' ] . '{text-align:' . $tablet_device[ 'txt_align' ] . '}}';
			}
		}
		if ( isset( $atts[ 'display_phone' ][ 'selected' ] ) && $atts[ 'display_phone' ][ 'selected' ] == 'yes' ) {
			$phone_device = $atts[ 'display_phone' ][ 'yes' ];

			$padding_top_xs		 = (int) $phone_device[ 'padding_top' ];
			$padding_right_xs	 = (int) $phone_device[ 'padding_right' ];
			$padding_bottom_xs	 = (int) $phone_device[ 'padding_bottom' ];
			$padding_left_xs	 = (int) $phone_device[ 'padding_left' ];
			if ( $padding_top_xs != 0 || $padding_right_xs != 0 || $padding_bottom_xs != 0 || $padding_left_xs != 0 ) {
				$custom_column_styles .= '@media only screen and (max-width: 767px) {.xs-sc-' . $atts[ 'xs_id' ] . ' .fw-col-inner{padding: ' . $padding_top_xs . 'px ' . $padding_right_xs . 'px ' . $padding_bottom_xs . 'px ' . $padding_left_xs . 'px;}}';
			}

			$margin_top_xs		 = (int) $phone_device[ 'margin_top' ];
			$margin_right_xs	 = (int) $phone_device[ 'margin_right' ];
			$margin_bottom_xs	 = (int) $phone_device[ 'margin_bottom' ];
			$margin_left_xs		 = (int) $phone_device[ 'margin_left' ];
			if ( $margin_top_xs != 0 || $margin_right_xs != 0 || $margin_bottom_xs != 0 || $margin_left_xs != 0 ) {
				$custom_column_styles .= '@media only screen and (max-width: 767px) {.xs-sc-' . $atts[ 'xs_id' ] . ' .fw-col-inner{margin: ' . $margin_top_xs . 'px ' . $margin_right_xs . 'px ' . $margin_bottom_xs . 'px ' . $margin_left_xs . 'px;}}';
			}
			if ( isset( $phone_device[ 'change_height' ][ 'selected' ] ) && $phone_device[ 'change_height' ][ 'selected' ] == 'yes' ) {
				$height = $tablet_device[ 'change_height' ][ 'yes' ][ 'height' ] != 'auto' ? (int) $phone_device[ 'change_height' ][ 'yes' ][ 'height' ] . 'px' : 'inherit';
				$custom_column_styles .= '@media only screen and (max-width: 767px) {.xs-sc-' . $atts[ 'xs_id' ] . '{height:' . $height . '}}';
			}
			if ( isset( $phone_device[ 'txt_align' ] ) && $phone_device[ 'txt_align' ] != 'none' ) {
				$custom_column_styles .= '@media only screen and (max-width: 767px) {.xs-sc-' . $atts[ 'xs_id' ] . '{text-align:' . $phone_device[ 'txt_align' ] . '}}';
			}
		}
		if ( empty( $custom_column_styles ) ) {
			return;
		}

		wp_add_inline_style(
		'modular-style', $custom_column_styles
		);
	}

	add_action(
	'fw_ext_shortcodes_enqueue_static:column', 'modular_action_shortcode_column_enqueue_dynamic_css'
	);
endif;


if ( !function_exists( 'modular_action_shortcode_section_enqueue_dynamic_css' ) ):

	/**
	 * @internal
	 *
	 * @param array $data
	 */
	function modular_action_shortcode_section_enqueue_dynamic_css( $data ) {
		$shortcode				 = 'section';
		$atts					 = shortcode_parse_atts( $data[ 'atts_string' ] );
		$atts					 = fw_ext_shortcodes_decode_attr( $atts, $shortcode, $data[ 'post' ]->ID );
		$custom_column_styles	 = '';


//Background
		$bgtype = $atts[ 'background_options' ][ 'background' ];
		if ( isset( $bgtype ) && $bgtype == 'image' && !empty( $atts[ 'background_options' ][ 'image' ][ 'background_image' ][ 'data' ] ) ) {
			$img		 = $atts[ 'background_options' ][ 'image' ];
			$bg_image	 = 'background-image:url(' . $img[ 'background_image' ][ 'data' ][ 'icon' ] . ');';
			$bg_image .= ' background-repeat: ' . $img[ 'repeat' ] . ';';
			$bg_image .= ' background-position: ' . $img[ 'bg_position_x' ] . ' ' . $img[ 'bg_position_y' ] . ';';
			$bg_image .= ' background-size: ' . $img[ 'bg_size' ] . ';';
			$bg_image .= ' background-attachment: ' . $img[ 'background_attachment' ] . ';';
			if ( $img[ 'background_attachment' ] == 'fixed' ) {
				$custom_column_styles .= '@media only screen and (max-width: 1099px) {.xs-sc-' . $atts[ 'xs_id' ] . ' {background-attachment:scroll !important;}}';
			}

			$custom_column_styles .= '.xs-sc-' . $atts[ 'xs_id' ] . '{' . $bg_image . '}';


			$img_overlay = $atts[ 'background_options' ][ 'image' ][ 'tab_item' ][ 'selected_value' ];

			if ( $img_overlay == 'overlay11' ) {
				$bgoverlay	 = $atts[ 'background_options' ][ 'image' ][ 'tab_item' ][ 'overlay11' ][ 'background' ];
				$overlay	 = "background-color:$bgoverlay";
			} elseif ( $img_overlay == 'gradient11' ) {
				$gradient_trnsparent = '85';
				if ( isset( $atts[ 'background_options' ][ 'image' ][ 'tab_item' ][ 'gradient11' ][ 'gradient_trnsparent' ] ) ) {
					$gradient_trnsparent = $atts[ 'background_options' ][ 'image' ][ 'tab_item' ][ 'gradient11' ][ 'gradient_trnsparent' ];
				}
				$gradient11	 = $atts[ 'background_options' ][ 'image' ][ 'tab_item' ][ 'gradient11' ][ 'background' ];
				$primary	 = 'rgba(' . modular_color_rgb( $gradient11[ 'primary' ] ) . ',0.' . $gradient_trnsparent . ')';
				$secondary	 = 'rgba(' . modular_color_rgb( $gradient11[ 'secondary' ] ) . ',0.' . $gradient_trnsparent . ')';

				$overlay = "background: $primary;background: -webkit-linear-gradient(to right, $primary, $secondary);background: -o-linear-gradient(to right, $primary, $secondary);background: -moz-linear-gradient(to right, $primary, $secondary);background: linear-gradient(to right, $primary, $secondary);";
			}
			if ( isset( $bgtype ) && $atts[ 'background_options' ][ 'background' ] == 'image' ) {
				$custom_column_styles .= '.xs-sc-' . $atts[ 'xs_id' ] . ' .xs-main-overlay{' . $overlay . '}';
			}
		} elseif ( $bgtype == 'color' ) {
			$color = $atts[ 'background_options' ][ 'color' ][ 'background_color' ];
			if ( !empty( $color ) ) {
				$custom_column_styles .= '.xs-sc-' . $atts[ 'xs_id' ] . '{background-color:' . $color . '}';
			}
		} else if ( $bgtype == 'gradient' ) {
			$gradients	 = $atts[ 'background_options' ][ 'gradient' ][ 'background' ];
			$primary	 = $gradients[ 'primary' ];
			$secondary	 = $gradients[ 'secondary' ];
			if ( !empty( $primary ) && !empty( $secondary ) ) {
				$gradient = "background: $primary;background: -webkit-linear-gradient(to right, $primary, $secondary);background: -o-linear-gradient(to right, $primary, $secondary);background: -moz-linear-gradient(to right, $primary, $secondary);background: linear-gradient(to right, $primary, $secondary);";
				$custom_column_styles .= '.xs-sc-' . $atts[ 'xs_id' ] . '{' . $gradient . '}';
			}
		} else if ( $bgtype == 'video' ) {
			$overlay = $atts[ 'background_options' ][ 'video' ][ 'overlay_options' ];
			if ( $overlay[ 'overlay' ] == 'yes' ) {
				$overlay = 'background-color:' . $overlay[ 'yes' ][ 'background' ] . ';z-index:3;position:relative;';

				$custom_column_styles .= '.xs-sc-' . $atts[ 'xs_id' ] . ' .xs-main-overlay{' . $overlay . '}';
			}
		}
//Height
		if ( !empty( $atts[ 'height' ] ) && $atts[ 'height' ] != 'auto' && $atts[ 'height' ] != 'xs-section-height-sm' && $atts[ 'height' ] != 'xs-section-height-md' && $atts[ 'height' ] != 'xs-section-height-lg' ) {

			$height			 = (int) $atts[ 'height' ];
			$extra_height	 = 'height: ' . $height . 'px; line-height: ' . $height . 'px;overflow: hidden;';
			$custom_column_styles .= '.xs-sc-' . $atts[ 'xs_id' ] . '{' . $extra_height . '}';
		}

//Element
		$element = isset( $atts[ 'display' ] ) && $atts[ 'display' ] != '' ? 'display:' . $atts[ 'display' ] . ';' : '';
		$element .= isset( $atts[ 'overflow' ] ) && $atts[ 'overflow' ] != '' ? 'overflow:' . $atts[ 'overflow' ] . ';' : '';
		$element .= isset( $atts[ 'overflow_x' ] ) && $atts[ 'overflow_x' ] != '' ? 'overflow-x:' . $atts[ 'overflow_x' ] . ';' : '';
		$element .= isset( $atts[ 'overflow_y' ] ) && $atts[ 'overflow_y' ] != '' ? 'overflow-y:' . $atts[ 'overflow_y' ] . ';' : '';
		$element .= isset( $atts[ 'z_index' ] ) && $atts[ 'z_index' ] != '' ? 'z-index:' . $atts[ 'z_index' ] . ';' : '';
		if ( !empty( $element ) ) {
			$custom_column_styles .= '.xs-sc-' . $atts[ 'xs_id' ] . '{' . $element . '}';
		}
		if ( empty( $custom_column_styles ) ) {
			return;
		}

		wp_add_inline_style(
		'modular-style', $custom_column_styles
		);
	}

	add_action(
	'fw_ext_shortcodes_enqueue_static:section', 'modular_action_shortcode_section_enqueue_dynamic_css'
	);
endif;



if ( !function_exists( 'modular_action_shortcode_special_heading_enqueue_dynamic_css' ) ):

	/**
	 * @internal
	 *
	 * @param array $data
	 */
	function modular_action_shortcode_special_heading_enqueue_dynamic_css( $data ) {
		$shortcode				 = 'special_heading';
		$atts					 = shortcode_parse_atts( $data[ 'atts_string' ] );
		$atts					 = fw_ext_shortcodes_decode_attr( $atts, $shortcode, $data[ 'post' ]->ID );
		$custom_heading_styles	 = '';

		if ( isset( $atts[ 'text_center' ][ 'yes' ] ) && $atts[ 'text_center' ][ 'centered' ] == 'yes' && $atts[ 'text_center' ][ 'yes' ][ 'title_width' ] != '50' ) {
			$custom_heading_styles .= '.xs-heading-' . $atts[ 'xs_id' ] . '.fw-heading{width:' . $atts[ 'text_center' ][ 'yes' ][ 'title_width' ] . '%}';
		}
		if ( isset( $atts[ 'bottom_space' ] ) && $atts[ 'bottom_space' ] != '50' ) {
			$custom_heading_styles .= '.xs-heading-' . $atts[ 'xs_id' ] . '.fw-heading{margin-bottom:' . $atts[ 'bottom_space' ] . 'px}';
		}
		if ( isset( $atts[ 'title' ] ) && $atts[ 'title' ] != '' && isset( $atts[ 'heading_typography' ][ 'heading' ] ) ) {
			$custom_heading_styles .= '.xs-heading-' . $atts[ 'xs_id' ] . ' .fw-special-title{' . modular_advanced_xs_font_styles( $atts[ 'heading_typography' ][ 'heading' ] ) . '}';
			Unyson_Google_Fonts::add_typography_v2( $atts[ 'heading_typography' ][ 'heading' ] );

			if ( isset( $atts[ 'heading_typography' ][ 'heading_sprintf' ] ) && !empty( $atts[ 'heading_typography' ][ 'heading_sprintf' ][ 'family' ] ) ) {
				$custom_heading_styles .= '.xs-heading-' . $atts[ 'xs_id' ] . ' span.xs-sprintf{' . modular_advanced_xs_font_styles( $atts[ 'heading_typography' ][ 'heading_sprintf' ] ) . '}';
				Unyson_Google_Fonts::add_typography_v2( $atts[ 'heading_typography' ][ 'heading_sprintf' ] );
			} else {
				$color		 = $atts[ 'heading_typography' ][ 'heading_sprintf' ][ 'color' ];
				$colorclass	 = '.xs-heading-' . $atts[ 'xs_id' ] . ' span.xs-sprintf{color:' . esc_attr( $color ) . '}';
				$custom_heading_styles .= isset( $color ) && !empty( $color ) ? $colorclass : '';
			}
		}

		if ( isset( $atts[ 'subtitle' ] ) || !empty( $atts[ 'subtitle' ] ) && isset( $atts[ 'subheading_typography' ][ 'subheading' ] ) ) {
			$custom_heading_styles .= '.xs-heading-' . $atts[ 'xs_id' ] . ' .fw-special-subtitle{' . modular_advanced_xs_font_styles( $atts[ 'subheading_typography' ][ 'subheading' ] ) . '}';
			Unyson_Google_Fonts::add_typography_v2( $atts[ 'subheading_typography' ][ 'subheading' ] );
		}


		if ( empty( $custom_heading_styles ) ) {
			return;
		}

		wp_add_inline_style( 'modular-style', $custom_heading_styles );
	}

	add_action( 'fw_ext_shortcodes_enqueue_static:special_heading', 'modular_action_shortcode_special_heading_enqueue_dynamic_css' );
endif;


if ( !function_exists( 'modular_action_shortcode_quote_enqueue_dynamic_css' ) ):

	/**
	 * @internal
	 *
	 * @param array $data
	 */
	function modular_action_shortcode_quote_enqueue_dynamic_css( $data ) {
		$shortcode			 = 'quote';
		$atts				 = shortcode_parse_atts( $data[ 'atts_string' ] );
		$atts				 = fw_ext_shortcodes_decode_attr( $atts, $shortcode, $data[ 'post' ]->ID );
		$custom_quote_styles = '';

		$custom_quote_styles .= isset( $atts[ 'bg_color' ] ) ? '.xs-quote-' . $atts[ 'xs_id' ] . ' .bubble{background-color:' . $atts[ 'bg_color' ] . ';}' : '';
		$custom_quote_styles .= isset( $atts[ 'bg_color' ] ) ? '.xs-quote-' . $atts[ 'xs_id' ] . ' .bubble:after{border-color:' . $atts[ 'bg_color' ] . ' transparent;}' : '';
		$custom_quote_styles .= isset( $atts[ 'author_color' ] ) ? '.xs-quote-' . $atts[ 'xs_id' ] . ' .name{color:' . $atts[ 'author_color' ] . ';}' : '';
		$custom_quote_styles .= isset( $atts[ 'position_color' ] ) ? '.xs-quote-' . $atts[ 'xs_id' ] . ' .author{color:' . $atts[ 'position_color' ] . ';}' : '';
		if ( empty( $custom_quote_styles ) ) {
			return;
		}

		wp_add_inline_style( 'modular-style', $custom_quote_styles );
	}

	add_action( 'fw_ext_shortcodes_enqueue_static:quote', 'modular_action_shortcode_quote_enqueue_dynamic_css' );
endif;


if ( !function_exists( 'modular_action_shortcode_text_block_enqueue_dynamic_css' ) ):

	/**
	 * @internal
	 *
	 * @param array $data
	 */
	function modular_action_shortcode_text_block_enqueue_dynamic_css( $data ) {
		$shortcode					 = 'text_block';
		$atts						 = shortcode_parse_atts( $data[ 'atts_string' ] );
		$atts						 = fw_ext_shortcodes_decode_attr( $atts, $shortcode, $data[ 'post' ]->ID );
		$custom_text_block_styles	 = '';

		$bodyfont = fw_get_db_settings_option( 'body_font' );

		if ( isset( $atts[ 'body_font' ] ) && !empty( $atts[ 'body_font' ] ) && $atts[ 'body_font' ] != $bodyfont ) {
			$all_style = '.xs-text-block-' . $atts[ 'xs_id' ] . ' p,.xs-text-block-' . $atts[ 'xs_id' ] . ' h2,.xs-text-block-' . $atts[ 'xs_id' ] . ' h3,.xs-text-block-' . $atts[ 'xs_id' ] . ' h4,.xs-text-block-' . $atts[ 'xs_id' ] . ' h5,.xs-text-block-' . $atts[ 'xs_id' ] . ' h6,.xs-text-block-';
			$custom_text_block_styles .= $all_style . '{' . modular_advanced_xs_font_styles( $atts[ 'body_font' ] ) . '}';
			Unyson_Google_Fonts::add_typography_v2( $atts[ 'body_font' ] );
		}

		if ( empty( $custom_text_block_styles ) ) {
			return;
		}
		wp_add_inline_style( 'modular-style', $custom_text_block_styles );
	}

	add_action( 'fw_ext_shortcodes_enqueue_static:text_block', 'modular_action_shortcode_text_block_enqueue_dynamic_css' );
endif;

if ( !function_exists( 'modular_action_shortcode_space_enqueue_dynamic_css' ) ):

	/**
	 * @internal
	 *
	 * @param array $data
	 */
	function modular_action_shortcode_space_enqueue_dynamic_css( $data ) {
		$shortcode			 = 'text_block';
		$atts				 = shortcode_parse_atts( $data[ 'atts_string' ] );
		$atts				 = fw_ext_shortcodes_decode_attr( $atts, $shortcode, $data[ 'post' ]->ID );
		$custom_space_styles = '';


		if ( isset( $atts[ 'height' ] ) && $atts[ 'height' ] != 'space-sm' && $atts[ 'height' ] != 'space-md' && $atts[ 'height' ] != 'space-lg' ) {
			$custom_space_styles .= '#xs-sc-' . $atts[ 'xs_id' ] . '{height:' . (int) $atts[ 'height' ] . 'px}';
		}


		//medium
		if ( isset( $atts[ 'medium_height' ] ) && $atts[ 'medium_height' ] != 'default' ) {
			$custom_space_styles .= '@media only screen and (min-width: 992px) and (max-width: 1199px) {#xs-sc-' . $atts[ 'xs_id' ] . '{height:' . (int) $atts[ 'medium_height' ] . 'px}}';
		}

		//tablet
		if ( isset( $atts[ 'tablet_height' ] ) && $atts[ 'tablet_height' ] != 'default' ) {
			$custom_space_styles .= '@media only screen and (min-width: 768px) and (max-width: 991px) {#xs-sc-' . $atts[ 'xs_id' ] . '{height:' . (int) $atts[ 'tablet_height' ] . 'px}}';
		}

//		small
		if ( isset( $atts[ 'phone_height' ] ) && $atts[ 'phone_height' ] != 'default' ) {
			$custom_space_styles .= '@media only screen and (max-width: 767px) {#xs-sc-' . $atts[ 'xs_id' ] . '{height:' . (int) $atts[ 'phone_height' ] . 'px}}';
		}
		if ( empty( $custom_space_styles ) ) {
			return;
		}
		wp_add_inline_style( 'modular-style', $custom_space_styles );
	}

	add_action( 'fw_ext_shortcodes_enqueue_static:space', 'modular_action_shortcode_space_enqueue_dynamic_css' );
endif;

function _action_theme_enqueue_custom_post_shortcode_assets() {
	if ( !function_exists( 'fw_ext_shortcodes_enqueue_shortcodes_static' ) ) {
		return;
	}
	$frontpage_id		 = modular_main( get_option( 'page_on_front' ), false );
	$self_id			 = modular_main( get_the_ID(), false );
	$menu_locations		 = get_nav_menu_locations();
	$menu				 = wp_get_nav_menu_object( $menu_locations[ 'primary' ] );
	$menu_items			 = wp_get_nav_menu_items( $menu->term_id );
	$menu_items_include	 = array();
	if ( !empty( $menu_items ) ) {
		foreach ( $menu_items as $item ) {
			if ( ($item->object == 'page') && (modular_get_post_meta( modular_main( $item->object_id, false ), 'xs_page_section' ) == "on") && ($item->object_id != $self_id) )
				$menu_items_include[] = $item->object_id;
		}
		$query = new WP_Query( array( 'post_type' => 'page', 'post__in' => $menu_items_include, 'posts_per_page' => count( $menu_items_include ), 'orderby' => 'post__in' ) );
		if ( !empty( $menu_items_include ) && $query->have_posts() ):
			while ( $query->have_posts() ):
				$query->the_post();
				global $post;
				fw_ext_shortcodes_enqueue_shortcodes_static( $post->post_content );
			endwhile;
			wp_reset_postdata();
		endif;
	}
}

add_action( 'wp_enqueue_scripts', '_action_theme_enqueue_custom_post_shortcode_assets', 31 );





spl_autoload_register( '_theme_includes_autoload' );

function _theme_includes_autoload( $class ) {
	switch ( $class ) {
		case 'Unyson_Google_Fonts':
			require_once MODULAR_INC . '/includes/unyson-google-fonts/class-unyson-google-fonts.php';
			break;
	}
}
