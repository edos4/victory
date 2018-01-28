<?php
/*
 * This is for nav style
 *  */

$menu_style		 = modular_get_option( 'menu_style' );
$menu_bg		 = $menu_full_width = $menu_search	 = $fixedtop		 = $fixedtopnav	 = '';
if ( defined( 'FW' ) ) {

	$menu_logo	 = fw_get_db_settings_option( 'menu_logo' );
	$scroll_logo = fw_get_db_settings_option( 'scroll_logo' );
	$full_width	 = fw_get_db_settings_option( 'full_width' );
	$menu_search = fw_get_db_settings_option( 'menu_search' );

	if ( $full_width == 'yes' ) {
		$menu_full_width = 'container-fluid';
	} else {
		$menu_full_width = 'container';
	}

	if ( $menu_style == 'menu-1' ) {
		$menu_bg = 'trnsparent';
	} else if ( $menu_style == 'menu-2' ) {
		$menu_bg = 'light-nav no-border';
	} else if ( $menu_style == 'menu-3' ) {
		$menu_bg = 'dark-nav';
	} else if ( $menu_style == 'menu-4' ) {
		$menu_bg = 'light-nav no-border navbar-four';
	}
} else {
	$menu_style	 = 'menu-3';
	$menu_bg	 = 'dark-nav';
}
$onepagenav = modular_get_option( 'onepagenav', 'no' );
if ( $onepagenav == 'yes' ) {
	$fixedtop	 = 'navbar-fixed-top';
	$fixedtopnav = 'nav';
}
?>
<nav id="main-nav" class="<?php echo esc_attr( $menu_bg ); ?> <?php echo esc_attr( $fixedtop ); ?>" role="navigation">
    <div class="<?php echo esc_attr( $menu_full_width ); ?>">
		<!-- logo -->
		<a class="brand-name" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img class="scroll-logo" src="<?php echo modular_get_image( 'scroll_logo', MODULAR_IMAGES . '/logo_big_dark.png' ) ?>" width="130" alt="<?php bloginfo( 'name' ); ?>">
			<img class="initial-logo" src="<?php echo modular_get_image( 'menu_logo', MODULAR_IMAGES . '/logo_big_light.png' ) ?>" width="130" alt="<?php bloginfo( 'name' ); ?>">
		</a>

		<!-- Menu Button -->
		<a class="toggle-bttn" href="#0">
			<span></span>
		</a>

		<?php if ( $menu_search == 'yes' ): ?>
			<!-- search and shopping cart -->
			<div class="other-tools">
				<a class="menusearch" href="#0"><span class="ti-search"></span></a>
			</div>
			<!-- search field -->
			<div class="search-field-wrapper">
				<div class="container">
					<form class="search-form clearfix" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
						<div>
							<span class="ti-search search-form-icon"></span>
							<input id="search" type="text" name="s" value="<?php echo get_search_query() ?>">
							<label for="search"><?php esc_html_e( 'Search here & hit enter...', 'modular' ) ?></label>
						</div>
					</form>
				</div>
			</div>
		<?php endif; ?>

		<!-- Main Navigation Menu -->
		<?php
		wp_nav_menu( array(
			'menu'			 => 'primary',
			'theme_location' => 'primary',
			'menu_id'		 => 'main-menu',
			'container_id'	 => '',
			'menu_class'	 => $fixedtopnav . ' sm sm-clean',
			'fallback_cb'	 => 'modular_xs_navwalker::fallback',
			'walker'		 => new modular_xs_navwalker() )
		);
		?>
	</div>

</nav>

