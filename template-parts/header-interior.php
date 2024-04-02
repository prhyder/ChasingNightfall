<?php
/**
 * Template part for displaying the page header for interior pages (About Page, Contact Page, etc.)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<?php
	$title = "";
	if ( $args && $args['title'] ) {
		$title = $args['title'];
	}
	else {
		$title = get_the_title();
	}
?>

<!-- Hero -->
<section id="int-hero" class="hero" >
		<div class="container pt-5">
			<div class="row pt-5 pb-2">
				<div class="col-12">
					<h1 class="entry-title"><?php echo($title) ?></h1>
				</div>
			</div>
		</div>
	</section>
	