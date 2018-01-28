<?php
/**
 * Template Name: Homepage Template
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
<section id="slider">
<?php echo do_shortcode('[rev_slider alias="home"]')?>
</section>

<!--<section id="hp-sec1" style="background:url(<?php if( get_field('banner_background_image')){ the_field('banner_background_image');} else{ echo '#5c7d81'; } ?>);">
	<div class="my-container">
		<?php if(get_field('banner_logo')){ ?> <img src="<?php the_field('banner_logo'); } ?>">
		<h1><?php the_field('title')?></h1>
		<p><?php the_field('sub_title');?></p>
		<div class="banner-buttons">
		<a href="<?php the_field('button_left_link');?>"><?php the_field('button_left');?></a>
		<a href="<?php the_field('button_left_link');?>"><?php the_field('button_right_label');?></a>
		</div>
	</div>
</section> -->
<section id="hp-sec2" class="wow fadeInLeftBig" data-wow-duration="1.5s" >
	<div class="my-container">
		<?php if(get_field('new-sec2-title')){ echo "<h2>".get_field('new-sec2-title')."</h2>";}?>
		<?php if(get_field('button_label1')){ echo "<a class='read-more-btn' href='".get_field('button_link1')."'>".get_field('button_label1')."</a>";}?>
	</div>
</section>
<!--<section id="hp-sec3" class="wow slideInRight" data-wow-duration="1.5s"  style="background-image:url(<?php the_field('background-img-sec3')?>)">
	<div class="full-container">
		<div class="sec3-left"  >
			<img src="<?php the_field('left_background_image')?>">
		</div>
		<div class="sec3-right" >
			<h2 class="wow FadeIn" data-wow-duration="1.5s"><?php the_field('sec3-title')?></h2>
			 <?php
					$args = array( 'post_type' => 'victory-materials', 'posts_per_page' => 2 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();?>
						<h3><?php the_title()?></h3>
						<div class="material-container">
							<div class="material-col" id="material-col1" >
								<a href="<?php the_field('tagalog_version_copy')?>" download><i class="fa fa-download" aria-hidden="true"></i><span>Filipino</span></a>
							</div>
							<div class="material-col" id="material-col1">
								<a href="<?php the_field('english_version_copy')?>" download><i class="fa fa-download" aria-hidden="true"></i><span>English</span></a>
							</div>
							<div class="material-col" id="material-col1">
								<?php if(get_field('podcast')){?>
								<button class="podcast-btn" id="<?php echo get_the_ID()?>"><i class="fa fa-microphone" aria-hidden="true"></i><span>Podcast</span></button>
								
								<?php } ?>
								
							</div>
							<div class="podcast" id="podcast-<?php echo get_the_ID()?>">
									<h4><?php the_field('pastor')?></h4>
									<?php $code=get_field('podcast')?>
									<?php echo do_shortcode('[audio src="'.$code.'"]'); ?>
							</div>
							
						</div>	
					<?php endwhile;wp_reset_query();
			?>
		<a href="<?php the_field('view_more_link');?>" class="view-more"><?php the_field('view_more_labels');?></a>
	</div>
	<div class="clear"></div>
	</div>
</section>-->
<section id="hp-sec3" class="wow slideInRight" data-wow-duration="1.5s"  style="background-image:url(<?php the_field('background-img-sec3')?>)">
	<div class="full-container">
		<div class="sec3-left"  >
			<img src="<?php the_field('left_background_image')?>">
		</div>
		<div class="sec3-right" >
			<h2 class="wow FadeIn" data-wow-duration="1.5s"><?php the_field('sec3-title')?></h2>
			 <?php
					$args = array( 'post_type' => 'victory-series','posts_per_page'	=> 1,'orderby' => 'post_date','order' => 'DESC',);
					$loop = new WP_Query( $args );
					$url = '';
					while ( $loop->have_posts() ) : $loop->the_post();?>
					<?php 
						$url = get_the_permalink();
						$posts = get_field('list_of_series');
						if( $posts ): 
						$count = 0;
						
						?>
							<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
								<?php setup_postdata($post); $count++;?>
								<?php if($count <= 2 ){?>
								<h3><?php echo get_the_title( $posts->ID );?><span><?php echo the_field('sub_title', $posts->ID );?></span></h3>
								<div class="material-container">
									<div class="material-col" id="material-col1" >
										<a href="<?php the_field('tagalog_version_copy',$posts->ID)?>" download><i class="fa fa-download" aria-hidden="true"></i><span>Filipino</span></a>
									</div>
									<div class="material-col" id="material-col1">
										<a href="<?php the_field('english_version_copy',$posts->ID)?>" download><i class="fa fa-download" aria-hidden="true"></i><span>English</span></a>
									</div>
									<div class="material-col" id="material-col1">
										<?php if(get_field('podcast')){?>
										<button class="podcast-btn" id="<?php echo get_the_ID($posts->ID)?>"><i class="fa fa-microphone" aria-hidden="true"></i><span>Podcast</span></button>
										<?php } ?>
										
									</div>
									<?php if(get_field('list_of_podcast',$posts->ID)): ?>
									<?php while(has_sub_field('list_of_podcast',$posts->ID)): ?>
										<div class="podcast podcast-<?php echo get_the_ID($posts->ID)?>" id="">
												<h4><?php the_sub_field('pastor',$posts->ID)?></h4>
												<?php $code=get_sub_field('podcast')?>
												<?php echo do_shortcode('[audio src="'.$code.'"]'); ?>
										</div>
									<?php endwhile; ?>
									<?php endif; ?>
								</div>	
								<?php } ?>
							<?php endforeach; ?>
					
							<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>
					<?php endwhile;wp_reset_query();
			?>
		<a href="<?php echo $url;?>" class="view-more"><?php the_field('view_more_labels');?></a>
	</div>
	<div class="clear"></div>
	</div>
</section>
<section id="hp-sec4" class="wow slideInLeft"  data-wow-duration="1.5s" >
	<div class="my-container">
		<h2><?php the_field('title-sec4');?></h2>
		<div class="hp-blog">
		<ul>
		  <?php
					$args = array( 'post_type' => 'post', 'posts_per_page' => 4 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();?>
						<li><a href="<?php the_permalink()?>">
						<div class="category"><?php  $categories = get_the_category(); echo esc_html( $categories[0]->name ); ?></div>
						<h3><?php the_title()?></h3>
						<div class="article-content">
							<p><?php echo substr(get_the_excerpt(), 0,300)?>[...]</p>
						</div>
						<div class="date">
							<?php the_time('F j, Y'); ?>
						</div>
					
						</a>
						</li>
					<?php endwhile;wp_reset_query();
			?>
			<a class="read-more-btn" href="<?php the_field('button_link')?>"><?php the_field('button_label-sec4')?></a>
				</ul>
			
		</div>
	</div>
</section>
<!--<section id="hp-sec5"  class="wow slideInRight"  data-wow-duration="1.5s"  style="background-image:url(<?php the_field('background_image5')?>)">
	<div class="my-container">
	<h2><?php /*the_field('sec5-title');?></h2>
		 <?php
					$args = array( 'post_type' => 'video-update', 'posts_per_page' => 1 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();?>

		<div class="hp5-rigt right">
			<div class="video">
				<?php echo get_field('video');?>
			</div>
		</div>
		<div class="hp5-left left">
		<h3 class="video-title">	<a href="<?php the_permalink()?>"> <?php the_title()?></a></h3>
			<div class="video-content">
				<p><?php echo get_the_excerpt()?></p>
			</div>
			<?php endwhile;wp_reset_query();?>
			<a class="read-more-btn bounceIn"  data-wow-duration="1.5s" data-wow-delay='1.5s' href="<?php the_field('sec5-button_link')?>"><?php the_field('sec5-button_label')*/?></a>
		</div>
		
		<div class="clear"></div>
		
		</div>
		</div>
	</div>
</section>-->
<section id="hp-sec5"  >
	<div class="full-container">
		<div class="left wow slideInLeft"  data-wow-duration="1.5s" style="background-image:url(<?php the_field('background_image_left')?>);">
      <div class="half-container">
      	<?php the_field('bacolod_schedules');?>
      </div>
    </div>
    <div class="right  wow slideInRight"  data-wow-duration="1.5s" style="background-image:url(<?php the_field('background_image_right')?>);">
        <div class="half-container">
        	<?php the_field('silay_schedules');?>
      </div>
    </div>
    <div class="clear">
    </div>
	</div>
</section>
<section id="hp-sec2" class="wow fadeInLeftBig" data-wow-duration="1.5s" >
	<div class="my-container">
		<?php if(get_field('new-sec5-title')){ echo "<h2>".get_field('new-sec5-title')."</h2>";}?>
		<?php if(get_field('button_label6')){ echo "<a class='read-more-btn' href='".get_field('button_link6')."'>".get_field('button_label1')."</a>";}?>
	</div>
</section>
<section id="hp-sec7"  class="wow slideInRight" data-wow-duration="1.5s" style="background-image:url(<?php the_field('background_image7')?>)">
<div class="my-container">
		<img src="<?php the_field('eic_logo');?>">
		<div style="text-align:center"><a class="read-more-btn" href="<?php the_field('button_link7')?>"><?php the_field('button_label7')?></a></div>
</div>
</section>
<section id="hp-sec8"  class="wow slideInLeft"  data-wow-duration="1.5s" >
<div class="my-container">
		<h2><?php the_field('title8')?></h2>
		<div style="text-align:center"><a class="read-more-btn bounceIn"  data-wow-duration="2.5s" href="<?php the_field('button_link8')?>"><?php the_field('button_label8')?></a></div>
</div>
</section>
<section id="hp-sec9" class="wow slideInRight" data-wow-duration="1.5s" style="background-image:url(<?php the_field('background_image9')?>)">
<div class="my-container">
		<img src="<?php the_field('real_life_logo');?>">
		<div style="text-align:center"><a class="read-more-btn bounceIn"  data-wow-duration="2.5s" href="<?php the_field('button_link9')?>"><?php the_field('button_label9')?></a></div>
</div>
</section>
<?php get_footer(); ?>