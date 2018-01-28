<?php
/**
 * index.php
 *
 * The main template file.
 */
$blog_style	 = $blog_class	 = $blog_header = '';
if ( defined( 'FW' ) ) {
	$blog_main_style = fw_get_db_settings_option( 'general_posts_header' );

	$blog_header = $blog_main_style[ 'blog_header' ];
	$blog_style	 = $blog_main_style[ 'blog_style' ];

	if ( $blog_style == 'blog-1' ) {
		$blog_class = 'blog-card';
	} else if ( $blog_style == 'blog-2' ) {
		$blog_class = 'blog-card-small';
	}
} else {
	$blog_class = 'blog-single';
}
?>

<?php get_header(); ?>

<?php
if ( $blog_header == 'yes' ):
	get_template_part( 'content/content', 'blog-header' );
endif;
?>

<section class="<?php echo esc_attr( $blog_class ); ?> section-top-padding border-bottom-light light-bg">
    <div class="container">
		<?php if ( $blog_style == 'blog-1' ) { ?>
			<div class="col-xs-12 just-center">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<article>
							<!-- post wrapper -->
							<div class="blog-post">
								<!-- post image -->
								<?php
								if ( has_post_thumbnail() ) :
									$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '' );

									$img = fw_resize( $thumbnail[ 0 ], 740, 460 );
									?>
									<div class="blog-img col-md-8 col-sm-7 eq-ht bg-no-repeat" style="background:url('<?php echo esc_url( $img ); ?>')"></div>
									<!-- post content -->
									<div class="blog-content col-md-4 col-sm-5 eq-ht">
									<?php else:
										?>
										<!-- post content -->
										<div class="blog-content col-sm-12 eq-ht">
										<?php
										endif;
										?>


										<h6 class="subh-basic-dark"><?php
											if ( is_sticky() ) {
												echo '<span class="meta-featured-post"> <i class="fa fa-thumb-tack"></i> ' . esc_html__( 'Featured', 'modular' ) . ' </span>';
											}

											echo get_the_category_list();
											?>
										</h6>

										<h5> <a href="<?php the_permalink(); ?>"> <?php echo the_title(); ?></a></h5>
										<!-- Article content -->
										<div class="entry-content">
											<?php
											if ( is_search() ) {
												the_excerpt();
											} else {
												the_excerpt();
												wp_link_pages();
											}
											?>
										</div> <!-- end entry-content -->
										<span class="article-by">by <span class="author"><a href="<?php the_permalink(); ?>"> <?php the_author(); ?> </a></span></span>
									</div>
								</div>
						</article>
					<?php endwhile; ?>
					<?php modular_paging_nav(); ?>
				<?php else : ?>
					<?php get_template_part( 'content/content', 'none' ); ?>
				<?php endif; ?>
			</div>

		<?php } elseif ( $blog_style == 'blog-2' ) { ?>
			<div class="col-md-9 no-padding">
				<!-- Main Wrapper -->
				<div class="blog-wrapper">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class="col-sm-6 grid-item">
								<!-- Blog Post Wrapper -->
								<div class="blog-post">
									<!-- Post Image -->
									<div class="blog-img">
										<?php
										if ( has_post_thumbnail() ) :
											$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '' );

											$img = fw_resize( $thumbnail[ 0 ], 403, 273 );
											?>
											<img class="img-responsive" src="<?php echo esc_url( $img ); ?>" alt="<?php the_title(); ?>">
											<?php
										endif;
										?>

									</div>
									<!-- Blog Content -->
									<div class="blog-content">
										<span class="subh-basic-dark"><?php echo get_the_category_list(); ?></span>
										<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
										<span class="article-by">by <span class="author"><a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></span></span>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
						<?php modular_paging_nav(); ?>
					<?php else : ?>
						<?php get_template_part( 'content/content', 'none' ); ?>
					<?php endif; ?>
				</div>
			</div>

		<?php } else { ?>

			<div class="col-md-9 blog-single-sidebar">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<!-- article -->
						<article>
							<!-- Blog Post Wrapper -->
							<div class="blog-post">
								<a href="<?php the_permalink(); ?>">
									<!-- Post Image -->
									<div class="blog-img">
										<!-- post image -->
										<?php
										if ( has_post_thumbnail() ) :
											$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '' );
											if ( defined( 'FW' ) ) {
												$img = fw_resize( $thumbnail[ 0 ], 825, 550 );
											} else {
												$img = $thumbnail[ 0 ];
											}
											?>
											<img class="img-responsive" src="<?php echo esc_url( $img ); ?>" alt="">
											<?php
										endif;
										?>
									</div>
								</a>
								<!-- Post Content -->
								<div class="blog-content">
									<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
									<?php modular_post_meta() ?>

									<div class="entry-content">
										<?php
										if ( is_search() ) {
											the_excerpt();
										} else {

											the_content( __( '<strong>Read More..</strong>', 'modular' ) );

											wp_link_pages();
										}
										?>
									</div> <!-- end entry-content -->
								</div>
							</div>
						</article>

					<?php endwhile; ?>
					<?php modular_paging_nav(); ?>
				<?php else : ?>
					<?php get_template_part( 'content/content', 'none' ); ?>
				<?php endif; ?>
			</div>
			<?php
		}
		if ( $blog_style != 'blog-1' ) {
			get_sidebar();
		}
		?>
    </div>
</section>
<?php get_footer(); ?>

