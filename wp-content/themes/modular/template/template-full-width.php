<?php
/**
 * template-full-width.php
 *
 * Template Name: Full Width Page
 */
$page_header = '';
if ( defined( 'FW' ) ) {
	$main_page_header	 = fw_get_db_settings_option( 'general_page_header' );
	$page_header		 = $main_page_header[ 'page_header' ];
}
?>


<?php get_header(); ?>
<div class="blog" role="main">
	<?php
	if ( $page_header == 'yes' ):
		get_template_part( 'content/content', 'page-header' );
	endif;
	?>
    <div class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- Article content -->
				<div class="full-width-content">
					<?php the_content(); ?>

					<?php wp_link_pages(); ?>
				</div> <!-- end entry-content -->

				<!-- Article footer -->
				<footer class="entry-footer">
					<?php
					if ( is_user_logged_in() ) {
						echo '<p>';
						edit_post_link( esc_html__( 'Edit', 'modular' ), '<span class="meta-edit">', '</span>' );
						echo '</p>';
					}
					?>
				</footer> <!-- end entry-footer -->
			</article>


		<?php endwhile; ?>
    </div> <!-- end main-content -->

</div> <!-- end main-content -->
<?php get_footer(); ?>