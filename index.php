<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package potato_theme
 */

get_header(); ?>

				<div class="big-banner hidden-xs">
					<div class="my-slider">
						<ul>
							<li>
								<img class="img-responsive" src="http://lorempixel.com/g/1360/600/" />
									<div class="row slider-elements">
										<div class="col-sm-7 col-md-8 col-lg-8 big-slider-text">
											<h1 class="big-slider-title">Title of Series/ Episode here</h1>
											<div class="title-line sl-line"></div>
											<h4>January 8, 2016</h4>
										</div>
										<div class="col-sm-3 col-md-2 col-lg-2 big-slider-buttons">
											<a class="" href="#">Watch Now</a>
											<a class="" href="#">About Series</a>
										</div>
									</div>
								
							</li>
							<li>
								<img class="img-responsive" src="http://lorempixel.com/g/1360/600/" />
									<div class="row slider-elements">
										<div class="col-sm-7 col-md-8 big-slider-text">
											<h1 class="big-slider-title">Title of Series/ Episode here</h1>
											<div class="title-line sl-line"></div>
											<h4>January 8, 2016</h4>
										</div>
										<div class="col-sm-3 col-md-2 big-slider-buttons">
											<a class="" href="#">Watch Now</a>
											<a class="" href="#">About Series</a>
										</div>
									</div>
								
							</li>
							<!--<li><img class="img-responsive" src="images/slider.png" /></li>
							<li><img class="img-responsive" src="images/slider.png" /></li>-->
						</ul>
					</div>
					
				</div>

				<div class="container content-body">
					
					<h2 class="main-content-title">What's New on PhilSTAR TV</h2>
					<div class="title-line"></div>
					
					<div class="content-padding ">
						<div class="row sections hidden-xs  home-featured">
							<div class="featured-vid col-md-8">
								<img class="logo-full" class="img-responsive" src="http://lorempixel.com/g/1360/600/" />
							</div>
							<div class="featured-text white-container clearfix col-md-4">
								<h3>Wheels on TV</h3>
								<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
								<a class="view-more right" href="#"> View More <i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>

						
						<div class="row sections home-section">

							<?php 
				                $show_ctr = 0;
				                $display_count = 4;

				                $args = array(
				                  'showposts' => $display_count,
				                  'paged' => $paged,
				                  'order' => 'DESC'
				                  /*'category_name' => 'news'*/
				                );

				                query_posts($args);
				                if (have_posts()) : while (have_posts()) : the_post();
				            
				                if(has_post_thumbnail()){ $featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); } else { $featured_img = get_bloginfo('template_directory')."/images/Marigold_Living.JPG"; }

				            ?>

				            <a class="lnk2" href="<?php the_permalink(); ?>">
								<div class="col-xs-12 col-sm-6 col-md-4 home-list">
									<div class='ep-list clearfix'>
										<div class="col-xs-4 col-sm-12 col-md-12 img-limiter portrait">
											<img class="full-width" src="http://lorempixel.com/g/1360/900/" />
										</div>
										<div class="col-xs-8 col-sm-12 col-md-12 ep-list-content white-container">
											<h4><?php the_title(); ?> | Mondays</h4>
											<h4><?php /*$time = get_field('event_date'); echo date('M j,Y', strtotime($time));*/  ?></h4>
										</div>	
									</div>
								</div>
							</a>

				            <?php  endwhile; endif;?>
							
						</div> <!-- second section: gallery type w/ description -->
						
						<a class="btn-orange btn-center" href> More Updates</a>
					</div>
				</div> <!--end of container-->

<?php
get_footer();