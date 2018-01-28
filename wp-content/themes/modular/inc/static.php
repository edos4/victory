<?php

if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Enqueue all theme scripts and styles
 *

  /** --------------------------------------
 * ** REGISTERING THEME ASSETS
 * ** ------------------------------------ */
/**
 * Enqueue styles.
 */
if (!is_admin()) {

    wp_enqueue_style('bootstrap.css', MODULAR_CSS . '/bootstrap.css', null, MODULAR_VERSION);

    wp_enqueue_style('modular-xs_main.css', MODULAR_CSS . '/xs_main.css', null, MODULAR_VERSION);

    wp_enqueue_style('modular-main.style', MODULAR_CSS . '/main.style.css', null, MODULAR_VERSION);


    wp_enqueue_style('animate.css', MODULAR_CSS . '/animate.css', null, MODULAR_VERSION);
    wp_enqueue_style('blog.css', MODULAR_CSS . '/blog.css', null, MODULAR_VERSION);
    wp_enqueue_style('modular-xs-blog', MODULAR_CSS . '/xs-blog.css', null, MODULAR_VERSION);
    wp_enqueue_style('font-awesome.css', MODULAR_CSS . '/font-awesome.css', null, MODULAR_VERSION);
    wp_enqueue_style('ie.css', MODULAR_CSS . '/ie.css', null, MODULAR_VERSION);
    wp_enqueue_style('magnific-popup.css', MODULAR_CSS . '/magnific-popup.css', null, MODULAR_VERSION);
    wp_enqueue_style('one-page-nav.css', MODULAR_CSS . '/one-page-nav.css', null, MODULAR_VERSION);
    wp_enqueue_style('owl-carousel.css', MODULAR_CSS . '/owl-carousel.css', null, MODULAR_VERSION);
    wp_enqueue_style('push-navigation.css', MODULAR_CSS . '/push-navigation.css', null, MODULAR_VERSION);
    wp_enqueue_style('smartmenu.css', MODULAR_CSS . '/smartmenu.css', null, MODULAR_VERSION);
    wp_enqueue_style('themify-icons.css', MODULAR_CSS . '/themify-icons.css', null, MODULAR_VERSION);

    wp_enqueue_style('modular-style', MODULAR_CSS . '/style.css', null, MODULAR_VERSION);
}




/**
 * Enqueue scripts.
 */
if (!is_admin()) {
    // wp_enqueue_script() syntax, $handle, $src, $deps, $version, $in_footer(boolean)
    //Unyson Form helper
    wp_enqueue_script('modular-form-helpers', MODULAR_SCRIPTS . '/fw-form-helpers.js', array('jquery'), MODULAR_VERSION, true);

    //Theme CSS FILES
    wp_enqueue_script('bootstrap.min.js', MODULAR_SCRIPTS . '/bootstrap.min.js', array('jquery'), MODULAR_VERSION, true);
    wp_enqueue_script('custom-google-map.js', MODULAR_SCRIPTS . '/custom-google-map.js', array('jquery'), MODULAR_VERSION, true);
    wp_enqueue_script('imagesloaded.pkgd.min', MODULAR_SCRIPTS . '/imagesloaded.pkgd.min.js', array('jquery'), MODULAR_VERSION, true);
    wp_enqueue_script('jquery.countdown.min.js', MODULAR_SCRIPTS . '/jquery.countdown.min.js', array('jquery'), MODULAR_VERSION, true);
    wp_enqueue_script('jquery.counterup.min.js', MODULAR_SCRIPTS . '/jquery.counterup.min.js', array('jquery'), MODULAR_VERSION, true);
    wp_enqueue_script('jquery.magnific-popup.min.js', MODULAR_SCRIPTS . '/jquery.magnific-popup.min.js', array('jquery'), MODULAR_VERSION, true);
    wp_enqueue_script('jquery.matchHeight-min.js', MODULAR_SCRIPTS . '/jquery.matchHeight-min.js', array('jquery'), MODULAR_VERSION, true);
    wp_enqueue_script('jquery.smartmenus.js', MODULAR_SCRIPTS . '/jquery.smartmenus.js', array('jquery'), MODULAR_VERSION, true);
    wp_enqueue_script('jquery.vide.min.js', MODULAR_SCRIPTS . '/jquery.vide.min.js', array('jquery'), MODULAR_VERSION, true);
    wp_enqueue_script('jquery.waypoints.min.js', MODULAR_SCRIPTS . '/jquery.waypoints.min.js', array('jquery'), MODULAR_VERSION, true);
    wp_enqueue_script('masonry.pkgd.min.js', MODULAR_SCRIPTS . '/masonry.pkgd.min.js', array('jquery'), MODULAR_VERSION, true);
    wp_enqueue_script('modernizr.js', MODULAR_SCRIPTS . '/modernizr.js', array('jquery'), MODULAR_VERSION, true);
    wp_enqueue_script('modular.scripts.js', MODULAR_SCRIPTS . '/modular.scripts.js', array('jquery'), MODULAR_VERSION, true);
    wp_enqueue_script('owl.carousel.js', MODULAR_SCRIPTS . '/owl.carousel.js', array('jquery'), MODULAR_VERSION, true);
    wp_enqueue_script('parsley.min.js', MODULAR_SCRIPTS . '/parsley.min.js', array('jquery'), MODULAR_VERSION, true);
    wp_enqueue_script('push.navigation.js', MODULAR_SCRIPTS . '/push.navigation.js', array('jquery'), MODULAR_VERSION, true);
    wp_enqueue_script('scrollreveal.js', MODULAR_SCRIPTS . '/scrollreveal.js', array('jquery'), MODULAR_VERSION, true);
    wp_enqueue_script('smartmenu.script.js', MODULAR_SCRIPTS . '/smartmenu.script.js', array('jquery'), MODULAR_VERSION, true);
    wp_enqueue_script('stellar.js', MODULAR_SCRIPTS . '/stellar.js', array('jquery'), MODULAR_VERSION, true);


    wp_enqueue_script('modular-main', MODULAR_SCRIPTS . '/main.js', array('jquery'), MODULAR_VERSION, true);




    // Load WordPress Comment js
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}


