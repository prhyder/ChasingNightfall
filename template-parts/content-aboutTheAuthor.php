<?php
/**
 * Template part for displaying page content in aboutTheAuthor
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>
<?php
	$title = get_field('title');
	$author_bio = get_field('author_bio');
	$author_picture = get_field('author_picture');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- Featured Image -->
<?php //_s_post_thumbnail(); ?>


<div class="entry-content container interior-page dark pt-5 px-5">

	<!-- Breadcrumbs -->
	<div class="row">
		<div class="col">
			<a href="/">Home</a> / 
			<span>About The Author</span>
		</div>
	</div>

	<div class="row pt-5">
		<div class="col-lg-7 col-md-12 gx-3">
			<h2 class=""><?php echo($title) ?></h2>
			<?php echo wp_kses_post ( $author_bio ); ?>
			<a href="/contact" class="btn btn-primary mb-5 mt-2">CONTACT</a>

		</div>

		<div class="col-lg-5 col-md-12 img-column text-center p-3">
			<?php 
				$image = get_field('author_picture');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
		</div>
	</div>

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