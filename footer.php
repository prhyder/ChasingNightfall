<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<footer id="footer" class="pt-5 mt-0 pb-0 mb-0 white">
	<div class="container-fluid" style="display:none;">
		<div class="row">
			<div class="col ">
				<div class="skull-wrapper">
					<img loading="lazy" class="footer-image" alt="Call of Shadows Book Cover" height="400" src="<?php echo get_template_directory_uri(); ?>/images/Magic-Book-Skull.png">
				</div>
			</div>
		</div>
	</div>
	
	<div class="container text-container pt-2">
		<div class="row white border-bottom">
			<div class="col-md-6">
				<a href="/"><img alt="J.R. Steel Author Logo" class="pb-5 ps-2" src="<?php echo get_template_directory_uri(); ?>/images/Author-Logo.png"></a>
			</div>
			<div class="col-md-3">
				<h3 class="ps-3">LINKS</h3>
				<ul class="nav d-flex flex-column pb-3 mb-3">
					<li class="nav-item"><a href="/" class="nav-link px-2 white">Home</a></li>
					<li class="nav-item"><a href="/book" class="nav-link px-2 white">Books</a></li>
					<li class="nav-item"><a href="/about" class="nav-link px-2 white">About the Author</a></li>
					<li class="nav-item"><a href="/contact" class="nav-link px-2 white">Contact</a></li>
					<li class="nav-item"><a href="/privacy-policy" class="nav-link px-2 white">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3 class="ps-2">FOLLOW J.R. STEEL</h3>
				<div class="ps-2 pb-5">
					<a href="" rel="noreferrer noopener">
					
					<button aria-label="Facebook" type="button" class="btn btn-primary p-2 btn-circle btn-circle-sm">
						<span class="ct-icon-container">
							<svg width="20px" height="20px" viewBox="0 0 20 20" aria-hidden="true">
								<path d="M20,10.1c0-5.5-4.5-10-10-10S0,4.5,0,10.1c0,5,3.7,9.1,8.4,9.9v-7H5.9v-2.9h2.5V7.9C8.4,5.4,9.9,4,12.2,4c1.1,0,2.2,0.2,2.2,0.2v2.5h-1.3c-1.2,0-1.6,0.8-1.6,1.6v1.9h2.8L13.9,13h-2.3v7C16.3,19.2,20,15.1,20,10.1z"></path>
							</svg>
						</span>
					</button>
					</a>
					<a href="" rel="noreferrer noopener">
						<button aria-label="Twitter" type="button" class="btn btn-primary p-2 btn-circle btn-circle-sm">
							<span class="ct-icon-container">
								<svg width="20px" height="20px" viewBox="0 0 20 20" aria-hidden="true">
									<path d="M2.9 0C1.3 0 0 1.3 0 2.9v14.3C0 18.7 1.3 20 2.9 20h14.3c1.6 0 2.9-1.3 2.9-2.9V2.9C20 1.3 18.7 0 17.1 0H2.9zm13.2 3.8L11.5 9l5.5 7.2h-4.3l-3.3-4.4-3.8 4.4H3.4l5-5.7-5.3-6.7h4.4l3 4 3.5-4h2.1zM14.4 15 6.8 5H5.6l7.7 10h1.1z"></path>
								</svg>
							</span>
						</button>
					</a>
					<a href="" rel="noreferrer noopener">
						<button aria-label="LinkedIn" type="button" class="btn btn-primary p-2 btn-circle btn-circle-sm">
							<span class="ct-icon-container">
								<svg width="20px" height="20px" viewBox="0 0 20 20" aria-hidden="true">
									<path d="M18.6,0H1.4C0.6,0,0,0.6,0,1.4v17.1C0,19.4,0.6,20,1.4,20h17.1c0.8,0,1.4-0.6,1.4-1.4V1.4C20,0.6,19.4,0,18.6,0z M6,17.1h-3V7.6h3L6,17.1L6,17.1zM4.6,6.3c-1,0-1.7-0.8-1.7-1.7s0.8-1.7,1.7-1.7c0.9,0,1.7,0.8,1.7,1.7C6.3,5.5,5.5,6.3,4.6,6.3z M17.2,17.1h-3v-4.6c0-1.1,0-2.5-1.5-2.5c-1.5,0-1.8,1.2-1.8,2.5v4.7h-3V7.6h2.8v1.3h0c0.4-0.8,1.4-1.5,2.8-1.5c3,0,3.6,2,3.6,4.5V17.1z"></path>
								</svg>
							</span>
						</button>
					</a>
				</div>

			</div>
		</div>

			<p class="white pt-3">
				<span class="footer-text-item">© 2024 J.R. Steel</span>
				<span class="footer-text-item">-</span>
				<span class="footer-text-item">Website By <strong><a class="footer-text-item" target="blank" href="http://brightevolutionwebdesign.com/">Bright Evolution Web Design</a></strong></span>
			</p>
			</div>
		</div>
	</div>

</footer>

</div><!-- #page -->


<?php wp_footer(); ?>

<style>

		#hero, #int-hero {
				background-image: 
				url("<?php echo get_template_directory_uri(); ?>/images/Tunnel-City-Background.jpg");
				background-size: cover;
				object-fit: contain;
				background-position: 50% 75%;
		}
		
	</style>

<script>
	AOS.init({
		duration: 1000,
	});
</script>

<style>
	html {
			visibility: visible;
			opacity: 1;
		}
</style>
</body>
</html>
