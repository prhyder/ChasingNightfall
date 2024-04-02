<?php
/**
 * Template part for displaying page content for the Books page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>
<?php
	$book_title = get_field('book_title');
	$series_description = get_field('series_description');
	$synopsis = get_field('synopsis');
	$book_cover = get_field('book_cover');
	$summary = get_field('summary');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- Featured Image -->
<?php //_s_post_thumbnail(); ?>


<div class="entry-content container interior-page book-details-page dark pt-5 ">
	<div class="container">

		<!-- Breadcrumbs -->
		<div class="row">
			<div class="col">
				<a href="/">Home</a> / 
				<a href="/books">Books</a> / 
				<span><?php echo($book_title) ?></span>
			</div>
		</div>

		<div class="row">
			<div class="col-md-7">
				<p class="topper pt-5 my-1"><?php echo($series_description) ?></p>
				<h2><?php echo($book_title) ?></h2>
				<p class="pb-2"><strong><?php echo($synopsis) ?></strong></p>
				<?php echo wp_kses_post ( $summary ); ?>
				<a href="" class="btn btn-primary mb-5 mt-2">GET YOUR COPY</a>
			</div>
			<div class="col-md-5">
				<img class="img-fluid d-block pb-4 text-end" alt="Chasing Nightfall Book Cover" 
				data-aos="fade-left" data-aos-once="true" loading="eager" src="<?php echo($book_cover);?>"


				<?php 
					$image = get_field('book_cover');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>
					

			</div>
		</div>
	</div>

	<!-- Uncomment below lines to use WP's Editor content -->
	<?php
			// 	the_content();

			// wp_link_pages(
			// 	array(
			// 		'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
			// 		'after'  => '</div>',
			// 	)
			// );
			?>
</div><!-- .entry-content -->

<?php if ( get_edit_post_link() ) : ?>
	<footer class="entry-footer interior-page dark">
		<?php
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', '_s' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
		?>
	</footer><!-- .entry-footer -->
<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->