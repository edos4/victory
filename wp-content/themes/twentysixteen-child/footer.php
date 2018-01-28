<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
</div><!-- .site-content -->
<section id="sub-footer">
<div class="my-container">
	<h2><?php the_field('title_footer','option');?></h2>
	<div class="footer-left left">
		<?php $code = get_field('contact_form','option');
		echo do_shortcode(''.$code.'')?>
	</div>
	<div class="footer-right right">
				<?php if(get_field('social_media','option')): ?>
					<ul>
					<?php while(has_sub_field('social_media','option')): ?>
						<li><a href="<?php the_sub_field('link','option')?>"><i class="<?php the_sub_field('fontawesome_icon','option')?>"></i></a></li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
					<div class="address">
						<p><?php the_field('address','option')?></p>
					</div>
					<div class="info">
						<span><i class="fa fa-phone"></i> <?php the_field('contact_number','option')?></span><span><i class="fa fa-envelope"></i> <?php the_field('email','option')?></span>
					</div>
					<div class="footer-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								 <?php if(get_field('logo','option')){ ?>
										<img src="<?php the_field('footer_logo','option')?>">
								 <?php } ?>
						</a>
					</div>
</div>
	<div class="clear"></div>
</div>
</section>
<footer id="colophon" class="site-footer" role="contentinfo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Copyright <?php date('Y');?> By <?php bloginfo( 'name' ); ?> - All Rights Reserved</a>
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->
<script>
	$(document).ready(function(){
	$(".podcast").hide();
	$(".podcast-btn").click(function(){
		var id = this.id;
		$(".podcast-"+id).toggle(500);
	});
	});
</script>
<?php wp_footer(); ?>
</body>
</html>
