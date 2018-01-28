<?php
/**
 * Template Name: About Template
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
<div id="about-sec1">
  <div class="full-container">
    <div class="about-left">
     <?php if(get_field('title_left')){ echo "<h2>".get_field('title_left')."</h2>";}?>
    </div>
    <div class="about-right" style="background-image:url(<?php echo get_field('background-image')?>)">
    	<?php if(get_field('title_right')){ echo "<h2>".get_field('title_right')."</h2>";}?>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div id="about-sec2">
  <div class="my-container">
    <div class="about-sec2-img">
      <?php if(get_field('image')){ echo "<img src='".get_field('image')."'>";}?>
    </div>
    <div class="about-left2">
     <?php if(get_field('about_details')){ echo get_field('about_details');}?>
    </div>
    <div class="about-right2">
    	 <?php if(get_field('worship_schedule')){ echo get_field('worship_schedule');}?>
    </div>
    <div class="clear"></div>
      <div class="left">
     <?php if(get_field('honor_god')){ echo get_field('honor_god');}?>
    </div>
    <div class="right">
    	 <?php if(get_field('make_discriple')){ echo get_field('make_discriple');}?>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div id="about-sec3">
  <div class="my-container">
    <?php if(get_field('history_title')){ echo "<h2>".get_field('history_title')."</h2>";}?>
     <?php if(get_field('history_content')){ echo get_field('history_content');}?>
  </div>
</div>
<div id="about-sec4">
  <div class="my-container">
   <?php $count=0;$count2=0;?>
<div id="tabs">
<?php if(get_field('our_values')): ?>
  <ul>
  <?php while(has_sub_field('our_values')): ?>
    <li><a href="#tabs-<?php echo $count++; ?>"><?php the_sub_field('title_r'); ?></a></li>
  <?php endwhile; ?>
  </ul>
<?php endif; ?>
<?php if(get_field('our_values')): ?>
	 <?php while(has_sub_field('our_values')): ?>
		  <div id="tabs-<?php echo $count2++; ?>">
				<?php the_sub_field('content_r'); ?>
		  </div>
	  <?php endwhile; ?>
 <?php endif; ?>
</div>

  </div>
</div>
<?php get_footer(); ?>