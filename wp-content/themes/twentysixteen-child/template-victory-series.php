<?php
/**
 * Template Name: Victory Series Template
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
<section id="vs-gallery" style="background-image:url(<?php the_field('background_image');?>)" >
	<div class="my-container">
		<div class="victory-header">
					<?php $args = array( 'post_type' => 'victory-series','posts_per_page'	=> 1,'orderby' => 'post_date','order' => 'DESC',);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();?>
							<div class="victory-image">
								<?php if(get_field('image')){?><img src="<?php the_field('image')?>"><?php } ?>
							</div>
							<div class="victory-details">
								<h1><?php the_title()?></h1>
								<h3>Recent Series</h3>
								<div class="victory-content">
									<?php the_field('description')?>
								</div>
							</div>
							<div class="clear"></div>
					<?php endwhile;wp_reset_query();
			?>
	   
		</div>
	<div class="victory-series-podcast">
	<div id="tabs">
	 <ul>
		<?php 
		$taxonomy = 'themes_categories';
		$tax_terms = get_terms($taxonomy, array('hide_empty' => false, 'orderby' => 'name','order' => 'ASC' )); 
		$count =1;
		$count1 =1;
		 foreach($tax_terms as $term_single) {   ?>   
				<li><a href="#tabs-<?php echo $count++?>"><?php echo $term_single->name; ?></a></li>
		<?php } ?>
		</ul>	
		<?php foreach($tax_terms as $term_single1) {   ?>   
				<div id="tabs-<?php echo $count1++?>" class="victory-list">
					<?php $cid = $term_single1->slug;?>
						<div class="victory-material-container" >
					<?php $args1 = array( 'post_type' => 'victory-series','orderby' => 'post_date','order' => 'DESC','themes_categories' =>$cid,);
							$loop = new WP_Query( $args1 );
							while ( $loop->have_posts() ) : $loop->the_post();?>
							<div class="victory-series-list">
								<a href="<?php the_permalink();?>">
								<img src="<?php the_field('image');?>">
								<h3><?php echo the_title(); ?></h3>
								</a>
							</div>
							<?php endwhile;wp_reset_query();?>
	   
							</div>
				</div>
				
		<?php } ?>
		
	</div>
	</div>
	</div>
</section>
<?php get_footer(); ?>