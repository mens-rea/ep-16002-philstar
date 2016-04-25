<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package potato_theme
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<div class="container content-body search-result">
					
					<?php
					if ( have_posts() ) : ?>

						<h2 class="main-content-title">Results on <?php printf( esc_html__( '%s', 'potato_theme' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
						<div class="title-line"></div>

						<header class="page-header">
							<h1 class="page-title"></h1>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>

				</div> <!--end of container-->
				<!-- <a class="load-more" href="#"> Load more</a> -->

		

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();