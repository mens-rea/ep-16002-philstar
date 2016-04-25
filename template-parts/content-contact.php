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
				
					<div class="contact-container">

						<div class=" hidden-xs  row sections">
							<?php the_content(); ?>
						</div> <!-- first section: description type -->

						<div class="row sections contact-icon-container">

							<?php 						         
							    $feedback = get_field('contact_information');
							    $ctr = 0;
							    foreach($feedback as $row){
							?>

							   	<a class="lnk2" href="<?php echo $row['contact_link']; ?>">
									<div class="col-xs-12 col-sm-6 col-md-3 contact-list">
										<div class="col-xs-12 col-sm-12 col-md-12"><div class="contact-icon"><i class="fa <?php echo $row['contact_icon']; ?>"></i></div></div>
										<div class="col-xs-12 col-sm-12 col-md-12 contact-details">
											<h4><?php echo $row['contact_name'] ?></h4>
											<p><?php echo $row['contact_details'] ?></p>
										</div>
									</div>
								</a>


							<?php $ctr++; } ?>

						</div> <!-- second section: gallery type w/ description -->

					</div>

				</div> <!--end of container-->
				
				<div class="white-container row sections">
						<div class="container ">
							<div class="contact-container">
								<form method="post" action="<?php echo bloginfo('template_directory'); ?>/email.php" class="contact-form-wrapper ajaxform">
					              		<input class="" type="text" name="Full Name" placeholder="Name"/>
										<input class="" type="text" name="Email" placeholder="Email"/>
										<textarea class="" placeholder="Message"></textarea>
										<input type="submit" name="submit" class="contact-button right btn-orange animated fadeInUp wow" value="SEND MESSAGE"/>
					            </form>				
							</div>
						</div>					
				</div>
	
</article><!-- #post-## -->