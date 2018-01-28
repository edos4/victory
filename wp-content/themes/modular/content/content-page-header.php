<?php
/**
 * Page Header
 *
 */
$heading			 = $bg_image			 = $bg_image_overlay	 = $page_desc			 = $page_style			 = '';
if ( defined( 'FW' ) ) {
	$hero_heading	 = fw_get_db_settings_option( 'general_page_header' );
	$page_style		 = $hero_heading[ 'page_style' ];

	$page_sections	 = fw_get_db_post_option( $post->ID, 'page_sections' );
	$heading		 = $page_sections[ 'no' ][ 'header_title' ] != '' ? $page_sections[ 'no' ][ 'header_title' ] : $hero_heading[ 'header_title' ];
	$page_desc		 = $page_sections[ 'no' ][ 'header_desc' ] != '' ? $page_sections[ 'no' ][ 'header_desc' ] : $hero_heading[ 'header_desc' ];


	$page_hero_heading	 = modular_get_option( 'general_page_header' );
	$page_hero_overlay	 = $page_hero_heading[ 'header_overlay_color' ];

	$page_hero		 = $page_hero_heading[ 'header_image' ];
	$page_bg_image	 = $page_sections[ 'no' ][ 'header_image' ];


	$page_overlay = $page_sections[ 'no' ][ 'header_overlay_color' ];

	if ( $page_bg_image == '' ) {
		$bg_image = 'style="background: url(' . $page_hero[ 'url' ] . ')no-repeat center top scroll;-moz-background-size: cover;background-size: cover;-webkit-background-size: cover;-o-background-size: cover;width: 100%;overflow: hidden"';
	} else {
		$bg_image = 'style="background: url(' . $page_bg_image[ 'url' ] . ')no-repeat center top scroll;-moz-background-size: cover;background-size: cover;-webkit-background-size: cover;-o-background-size: cover;width: 100%;overflow: hidden"';
	}

	if ( $page_overlay == '' ) {
		$bg_image_overlay = "style='background-color:$page_hero_overlay;z-index:3;position:relative;'";
	} else {
		$bg_image_overlay = "style='background-color:$page_overlay;z-index:3;position:relative;'";
	}
}
?>




<?php if ( $page_style == 'page-1' ): ?>
	<section class="page-title-simple page-title-4" <?php echo wp_kses_post( $bg_image ); ?>>
		<div class="page-hero-overlay" <?php echo wp_kses_post( $bg_image_overlay ); ?>>
			<div class="container">
				<div class="col-md-6 col-sm-7">
					<h3 class="text-white font-josefin"><?php echo esc_attr( $heading ); ?></h3>
					<p><?php echo wp_kses_post( $page_desc ); ?></p>
				</div>
				<ul class="title-nav">
					<?php echo modular_get_breadcrumbs( '-' ) ?>
				</ul>
			</div>
		</div>
	</section>

<?php elseif ( $page_style == 'page-2' ): ?>
	<section class="page-title-modern page-title-md-4" <?php echo wp_kses_post( $bg_image ); ?>>
		<div class="page-hero-overlay" <?php echo wp_kses_post( $bg_image_overlay ); ?>>
			<div class="container">
				<div class="page-center">
					<h3 class="text-white"><?php echo esc_attr( $heading ); ?></h3>
					<p><?php echo wp_kses_post( $page_desc ); ?></p>
					<ul class="title-nav text-white">
						<?php echo modular_get_breadcrumbs( '-' ) ?>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<?php
 endif;