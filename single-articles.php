<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package potato_theme
 */

get_header(); ?>

				

				<div class="container content-body">

					<h2 class="main-content-title animated fadeInUp"><?php the_title(); ?></h2>
					<div class="title-line animated fadeInUp wow"></div>

										<?php
										if ( have_posts() ) : ?>

											<?php
											/* Start the Loop */
											while ( have_posts() ) : the_post();

											if(has_post_thumbnail()){ $featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); } else { $featured_img = "http://lorempixel.com/g/1360/300/"; }
											?>
						
					
						<div class="sections ind-mobile-pad animated fadeIn wow">
								<div class="featured-article">

									<div class="latest-icons hidden-xs hidden-sm">
										<a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><i class="fa fa-facebook"></i></a>
										<a target="_blank" href="https://twitter.com/intent/tweet?original_referer=<?php the_permalink();?>"><i class="fa fa-twitter"></i></a>
									</div>

									<?php the_content(); ?>

								</div>
						</div>

						<?php
										endwhile; wp_reset_query(); 

											the_posts_navigation();

										else :

											get_template_part( 'template-parts/content', 'none' );

										endif; ?>

						<!-- <div class="episode-summary featured-te  xt white-container clearfix">
								<h3 class="left"><?php the_field('featured_title'); ?></h3>
								<div class="clear"></div>
								<h4><?php the_field('featured_schedule'); ?></h4>
								<p><?php the_field('featured_description'); ?></p>
								
								<div class="hidden-md hidden-lg mob-latest-icon">
									<a class="btn-share" href="#">SHARE</a>
									<a class="btn-tweet" href="#">TWEET</a>
								</div>								
						</div> -->
						

						
						<!-- <div class="advertisement-ind" >
							<img src="http://lorempixel.com/900/100/" />
						</div>	 -->				
					
						<div class="sections ind-mobile-pad might-like-container">

							<h2 class="main-content-title animated fadeInUp wow">Related Articles</h2>
							<div class="title-line animated fadeInUp wow"></div>
						<?php
							global $post;

							$current_post_type = get_post_type( $post );

							// The query arguments
							$args = array(
							    'posts_per_page' => 3,
							    'order' => 'DESC',
							    'orderby' => 'ID',
							    'post_type' => $current_post_type,
							    'post__not_in' => array( $post->ID )
							);

							// Create the related query
							$rel_query = new WP_Query( $args );

							// Check if there is any related posts
							if( $rel_query->have_posts() ) : 
							?>
							<?php
							    // The Loop
							    while ( $rel_query->have_posts() ) :
							        $rel_query->the_post();

							    if(get_field('featured_image')!=null){ $featured_img = get_field('featured_image'); } else { $featured_img = "http://lorempixel.com/g/300/250/"; }
							?>
							        <a class="lnk2" href="<?php the_permalink(); ?>">
										<div class="col-xs-12 col-sm-12 col-md-4 pad-off animated fadeInUp wow">
											<div class='ep-list clearfix might-like ml-cards'>
												<div class="col-xs-5 col-sm-6 col-md-12 img-limiter2 portrait">
													<img class="full-width" src="<?php echo $featured_img; ?>" />
												</div>
												<div class="col-xs-7 col-sm-6 col-md-12 ep-list-content related white-container might-like-text">
													<h4><?php the_title(); ?> <?php the_field('release_schedule'); ?> <?php the_field('release_time'); ?></h4>
													<a class="view-more" href="<?php the_permalink(); ?>"> View More <i class="fa fa-chevron-circle-right"></i></a>
												</div>	
											</div>
										</div>
									</a>
							<?php
							    endwhile;
							?>
							<?php
							endif;

							// Reset the query
							wp_reset_query(); ?>

						</div>

				</div>  <!--end of container--> 
	
<?php
get_footer();