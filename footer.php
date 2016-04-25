<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package potato_theme
 */

?>

		</div><!-- #content -->

	</div><!-- #page -->

	<footer>
		<!-- <div class="footer-up"></div> -->
		<div class="footer-lower">
			<div class="container">
					<h6 class="footer-left">Copyright 2016. Philstar TV. All Rights Reserved.</h6>
					<img class="footer-logo" class="img-responsive" src="<?php echo bloginfo('template_directory'); ?>/images/philstarfooter.png" />
					<h6 class="footer-right">Proudly Created by: <a class="potato-link" target="_blank" href="http://potatocodes.com">Potatocodes Inc. | Web Developers</a></h6>
			</div>
		</div>
	</footer>

	<a href="#" id="smoothup" title="Back to top"><i class="fa fa-angle-up"></i></a>

		<!-- add all script below this fold -->
		<script src="<?php echo bloginfo('template_directory'); ?>/components/jquery/jquery.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/components/jquery.bxslider/jquery.bxslider.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/js/main.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/js/unslider.js"></script>

		<script src="<?php echo bloginfo('template_directory'); ?>/js/wow.min.js"></script>

		
		<script src="http://cdn.rawgit.com/noelboss/featherlight/1.3.5/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>

		<script>
			jQuery(document).ready(function($) {
				$('.my-slider').unslider({
					autoplay: true,
					delay: 5000 
				});

				jQuery('.ajaxform').submit( function() {

				              $.ajax({
				                  url     : $(this).attr('action'),
				                  type    : $(this).attr('method'),
				                  data    : $(this).serialize(),
				                  success : function( data ) {
				                               alert('Sent! We will get back to you in a while'); 
				                               $('.ajaxform')[0].reset();    
				                            },
				                  error   : function(){
				                               alert('Oh no! It seems our message box is not working at the moment. Sorry for the inconvenience. We will work on this immediately. Please use other means to contact us.');
				                            }
				              });

				              return false;
				});
			});

			$(window).scroll(function(){
					    if ($(this).scrollTop() < 200) {
					        $('#smoothup') .fadeOut();
					    } else {
					        $('#smoothup') .fadeIn();
					    }
			});
			$('#smoothup').on('click', function(){
					    $('html, body').animate({scrollTop:0}, 'slow');
					    return false;
			});



			// WOW for add water css
			new WOW().init(); 

		</script>
		
		<script src="<?php echo bloginfo('template_directory'); ?>/js/uisearch.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/js/classie.js"></script>
		<script>
			new UISearch( document.getElementById( 'sb-search' ) );
			new UISearch( document.getElementById( 'sb-search2' ) );
		</script>

		<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery.smoothscroll.min.js"></script>

		<script>
			$('html','body').smoothscroll();
			$('content').smoothscroll();
		</script>


<?php wp_footer(); ?>

</body>
</html>
