<?php
/**
 * Template Name: Blog Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div id="blog-header" style="background-image:url(<?php the_field('background_image');?>)">
  <div class="my-container">
   <h1><?php the_field('title');?></h1>
  </div>
</div>
<div id="blog-cont">
  <div class="my-container">
  	<?php the_field('blog_shortcode')?>
  </div>
</div>
<?php get_footer(); ?>