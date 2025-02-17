<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>

	<main id="primary" class="site-main interior-page-content">
		<?php
			get_template_part('template-parts/header', 'interior');
		?>

		<div class="container ">
			<div class="row">
			<?php


			get_template_part( 'template-parts/content', 'page' );

		?>
			</div>
		</div>

		

	</main><!-- #main -->

<?php
get_footer();
