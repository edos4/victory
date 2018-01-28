<?php
/**
 * @package _spx
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_content(); ?>
	<?php wp_link_pages(array(
	    'before' => '<p>' . esc_html__('Pages: ', 'modular'),
	    'after' => '</p>',
	    'next_or_number' => 'next_and_number', # activate parameter overloading
	    'nextpagelink' => esc_html__('Next ', 'modular'),
	    'previouspagelink' => esc_html__(' Previous', 'modular'),
	    'pagelink' => '%',
	    'echo' => 1 )
	); ?>
	<hr>
	<?php modular_post_tags(); ?>

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'modular' ), '<div class="edit-link">', '</div>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
