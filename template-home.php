<?php /* Template Name: Homepage */ 

get_header(); 
?>

				<div class="big-banner hidden-xs">
					<div class="my-slider">
						<ul>

							<?php 
				                $display_count = 4;

				                $args = array(
				                  'showposts' => $display_count,
				                  'order' => 'DESC',
				                  'category_name' => 'Featured',
				                  'post_type' => 'post'
				                  /*'category_name' => 'news'*/
				                );

				                query_posts($args);
				                if (have_posts()) : while (have_posts()) : the_post();
				            
				                if(get_field('featured_image')!=null){ $featured_img = get_field('featured_image'); } else { $featured_img = 'http://lorempixel.com/g/1360/600/'; }

				            ?>

				            <li class="animated-slow1 animated fadeIn wow">
				            	<a href="<?php the_permalink(); ?>">
								<img class="img-responsive" src="<?php echo $featured_img; ?>" />
									<div class="row slider-elements">
										<div class="col-sm-7 col-md-8 col-lg-8 big-slider-text animated fadeInUp wow">
											<h1 class="big-slider-title animated-slow1 animated fadeInUp"><?php the_field('featured_title'); ?></h1>
											<div class="title-line animated fadeInUp wow sl-line"></div>
											<h4><?php the_field('featured_date'); ?></h4>
										</div>
										<div class="col-sm-3 col-md-2 col-lg-2 big-slider-buttons animated-slow2 animated fadeInUp wow">
											<!-- https://www.youtube.com/v/XsMG9zt9aD4&amp;autoplay=1 -->
											<!-- <a href="#" <?php if(get_field('featured_video') == null){ ?> class="invi" <?php } ?> data-featherlight='<iframe src="//player.vimeo.com/video/<?php the_field('featured_video'); ?>?autoplay=1" width="960" height="540" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'>Watch Now</a>
											<a class="" href="<?php the_permalink(); ?>">About Series</a> -->
										</div>
									</div>
								</a>
							</li>


				            <?php  endwhile; endif; wp_reset_query(); ?>
							
							<!--<li><img class="img-responsive" src="images/slider.png" /></li>
							<li><img class="img-responsive" src="images/slider.png" /></li>-->
						</ul>
					</div>
					
				</div>

				<div class="container content-body">
					
					<h2 class="main-content-title animated fadeInUp wow">What's New on PhilSTAR TV</h2>
					<div class="title-line animated fadeInUp wow animated fadeInUp"></div>
					
					<div class="content-padding ">

						
						<div class="row sections home-section">

							<?php 
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
				            	
				                if(get_field('featured_image')!=null){ $featured_img = get_field('featured_image'); } else { $featured_img = "http://lorempixel.com/g/1360/600/"; }

				                if($pst_ctr==0){
				            ?>

				            <div class="col-xs-12 hidden-xs home-featured home-list animated fadeInUp wow">
								<div class="featured-vid col-md-8">
									<a href="#" <?php if(get_field('featured_video') == null){ ?> class="invi" <?php } ?> data-featherlight='<iframe src="//player.vimeo.com/video/<?php the_field('featured_video'); ?>?autoplay=1" width="960" height="540" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'>
										<img class="logo-full" class="img-responsive" src="<?php echo $featured_img; ?>" />
										<div class="playbutton"><i class="fa fa-play-circle-o"></i></div>
									</a>
								</div>
								<div class="featured-text white-container clearfix col-md-4">
									<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
									<span class="hidden-sm hidden-xs"><?php if(get_field('featured_description')){ $summary1 = get_field('featured_description');echo substr($summary1, 0, 200)." [...]"; } ?></span>
									<a class="view-more right <?php if(get_field('featured_video') == null){ ?> invi <?php } ?>" href="<?php the_permalink(); ?>"> View More <i class="fa fa-chevron-circle-right"></i></a>
								</div>
							</div>

							<?php } else { ?>

				            <a href="#" <?php if(get_field('featured_video') == null){ ?> class="invi" <?php } ?> data-featherlight='<iframe src="//player.vimeo.com/video/<?php the_field('featured_video'); ?>?autoplay=1" width="960" height="540" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'>
								<div class="col-xs-12 col-sm-6 col-md-4 home-list animated-slow<?php echo $pst_ctr; ?> animated fadeInUp wow">
										<div class="col-xs-5 col-sm-12 img-limiter2 col-md-12 portrait">
											<img class="full-width" src="<?php echo $featured_img; ?>" />
											<div class="playbutton"><i class="fa fa-play-circle-o"></i></div>
										</div>
										<div class="col-xs-7 col-sm-12 col-md-12 ep-list-content white-container">
											<h4><?php the_title(); ?> <?php the_field('feature_schedule'); ?> <?php the_field('release_time'); ?></h4>
											<span class="hidden-sm hidden-xs"><?php if(get_field('featured_description')){ $summary2 = get_field('featured_description');echo substr($summary2, 0, 200)." [...]"; } ?></span>
										</div>	
								</div>
							</a>

				            <?php } $pst_ctr++; endwhile; endif; wp_reset_query(); ?>

						</div> <!-- second section: gallery type w/ description -->

						<a class="btn-orange animated fadeInUp wow btn-center animated-slow<?php echo $pst_ctr++; ?> animated fadeInUp" href="latest"> More Updates</a>
					
					</div>
				</div> <!--end of container-->

<?php
get_footer();