<?php

function modular_action_xs_hook_css() {
	if ( defined( 'FW' ) ) {
		$main_color = fw_get_db_settings_option( 'main_color' );

		$color_hex = modular_color_rgb( $main_color );

		//global font
		$global_body_font = fw_get_db_settings_option( 'body_font' );

		Unyson_Google_Fonts::add_typography_v2( fw_get_db_settings_option( 'body_font' ) );
		$body_font = modular_advanced_xs_font_styles( fw_get_db_settings_option( 'body_font' ) );

		Unyson_Google_Fonts::add_typography_v2( fw_get_db_settings_option( 'heading_title' ) );
		$global_title = modular_advanced_xs_font_styles( fw_get_db_settings_option( 'heading_title' ) );

		Unyson_Google_Fonts::add_typography_v2( fw_get_db_settings_option( 'heading_subtitle' ) );
		$global_subtitle = modular_advanced_xs_font_styles( fw_get_db_settings_option( 'heading_subtitle' ) );

		/* Page Hero Settings */
		$blog_hero_heading	 = fw_get_db_settings_option( 'general_posts_header' );
		$blog_hero_overlay	 = $blog_hero_heading[ 'header_overlay_color' ];
		$blog_hero			 = $blog_hero_heading[ 'header_image' ] != '' ? $blog_hero_heading[ 'header_image' ][ 'url' ] : MODULAR_IMAGES . '/example.jpg';

		/* Page Hero Settings */
		$page_hero_heading	 = fw_get_db_settings_option( 'general_page_header' );
		$page_hero_overlay	 = $page_hero_heading[ 'header_overlay_color' ];
		$page_hero			 = $page_hero_heading[ 'header_image' ] != '' ? $page_hero_heading[ 'header_image' ][ 'url' ] : MODULAR_IMAGES . '/example.jpg';



		//custom css
		$custom_css	 = modular_get_option( 'custom_css' );
		$output		 = ".home-intro .intro-wrap h1, .home-intro-carousel h1, .home-intro-app-block h1{ $global_title }"
		. ".home-intro h5, .home-intro-2nd-half-try h5{ $global_title }"
		. "h1, h2, h3, h4, h5, h6, .fw-special-title{ $global_title }"
		. ".fw-special-subtitle, .fw-contact-form-description, .team-member h5{$global_subtitle}"
		. "body{ $body_font }.page-title-4, .page-title-md-4 {background: url( $page_hero ) no-repeat center center fixed;-moz-background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;-o-background-size:cover;background-size:cover;width:100%;overflow: hidden;}"
		. ".blog-post-title {background: url( $blog_hero )no-repeat. center center fixed;-moz-background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;-o-background-size:cover;background-size:cover;width:100%;overflow: hidden;}"
		. ".page-hero-overlay{background: $page_hero_overlay;width: 100%;} .blog-hero-overlay {background: $blog_hero_overlay;width: 100%;}"
		. ".colorsbg, .separator, .separator-left, .separator,.navbar-four .sm-clean .active > a, .counters-2 .col-sm-3:hover .icon {color: $main_color;}"
		. ".colorsbg, .separator, .separator-left, .separator,.navbar-four .nav>li.active>a:before, ::-webkit-scrollbar-thumb  {background: $main_color;}"
		. ".mod-pagination .current,input[type=checkbox]:checked + label:before,input:focus,textarea:focus,select:focus, input:focus,textarea:focus,select:focus, .contact-4 .wrapper:hover {border-color: $main_color;}"
		. ".testimonial-3 .name,.text-blue,.navbar-white .nav > li.active > a,.navbar-white .nav > li.active > a:focus,.navbar-white .nav > li.active > a,.navbar-white .nav > li.active > a:focus,.reply a,.comment .comment-meta a , .fn,#sidebar  a:hover,#sidebar #today,.search-form input,.nav-tabs > li.active > a,.nav-tabs > li.active > a:hover,.nav-tabs > li.active > a:focus,.grid-type-1 figure:hover .project,.divider i,input[type=radio]:checked + label:before, input[type=radio]:checked + label:before,.blog-card-small .blog-post:hover h6, .blog-card .blog-post:hover h5, .blog-content h6 a:hover, .entry-content strong,.blog-content h5 a:hover, .firstcharacter, .popular-post:hover .pop-title h6, .blog-card-small .blog-post:hover h6, .blog-card .blog-post:hover h5 , .testimonial-4 .name, .testimonial-2 .name, .price-4 .price-table:hover .price, .price-4 .border .main-info span, .price-4 .subinfo, .price-4 .plan, .price-3 .price-table:hover .price, price-3 .plan, .price-2 .plan, .price-1 .price-table.primary .price, .content-block-6 .all-features .icon, .footer-3 ul li a:hover, .hero-header-3 h2 {color: $main_color;}"
		. ".bttn-blue,.bttn-blue:hover,.search-icon:before,.owl-theme .owl-controls .owl-page.active span, .owl-theme .owl-controls.clickable .owl-page:hover span,.navbar-white .nav > li.active > a:before,.navbar-white .nav > li.active > a:focus:before,.navbar-white .nav > li.active > a:before,.navbar-white .nav > li.active > a:focus:before,.comment-form .btn-comments:active, .comment-form .btn-comments:focus, .comment-form .btn-comments:hover,.comment-form .btn-comments,.scrollup,.progress-bar-1 span.percent,.nav-tabs > li.active > a,.nav-tabs > li.active > a:hover,.nav-tabs > li.active > a:focus ,::selection,input[type=checkbox]:checked + label:before,.scrollup, .team-4 .icon, .price-4 .price-table:hover .purchase, .price-3 .price-table:hover .purchase, .content-block-12 .feature:hover i,.hero-header-3 .bttn:hover, .price-1 {background: $main_color;}"
		. ".mod-pagination .current,.bg-color{background-color: $main_color;}"
		. ".divider.divider-center.divider-short:before,.divider.divider-center:before,.divider:after {border-top: 1px solid $main_color;}"
		. ".nav-tabs > li.active > a,.nav-tabs > li.active > a:hover,.nav-tabs > li.active > a:focus {border-bottom: solid 2px $main_color;}"
		. ".content-block-12 .feature:hover i {border: solid 2px $main_color;}[data-loader='circle-side']{border: solid 4px $main_color;border-top-color: rgba(0, 0, 0, .2);border-right-color: rgba(0, 0, 0, .2);border-bottom-color: rgba(0, 0, 0, .2);}"
		. ".error-page .container {border-bottom: 10px solid $main_color;}"
		. ".team-1 .main-wrapper:hover:after, .grid-img:after{background: rgba($color_hex, 0.3);}"
		. ".team-4 figure figcaption{background: rgba($color_hex, 0.7);}"
		. "$custom_css";
		wp_add_inline_style( 'modular-style', $output );
	}
	wp_add_inline_script( 'modular-main', 'var adminAjax = "' . admin_url( 'admin-ajax.php' ) . '"' );
}

add_action( 'wp_enqueue_scripts', 'modular_action_xs_hook_css', 90 );
