<?php /* Template Name: Features */ 

get_header(); 
?>

				<div class="container content-body">

					<h2 class="main-content-title animated fadeInUp wow"><?php the_title(); ?></h2>
					<div class="title-line animated fadeInUp wow"></div>



											<?php
												$display_count = 3;

								                $args = array(
								                  'showposts' => $display_count,
								                  'order' => 'DESC',
								                  'post_type' => 'articles'
								                  /*'category_name' => 'news'*/
								                );

								                query_posts($args);
											if ( have_posts() ) : ?>

											<?php
											/* Start the Loop */
											$pst_ctr = 0;
											while ( have_posts() ) : the_post();

											if(has_post_thumbnail()){ $featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); } else { $featured_img = "http://lorempixel.com/g/600/300/"; }
											?>
						
					
												<?php if($pst_ctr==0){ ?>

												<div class="sections ind-mobile-pad animated fadeIn wow">

														<div class="featured-article">
															<h1 class="featured-title"><?php the_title(); ?></h1>
															<div class="latest-icons hidden-xs hidden-sm">
																<a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><i class="fa fa-facebook"></i></a>
																<a target="_blank" href="https://twitter.com/intent/tweet?original_referer=<?php the_permalink();?>"><i class="fa fa-twitter"></i></a>
															</div>


															<?php the_content(); ?>

														</div>
												</div>

												<div class="sections ind-mobile-pad might-like-container">

													<h2 class="main-content-title animated fadeInUp wow">Related Articles</h2>
													<div class="title-line animated fadeInUp wow"></div>

												<?php } elseif($pst_ctr>0&&$pst_ctr<4){ ?>

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

												<?php } $pst_ctr++; ?>

										<?php
										endwhile; wp_reset_query(); 

											the_posts_navigation();

										else :

											get_template_part( 'template-parts/content', 'none' );

										endif; ?>

										</div>

				</div>  <!--end of container--> 

<?php
get_footer();