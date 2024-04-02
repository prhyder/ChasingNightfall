<?php
/**
 * The template for displaying the individual Book.
 * 
 * Template Name: Book Detail Page
 *
 * @package _s
 */

get_header();
?>

<main id="primary" class="site-main interior-page-content">
	<?php
			$args = 'Books';
			get_template_part('template-parts/header', 'interior',
				array(
					'title' => $args,
				)
			);
		?>
		
	<div class="container">
		<div class="row">
			<?php
				get_template_part( 'template-parts/content', 'book' );
			?>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();
