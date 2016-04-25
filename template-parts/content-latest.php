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
					<div class="title-line animated fadeInUp wow"></div>
				

								<?php
								/* Start the Loop */
								$display_count = 2;

								$args = array(
				                  'showposts' => $display_count,
				                  'order' => 'DESC',
				                  'post_type' => 'post'
				                  /*'category_name' => 'news'*/
				                );



				                query_posts($args);
				                if ( have_posts() ) :
				                
								while ( have_posts() ) : the_post();
								?>
								<?php unset($row2); $row2 = array();  $pst_ctr = 1;?>
								<div class="sections">
									<div class="col-xs-12 section-cont">
										<a class="series-subtitle-link" href="<?php the_permalink(); ?>"><h3 class="series-subtitle animated fadeInUp wow"><?php the_title(); ?><?php if(get_field('release_schedule')!=null) { echo ' | '; the_field('release_schedule'); } ?><?php if(get_field('release_time')!=null) { echo ' - '; the_field('release_time'); } ?> &raquo;</h3></a>

										<?php 
											if (is_array(get_field('season_episodes')) || is_object(get_field('season_episodes')))
											{
												$reversal = get_field('season_episodes');
												$reversed = array_reverse($reversal);
												$pst_ctr = 0;
												foreach ($reversed as $row2) : if($row2['episode_image']!=null){ $featured_img = $row2['episode_image']; }else{ $featured_img = 'http://lorempixel.com/g/1360/900/'; } ?>
												<?php if($pst_ctr==0){ ?>

												<a href="#" class="playable" data-featherlight='<iframe src="//player.vimeo.com/video/<?php echo $row2['episode_link']; ?>?autoplay=1" width="960" height="540" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'>
													<div class="col-xs-12 col-sm-12 col-md-12 main-home-list home-list animated-slow<?php echo $pst_ctr; ?> animated fadeInUp wow">
															<div class="col-xs-5 col-sm-12 col-md-12 img-limiter-latest portrait">
																<img class="full-width" src="<?php echo $featured_img; ?>" />
																<div class="playbutton"><i class="fa fa-play-circle-o"></i></div>
															</div>
															<div class="col-xs-7 col-sm-12 col-md-12 ep-list-content white-container">
																<h4><?php echo $row2['episode_name']; ?></h4>
																<?php /*if (strlen($row2['episode_description']) > 100)
   																$strshort = substr($row2['episode_description'], 0, 7);*/ ?>
																<span class="hidden-xs"><?php echo $row2['episode_description']; ?></span>
															</div>
													</div>
												</a>

												<?php } elseif($pst_ctr>0&&$pst_ctr<4){ ?>

												<a href="#" class="playable" data-featherlight='<iframe src="//player.vimeo.com/video/<?php echo $row2['episode_link']; ?>?autoplay=1" width="960" height="540" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'>
													<div class="col-xs-12 col-sm-6 col-md-4 home-list animated-slow<?php echo $pst_ctr; ?> animated fadeInUp wow">
															<div class="col-xs-5 col-sm-12 col-md-12 img-limiter portrait">
																<img class="full-width" src="<?php echo $featured_img; ?>" />
																<div class="playbutton"><i class="fa fa-play-circle-o"></i></div>
															</div>
															<div class="col-xs-7 col-sm-12 col-md-12 ep-list-content white-container">
																<h4><?php echo $row2['episode_name']; ?></h4>
																<?php /*if (strlen($row2['episode_description']) > 100)
   																$strshort = substr($row2['episode_description'], 0, 7);*/ ?>
																<span class="hidden-xs"><?php echo $row2['episode_description']; ?></span>
															</div>
													</div>
												</a>

												<?php } $pst_ctr++; ?>

										<?php endforeach; } ?>
										
									</div>
									<div class="col-xs-12">
										<a class="btn-orange animated fadeInUp wow btn-center" href="<?php echo get_category_link(get_field('main_series')); ?>"> View All Episodes</a>
									</div>
								</div>
									
								<?php
								endwhile; endif; wp_reset_query(); ?>

					

				</div> <!--end of container-->
				
	
</article><!-- #post-## -->