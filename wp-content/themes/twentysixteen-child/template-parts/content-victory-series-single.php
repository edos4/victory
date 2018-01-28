<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1>Resources</h1>
		<div class="victory-image">
			<?php if(get_field('image')){?><img src="<?php the_field('image')?>"><?php } ?>
		</div>
		<div class="victory-details">
			<h2><?php the_title()?></h2>
			<div class="victory-content">
				<?php the_field('description')?>
			</div>
		</div>
		<div class="clear"></div>
	</header><!-- .entry-header -->
	<div class="victory-material-header">
		<h3>Victory Materials</h3>
<p>EBOOK / PRINT / PODCAST</p>
	</div>
	<div class="victory-material-container" >
						<?php
						$posts = get_field('list_of_series');
						if( $posts ): 
						$count = 0;
						
						?>
							<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
								<?php setup_postdata($post); $count++;?>
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
							<?php endforeach; ?>
					
							<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>
	
	</div>
	<div class="share-button">
		<h2>Share The Love</h2>
	<div class="addthis_inline_share_toolbox"></div>
	</div>
	<footer class="entry-footer">
		<?php twentysixteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
