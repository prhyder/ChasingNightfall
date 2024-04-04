<?php
/**
 * The template part for newsletter signup
 *
 */
?>

<div id="newsletter-component" class="container mx-auto pt-5" 
	style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/Subscribe-Background-Tunnel.jpg")>
	<div class="row pt-3 pb-3">
					<div class="col-12 text-center pt-2 pb-2">
						<h2 class="pt-1 pb-2 subtitle">Sign up for J.R. Steel's email list to be notified of new releases and free giveaways.</h2>
						<?php echo(do_shortcode('[mc4wp_form id=7]')) ?>
					</div>
				</div>
</div>

