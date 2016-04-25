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

										<?php
										if ( have_posts() ) : ?>

											<?php
											/* Start the Loop */
											while ( have_posts() ) : the_post();

											if(get_field('header_image')!=null){ $featured_img = get_field('header_image'); } else { $featured_img = 'http://lorempixel.com/g/1360/360/'; }
											?>
						<div class="series-banner hidden-xs">
						<img class="img-responsive animated fadeIn wow" src="<?php echo $featured_img; ?>" />
							<div class="col-md-6 series-cta-holder">
								<div class="col-xs-12 col-md-4">
									<a id="latestep" class="btn-orange animated fadeInUp wow btn-center" href="#latestepisodes" style="background-color: <?php the_field('button_color'); ?>;">Latest Episodes</a>
								</div>
								<div class="col-xs-12 col-md-4">
									<?php if(get_field('facebook_link')!=null){ ?>
									<a class="btn-orange animated fadeInUp wow btn-center" target="_blank" href="<?php the_field('facebook_link'); ?>" style="background-color: <?php the_field('button_color'); ?>;">Facebook</a>
									<?php } ?>
								</div>
								<div class="col-xs-12 col-md-4">
									<?php if(get_field('twitter_link')!=null){ ?>
									<a class="btn-orange animated fadeInUp wow btn-center" target="_blank" href="<?php the_field('twitter_link'); ?>" style="background-color: <?php the_field('button_color'); ?>;">Twitter</a>
									<?php } ?>
								</div>
							</div>
						</div>

						<h2 id="latestepisodes" class="main-content-title animated fadeInUp wow">Latest Episode</h2>
						<div class="title-line animated fadeInUp wow"></div>

						<div class="video-container animated fadeInUp wow">
							<?php if(get_field('channel_link')!=null && get_field('channel_title')!=null) {?><div class="col-xs-12"><a target="_blank" class="video-channel" href="<?php the_field('channel_link'); ?>"><h4><i class="fa fa-tv"></i><?php the_field('channel_title'); ?></h4></a></div><?php } ?>
						</div>

						<div class="latest-icons hidden-xs hidden-sm">
							<a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><i class="fa fa-facebook"></i></a>
							<a target="_blank" href="https://twitter.com/intent/tweet?original_referer=<?php the_permalink();?>"><i class="fa fa-twitter"></i></a>
						</div>
						
						<div class="sections ind-mobile-pad">
								<!-- <div class="latest-icons right hidden-xs hidden-sm">
									<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><i class="fa fa-facebook"></i></a>
									<a href="https://twitter.com/intent/twee"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</div> -->
								<div class="featured-vid">

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
						
						
						<?php if(get_field('series_description')){ ?>
						<div class="row sections ind-mobile-pad">
							<div class="col-xs-12">
								<h2 class="main-content-title t-about">About</h2>
								<div class="title-line animated fadeInUp wow l-about"></div>
								
								<div class="content-padding about">
									<p><?php the_field('series_description');  ?></p>
								</div>
							</div>
						</div>
						<?php } ?>
					
						<div class="advertisement-ind" >
							<?php if(get_field('ad_banner')!=null){ $featured_img2 = get_field('ad_banner'); } else { $featured_img2 = 'http://lorempixel.com/g/1360/360/'; } ?>
							<img src="<?php echo $featured_img2; ?>" />
						</div>
					
						<div class="sections ind-mobile-pad ml-container">

							<?php
								//for use in the loop, list 5 post titles related to first tag on current post
								$tags = wp_get_post_tags($post->ID);
								if ($tags) {
							?>

							<h2 class="main-content-title">You might also like</h2>
							<div class="title-line animated fadeInUp wow"></div>

							<?php

								$first_tag = $tags[0]->term_id;
								$args=array(
									'tag__in' => array($first_tag),
									'post__not_in' => array($post->ID),
									'posts_per_page'=>3
								);
								$my_query = new WP_Query($args);
								if( $my_query->have_posts() ) {
								while ($my_query->have_posts()) : $my_query->the_post(); 

								if(get_field('featured_image')!=null){ $featured_img = get_field('featured_image'); } else { $featured_img = "http://lorempixel.com/g/300/250/"; }
								?>

									<a class="lnk2" href="<?php the_permalink(); ?>">
										<div class="col-xs-12 col-sm-12 col-md-4 pad-off">
											<div class='ep-list clearfix might-like ml-cards'>
												<div class="col-xs-5 col-sm-5 col-md-12 img-limiter2 portrait">
													<img class="full-width" src="<?php echo $featured_img; ?>" />
												</div>
												<div class="col-xs-7 col-sm-7 col-md-12 ep-list-content related white-container might-like-text">
													<h4><?php the_title(); ?> <?php the_field('release_schedule'); ?> <?php the_field('release_time'); ?></h4>
													<a class="view-more" href="<?php the_permalink(); ?>"> View More <i class="fa fa-chevron-circle-right"></i></a>
												</div>	
											</div>
										</div>
									</a>

								<?php
									endwhile;
									}
									wp_reset_query();
								}
							?>

						</div>

				</div>  <!--end of container--> 
	
<?php
get_footer();