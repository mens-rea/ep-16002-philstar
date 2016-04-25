<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package potato_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="container content-body">
					
					<h2 class="main-content-title"><?php the_title(); ?></h2>
					<div class="title-line"></div>
				
					<div class="contact-container">

						<?php echo the_content(); ?>

					</div>
					

				</div> <!--end of container-->
				
	
</article><!-- #post-## -->