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
					
					<h2 class="main-content-title"><?php the_title(); ?> 
							<div class="dropdown">
							  <span> | Select Schedule <i class="fa fa-chevron-down"></i></span>
							  <div class="dropdown-content">
							    <?php wp_nav_menu( array( 'theme_location' => 'schedules', 'menu_id' => 'full-navbar', 'menu_class' => 'nav') ); ?>
							  </div>
							</div>
	                </h2>
					<div class="title-line animated fadeInUp wow"></div>
				

													<?php 
														$schedule_filter = get_field('schedule_filter'); 
										                $display_count = 6;

										                $args = array(
										                  'showposts' => $display_count,
										                  'order' => 'DESC',
										                  'post_type' => 'post'
										                  /*'category_name' => 'news'*/
										                );

										                query_posts($args);

										                $pst_ctr = 0;

										                if (have_posts()) : while (have_posts()) : the_post();
										            	
										                if(has_post_thumbnail()){ $featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); } else { $featured_img = "http://lorempixel.com/g/300/150/"; }
										                if(get_field('release_schedule')==$schedule_filter||$schedule_filter=='All'){
										            ?>


										            <a class="lnk2" href="<?php the_permalink(); ?>">
														<div class="col-xs-12 col-sm-6 col-md-4 home-list animated-slow<?php echo $pst_ctr; ?> animated fadeInUp wow">
																<div class="col-xs-5 col-sm-12 col-md-12 img-limiter portrait">
																	<img class="full-width" src="<?php echo $featured_img; ?>" />
																</div>
																<div class="col-xs-7 col-sm-12 col-md-12 ep-list-content white-container">
																	<h4><?php the_title(); ?><?php if(get_field('release_schedule')!=null){ echo ' | '; the_field('release_schedule'); } ?><?php if(get_field('release_time')!=null) { echo ' - '; the_field('release_time'); } ?></h4>
																	<span class="hidden-xs"><?php if(get_field('series_description')){ $summary1 = get_field('series_description');echo substr($summary1, 0, 200)." [...]"; } ?></span>
																</div>	
														</div>
													</a>

										            <?php } $pst_ctr++; endwhile; endif; wp_reset_query(); ?>

					

				</div> <!--end of container-->
				
	
</article><!-- #post-## -->