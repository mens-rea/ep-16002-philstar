<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package potato_theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.png">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link href="http://cdn.rawgit.com/noelboss/featherlight/1.3.5/release/featherlight.min.css" type="text/css" rel="stylesheet" />
<link href="<?php echo bloginfo('template_directory'); ?>/css/animate.css" type="text/css" rel="stylesheet" />

<meta name="description" content="Philstar TV is an online channel for featured series by the Philippine Star established in 2016 to deliver heart-warming stories of love and adventure." />
<meta name="keywords" content="tv, philstar online tv, philstar, matteo guidicelli, single single, philippine star">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'potato_theme' ); ?></a>

				<div class="header">
						<div class="container">

							<div class="col-xs-5 col-sm-12 col-md-3">
								<div class="banner">
									<a href="<?php echo site_url(); ?>"><img class="main-logo" class="img-responsive" src="<?php echo bloginfo('template_directory'); ?>/images/philstarlogo.png" /><!-- <span>CELEBRATING</br>LIFESTYLE</span> --></a>
								</div>
							</div>
							
							<div class="col-xs-7 col-sm-12 col-md-9 hidden-md hidden-lg hidden-sm">								
								<div class="navbar-header">	
									
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<!--<div class="search hidden-sm hidden-md hidden-lg"><a href="#"><i class="fa fa-search"></i></a></div>-->
									<div class="search-header-container hidden-sm hidden-md hidden-lg">
												<div class="search-header-container">
													<div id="sb-search" class="sb-search">
														<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
															<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="s" id="s"/>
													        <input class="sb-search-submit" type="submit" value="" value="Search" id="searchsubmit" />
															<span class="sb-icon-search"><i class="fa fa-search"></i></span>
														</form>
													</div>
												</div>
									</div>
					            </div>							
			
				        	</div>
							<div class="collapse search-collapse"> <!--search input-->
								<input type="text" placeholder="Search here"/>
							</div>

							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'full-navbar', 'menu_class' => 'menu-navigation navbar-nav nav hidden-xs') ); ?>
							
							<?php dynamic_sidebar('right-header-widgets'); ?>
							<div class="search-header-container hidden-xs">
										<div class="search-header-container">
											<div id="sb-search2" class="sb-search sb-search-desktop">
												<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
													<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="s" id="s"/>
											        <input class="sb-search-submit" type="submit" value="" value="Search" id="searchsubmit" />
													<span class="sb-icon-search"><i class="fa fa-search"></i></span>
												</form>
											</div>
										</div>
							</div>

						</div> <!-- contain header -->

				        <div class="collapse navbar-collapse"> <!--main-menu-->
				            	<!--desktop and tablet menu -->
								
								
								<!--mobile menu-->
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'full-navbar', 'menu_class' => 'menu-navigation navbar-nav nav hidden-sm hidden-md hidden-lg') ); ?>

				        </div>
				        
				</div> <!-- end of header -->

	<div id="content" class="site-content">
