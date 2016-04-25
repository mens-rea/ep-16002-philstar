<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package potato_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="row sections results">
		<header class="entry-header">
			<a class="search-results-title" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
		</header><!-- .entry-header -->
		<?php if ( 'post' === get_post_type() ) : ?>
		<!-- <div class="entry-meta">
			<?php potato_theme_posted_on(); ?>
		</div> --><!-- .entry-meta -->
		<?php endif; ?>
		<p><?php the_field('featured_description');?></p>
		<a class="view-more" href="<?php the_permalink(); ?>"> View More <i class="fa fa-chevron-circle-right"></i></a>						
	</div> 
	
	<?php /*the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );*/ ?>

	<!-- <footer class="entry-footer">
		<?php potato_theme_entry_footer(); ?>
	</footer> --><!-- .entry-footer -->
</article><!-- #post-## -->
