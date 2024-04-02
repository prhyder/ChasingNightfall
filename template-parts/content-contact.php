<?php
/**
 * Template part for displaying page content in the Contact page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="entry-content container interior-page dark pt-5 px-5">

	<!-- Breadcrumbs -->
	<div class="row">
		<div class="col">
			<a href="/">Home</a> / 
			<span>Contact</span>
		</div>
	</div>

	<!-- Contact with CF7 -->
	<section id="contact" class="bg-transparent dark">
		<div class="container align-items-center">
			<div class="row align-items-center">
				<div class="image-col col-lg-5 col-md-12">
					
					<img class="the-image" loading="lazy" alt="Palace Background" src="<?php echo get_template_directory_uri(); ?>/images/Tunnel-City-Background.jpg">
				</div>
				
				<div class="col-lg-7 col-md-12 pt-5 pb-5 px-5 ">
					<h2 class="subtitle pt-5">Contact</h2>
					<p class="pt-1 pb-4">Please fill out the form below to contact JR Steel.</p>
						<?php echo do_shortcode('[contact-form-7 id="8a73305" title="Contact form 1"]'); ?>
				</div>
				
			</div>
		</div>
	</section>

	<!-- Uncomment below lines to use WP's Editor content -->
	<?php
				//the_content();

			// wp_link_pages(
			// 	array(
			// 		'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
			// 		'after'  => '</div>',
			// 	)
			// );
			?>

	
</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->