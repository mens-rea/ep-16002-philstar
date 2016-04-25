<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package potato_theme
 */

get_header(); ?>

				<div class="container content-body">
					
					<!-- <div class="series-banner hidden-xs hidden-md" >
						<img src="http://lorempixel.com/g/1360/300/" />
					</div> -->

						<div class="row">
							<?php if ( have_posts() ) : ?>

							<h2 class="main-content-title animated fadeInUp wow">Series | <?php echo single_cat_title(); ?></h2>
							<div class="title-line animated fadeInUp wow"></div>

							</br>
								<?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();
								?>
								<?php unset($row2); $row2 = array(); ?>
								<div class="sections">
									<div class="col-xs-12 section-cont">
										<a href="<?php the_permalink(); ?>"><h3 class="series-subtitle animated fadeInUp wow"><?php the_title(); ?><?php if(get_field('release_schedule')!=null) { echo ' | '; the_field('release_schedule'); } ?><?php if(get_field('release_time')!=null) { echo ' - '; the_field('release_time'); } ?> &raquo;</h3></a>

										<?php  $pst_ctr = 1;
											if (is_array(get_field('season_episodes')) || is_object(get_field('season_episodes')))
											{
												foreach (get_field('season_episodes') as $row2) : if($row2['episode_image']!=null){ $featured_img = $row2['episode_image']; }else{ $featured_img = 'http://lorempixel.com/g/1360/900/'; } ?>
												<a href="#" class="playable" data-featherlight='<iframe src="//player.vimeo.com/video/<?php echo $row2['episode_link']; ?>?autoplay=1" width="960" height="540" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'>
													<div class="col-xs-12 col-sm-6 col-md-4 home-list animated-slow<?php echo $pst_ctr; ?> animated fadeInUp wow">
															<div class="col-xs-5 col-sm-12 col-md-12 img-limiter portrait">
																<img class="full-width" src="<?php echo $featured_img; ?>" />
																<div class="playbutton"><i class="fa fa-play-circle-o"></i></div>
															</div>
															<div class="col-xs-7 col-sm-12 col-md-12 ep-list-content white-container">
																<h4><?php echo $row2['episode_name']; ?></h4>
																<span class="hidden-xs"><?php echo $row2['episode_description']; ?></span>
															</div>	
													</div>
												</a>

										<?php endforeach; $pst_ctr ++; } ?>
										
									</div>
									<div class="col-xs-12 sections">
										<a class="btn-orange animated fadeInUp wow btn-center" href="<?php the_permalink(); ?>"> More Details</a>
									</div>
								</div>
									
								<?php
								endwhile;

								the_posts_navigation();

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif; ?>
						</div>
					
				</div> <!--end of container-->
				

<?php
get_footer();