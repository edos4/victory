<?php
/**
 * header.php
 *
 * The header for the theme.
 */
?>

<!DOCTYPE html>
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<?php modular_get_header_icons(); ?>
		<?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> data-spy="scroll" data-target="#main-menu">
		<?php modular_prerloader(); ?>
		<?php get_template_part( 'content/content', 'nav' ); ?>


