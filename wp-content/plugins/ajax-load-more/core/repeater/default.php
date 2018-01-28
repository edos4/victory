<li<?php if (! has_post_thumbnail() ) { echo ' class="no-img"'; } ?>>
<a href="<?php the_permalink(); ?>">	
<?php
   	if ( has_post_thumbnail() ) {
   		the_post_thumbnail(array(400,300));
   	}
	?>
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<p class="entry-meta">
		<?php the_time("F d, Y"); ?>
	</p>
	<div class="blog-excerpt"><?php the_excerpt(); ?></div>
</a>
</li>