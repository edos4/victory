<?php
if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Helper functions used all over the theme
 */

/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package xs
 */
/*
  Return
 *
 *  */

// simply echos the variable

function modular_return($s) {
    return $s;
}

/*
 * FOR ONE PAGE Section
 * since 1.0
 */

function modular_editor_data($value) {
    return wp_kses_post($value);
}

// Gets unyson option data in safe mode
// since 1.0

function modular_get_option($k, $v = '', $m = 'theme-settings') {
    if (defined('FW')) {
	switch ($m) {
	    case 'theme-settings':
		$v = fw_get_db_settings_option($k);
		break;

	    default:
		$v = '';
		break;
	}
    }
    return $v;
}

// Gets unyson image url from option data in a much simple way
// sience 1.0

function modular_get_image($k, $v = '', $d = false) {

    if ($d == true) {
	$attachment = $k;
    } else {
	$attachment = modular_get_option($k);
    }

    if (isset($attachment['url']) && !empty($attachment)) {
	$v = $attachment['url'];
    }

    return $v;
}

/* Gets unyson image url from variable
 * sience 1.0
 * modular_image($img, $alt )
 */

function modular_image($img, $alt, $v = '') {

    if (isset($img['url']) && !empty($img)) {
	$i = $img['url'];
	$v = "<img src=" . $i . " alt=" . $alt . " />";
    }

    return $v;
}

// Gets original page ID/ Slug
// since 1.0

function modular_main($id, $name = true) {
    if (function_exists('icl_object_id')) {
	$id = icl_object_id($id, 'page', true, 'en');
    }

    if ($name === true) {
	$post = get_post($id);
	return $post->post_name;
    } else {
	return $id;
    }
}

// Creates SEO friendly section ID from page ID. Returns page ID directly if $return = true
// since 2.0
function modular_sectionID($id, $returnID = false) {

    if ($returnID == false) {

	$str = get_the_title($id);
	$patterns = array(
	    "/[:#+*+&+!+@+!+\.+?+%+$+\"+'+^+\[+<+{+\(+\)}+>+\]+,+`+;+,+=+\\\\]/", // match unwanted special characters
	    "@<(script|style)[^>]*?>.*?</\\1>@si", // match <script>, <style> tags
	    "/[~\r\n\t \/_|+ -]+/" // match newline, tab and more unwanted characters
	);

	$replacements = array(
	    "", // for 1st match
	    "", // for 2nd match
	    "-" // for 3rd match
	);

	$str = preg_replace($patterns, $replacements, strip_tags($str));
	return strtolower(trim($str, '-'));
    } else {

	return "section-$id";
    }
}

// Gets post's meta data in a much simplier way.
// since 1.0

function modular_get_post_meta($id, $needle) {
    $data = get_post_meta($id, 'fw_options');
    if (is_array($data) && isset($data[0]['page_sections'])) {
	$data = $data[0]['page_sections'];

	if (is_array($data)) {
	    return modular_seekKey($data, $needle);
	}
    }
}

function modular_seekKey($haystack, $needle) {
    foreach ($haystack as $key => $value) {

	if ($key == $needle) {
	    return $value;
	} elseif (is_array($value)) {
	    return modular_seekKey($value, $needle);
	}
    }
}

/*
 * btn Function
 * since 1.0
 */
//btn function

if (!function_exists('modular_theme_button_class')) :

    function modular_theme_button_class($style) {
	/**
	 * Display specific class for buttons - depends on theme
	 */
	if ($style == 'default') {
	    echo 'bttn bttn-transparent letter-spacing0';
	} elseif ($style == 'primary') {
	    echo 'bttn letter-spacing1';
	} elseif ($style == 'download') {
	    echo 'bttn letter-spacing1';
	} else {
	    echo 'default';
	}
    }

endif;


/*
 * wpml compatitible
 */

if (!function_exists('modular_theme_translate')) :

    function modular_theme_translate($content) {
	/**
	 * Return the content for translations plugins
	 * @param string $content
	 */
	$content = html_entity_decode($content, ENT_QUOTES, 'UTF-8');

	if (function_exists('icl_object_id') && strpos($content, 'wpml_translate') == true) {
	    $content = do_shortcode($content);
	} elseif (function_exists('qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage')) {
	    $content = qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage($content);
	}

	return $content;
    }

endif;


/*
 * This fucntion for recent post shortcode.
 * people can select show from one category or from all category
 * since 1.0
 */

// term
if (!function_exists('modular_get_category_term_list')) :

    function modular_get_category_term_list() {
	/**
	 * Return array of categories
	 */
	$taxonomy = 'category';
	$args = array(
	    'hide_empty' => true,
	);

	$terms = get_terms($taxonomy, $args);
	$result = array();
	$result[0] = esc_html__('All Categories', 'modular');

	if (!empty($terms))
	    foreach ($terms as $term) {
		$result[$term->term_id] = $term->name;
	    }
	return $result;
    }

endif;



/*
 * THis function for site_icon
 * since 1.0
 */


if (!function_exists('modular_get_header_icons')) {

    function modular_get_header_icons() {


	if (function_exists('wp_site_icon') && has_site_icon() && !is_customize_preview() && !defined('FW')) {
	    return;
	}


	$meta_tags = array(
	    sprintf('<link rel="icon" href="%s" sizes="32x32" />', esc_url(modular_get_image('favicon', MODULAR_IMAGES . '/ico/favicon.png'))),
	    sprintf('<link rel="icon" href="%s" sizes="192x192" />', esc_url(modular_get_image('site_icon_192', MODULAR_IMAGES . '/ico/site-icon-192.png'))),
	    sprintf('<link rel="apple-touch-icon-precomposed" href="%s" />', esc_url(modular_get_image('site_icon_180', MODULAR_IMAGES . '/ico/site-icon-180.png'))),
	    sprintf('<meta name="msapplication-TileImage" content="%s" />', esc_url(modular_get_image('site_icon_270', MODULAR_IMAGES . '/ico/site-icon-270.png'))),
	);

	foreach ($meta_tags as $meta_tag) {
	    echo "$meta_tag\n";
	}
    }

}


/*
 * Function for preloader
 */
if (!function_exists('modular_prerloader')) {

    function modular_prerloader() {
	if (defined("FW")) {
	    ?>
	    <div id="preloader">
	        <div id="status">
	    	<div data-loader="circle-side"></div>
	        </div>
	    </div>
	    <?php
	}
    }

}

/*
 * Function for color RGB
 */

function modular_color_rgb($hex) {
    $hex = preg_replace("/^#(.*)$/", "$1", $hex);
    $rgb = array();
    $rgb['r'] = hexdec(substr($hex, 0, 2));
    $rgb['g'] = hexdec(substr($hex, 2, 2));
    $rgb['b'] = hexdec(substr($hex, 4, 2));

    $color_hex = $rgb["r"] . ", " . $rgb["g"] . ", " . $rgb["b"];

    return $color_hex;
}

/*
 * Section Edit option
 *
 * This function for show section edit option in every section in one page
 *
 * Since 1.0
 *  */

function modular_edit_section() {
    ?>
    <div class="section-edit">
        <div class="container relative">
	    <?php
	    if (is_user_logged_in()) {
		edit_post_link(esc_html__('Edit', 'modular'), '', '');
	    }
	    ?>
    	<span class="section-abc"><?php echo esc_html(get_the_title()); ?></span>
        </div>
    </div>
    <?php
}

/*
 * WP Kses Allowed HTML Tags Array in function
 * @Since Version 0.1
 * @param ar
 * Use: modular_kses($raw_string);
 * */

function modular_kses($raw) {

    $allowed_tags = array(
	'a' => array(
	    'class' => array(),
	    'href' => array(),
	    'rel' => array(),
	    'title' => array(),
	),
	'abbr' => array(
	    'title' => array(),
	),
	'b' => array(),
	'blockquote' => array(
	    'cite' => array(),
	),
	'cite' => array(
	    'title' => array(),
	),
	'code' => array(),
	'del' => array(
	    'datetime' => array(),
	    'title' => array(),
	),
	'dd' => array(),
	'div' => array(
	    'class' => array(),
	    'title' => array(),
	    'style' => array(),
	),
	'dl' => array(),
	'dt' => array(),
	'em' => array(),
	'h1' => array(),
	'h2' => array(),
	'h3' => array(),
	'h4' => array(),
	'h5' => array(),
	'h6' => array(),
	'i' => array(
	    'class' => array(),
	),
	'img' => array(
	    'alt' => array(),
	    'class' => array(),
	    'height' => array(),
	    'src' => array(),
	    'width' => array(),
	),
	'li' => array(
	    'class' => array(),
	),
	'ol' => array(
	    'class' => array(),
	),
	'p' => array(
	    'class' => array(),
	),
	'q' => array(
	    'cite' => array(),
	    'title' => array(),
	),
	'span' => array(
	    'class' => array(),
	    'title' => array(),
	    'style' => array(),
	),
	'strike' => array(),
	'strong' => array(),
	'data-wow-duration' => array(),
	'data-wow-delay' => array(),
	'data-wallpaper-options' => array(),
	'data-stellar-background-ratio' => array(),
	'ul' => array(
	    'class' => array(),
	),
    );

    if (function_exists('wp_kses')) { // WP is here
	$allowed = wp_kses($raw, $allowed_tags);
    } else {
	$allowed = $raw;
    }



    return $allowed;
}

if (!function_exists('modular_get_breadcrumbs')) {

    function modular_get_breadcrumbs($seperator) {
	if (!is_home()) {
	    echo '<span><a href="';
	    echo esc_url(get_home_url('/'));
	    echo '">';
	    echo 'Home';
	    echo "</a></span> / ";
	    if (is_category() || is_single()) {
		echo '<span>';
		$category = get_the_category();
		echo esc_html($category[0]->cat_name) . '</span>';
		echo "<span>";
		echo wp_trim_words(get_the_title(), 3);
		echo '</span>';
	    } elseif (is_page()) {
		echo '<span>';
		echo wp_trim_words(get_the_title(), 3);
		echo '</span>';
	    }
	}
	if (is_tag()) {
	    single_tag_title();
	} elseif (is_day()) {
	    echo"<span>" . __('Blogs for', 'modular') . " ";
	    the_time('F jS, Y');
	    echo'</span>';
	} elseif (is_month()) {
	    echo"<span>" . __('Blogs for', 'modular') . " ";
	    the_time('F, Y');
	    echo'</span>';
	} elseif (is_year()) {
	    echo"<span>" . __('Blogs for', 'modular') . " ";
	    the_time('Y');
	    echo'</span>';
	} elseif (is_author()) {
	    echo"<span>" . __('Author Blogs', 'modular');
	    echo'</span>';
	} elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
	    echo "<span>" . __('Blogs', 'modular');
	    echo'</span>';
	} elseif (is_search()) {
	    echo"<span>" . __('Search Result', 'modular');
	    echo'</span>';
	} elseif (is_404()) {
	    echo"<span>" . __('404 Not Found', 'modular');
	    echo'</span>';
	}
    }

}


if (!function_exists('modular_advanced_xs_font_styles')) :

    /**
     * Get shortcode advanced Font styles
     *
     */
    function modular_advanced_xs_font_styles($style) {
	$font_styles = '';
	if (isset($style['google_font']) && ($style['google_font'] === true || $style['google_font'] === 'true' )) {

	    $font_styles .= isset($style['family']) ? 'font-family:' . esc_attr($style['family']) . ';' : '';

	    if (strpos($style['variation'], 'italic') !== false)
		$font_styles .= 'font-style:italic;';
	    elseif (strpos($style['variation'], 'oblique') !== false)
		$font_styles .= 'font-style: oblique;';
	    else
		$font_styles .= 'font-style: normal;';

	    $font_styles .= (intval($style['variation']) == 0) ? 'font-weight:400;' : 'font-weight:' . intval($style['variation']) . ';';
	}else {
	    $font_styles .= isset($style['family']) ? 'font-family:' . esc_attr($style['family']) . ';' : '';
	    $font_styles .= isset($style['style']) ? 'font-style:' . esc_attr($style['style']) . ';' : '';
	    $font_styles .= isset($style['weight']) ? 'font-weight:' . esc_attr($style['weight']) . ';' : '';
	}
	$font_styles .= isset($style['color']) && !empty($style['color']) ? 'color:' . esc_attr($style['color']) . ';' : '';
	$font_styles .= isset($style['line-height']) && !empty($style['line-height']) ? 'line-height:' . esc_attr($style['line-height']) . 'px;' : '';
	$font_styles .= isset($style['letter-spacing']) && !empty($style['letter-spacing']) ? 'letter-spacing:' . esc_attr($style['letter-spacing']) . 'px;' : '';
	$font_styles .= isset($style['size']) && !empty($style['size']) ? 'font-size:' . esc_attr($style['size']) . 'px;' : '';



	return !empty($font_styles) ? $font_styles : '';
    }

endif;

function modular_filter_theme_disable_sliders($sliders) {
    $key1 = array_search('owl-carousel', $sliders);
    $key2 = array_search('nivo-slider', $sliders);
    $key3 = array_search('bx-slider', $sliders);
    unset($sliders[$key1]);
    unset($sliders[$key2]);
    unset($sliders[$key3]);
    return $sliders;
}

add_filter('fw_ext_slider_activated', 'modular_filter_theme_disable_sliders');

function modular_custom_excerpt_length($length) {
    return 25;
}

add_filter('excerpt_length', 'modular_custom_excerpt_length', 999);

function modular_custom_excerpt_more($more) {
    return '<a class="more-link" href="' . get_permalink() . '">' . __('Continue Reading', 'modular') . '</a>';
}

add_filter('excerpt_more', 'modular_custom_excerpt_more');
