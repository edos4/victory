<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div id="blog-single-header" style="background-image:url(<?php the_field('background_image')?>)">
  <div class="my-container">
  		<?php the_title( '<h1>', '</h1>' ); ?>
   	  <p><?php the_date();?></p>
    <div class="social-media">
    	<div class="addthis_inline_follow_toolbox"></div>
    </div>
  </div>
</div>
<div id="blog-single-cont">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="my-container">
    <div class="content-blog">
	<?php twentysixteen_post_thumbnail(); ?>
		<?php
			the_content();
		?>
    
    </div>
     <div class="share-button">
		<h2>Share The Loves</h2>
	<div class="addthis_inline_share_toolbox"></div>
   <?php
//for use in the loop, list 5 post titles related to first tag on current post
$args=array(
'post__not_in' => array($post->ID),
'posts_per_page'=>3,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
echo "<h2 class='related-title'>YOU MAY ALSO LIKE</h2>";
echo "<ul class='related-post'>";
while ($my_query->have_posts()) : $my_query->the_post(); ?>
       <li>
       	<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
         <?php the_post_thumbnail(); ?>
          <h3><?php the_title();?></h3>
         	<p><?php echo get_the_date();?></p>
          </a>
       </li>
<?php
endwhile;
}
wp_reset_query();
?>
	</div>
  </div>
  </div>
</article><!-- #post-## -->
</div>
