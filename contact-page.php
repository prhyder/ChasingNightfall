<?php
/**
 * The template for displaying the Contact page.
 * 
 * Template Name: Contact Page
 *
 * @package _s
 */

get_header();
?>

<main id="primary" class="site-main interior-page-content">
	<?php
		get_template_part('template-parts/header', 'interior');
	?>
	<div class="container">
		<div class="row">
			<?php
				get_template_part( 'template-parts/content', 'contact' );
			?>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();
