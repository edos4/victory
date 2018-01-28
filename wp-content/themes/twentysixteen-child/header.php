<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="profile" href="http://gmpg.org/xfn/11">	
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond|Open+Sans:300,400,600,700,800|Oswald:200,300,400,500,600,700|Raleway:200,300,400,500,600,600i,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
		<?php wp_head(); ?>
	<script>
		$(window).scroll(function(){
    	if ($(window).scrollTop() >=150) {
       $('#header').addClass('fixed-header');
   		 }
    	else {
     	  $('#header').removeClass('fixed-header');
   	    }
	});
	 $( function() {
		$( "#tabs" ).tabs({show: 'fade', hide: 'fade'});
	  } );
	</script>
</head>

<body <?php body_class(); ?>>
<header id="header">
	<div class="my-container">
		<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						  <?php if(get_field('logo','option')){ ?>
							<img src="<?php the_field('logo','option') ?>">
						  <?php } ?>
					</a>
		</div>
		<div class="main-menu">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
			<?php endif; ?>
		</div>
    <div class="clear"></div>
    </div>
</header>