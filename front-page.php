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

	<main id="primary" class="site-main">

	<!-- Hero -->
	<section id="hero" class="hero" >
		<div class="container pt-5">
			<div class="row">
				<div class="col-md-7 gx-1 ps-2 pt-5">
					<p class="topper pt-5 my-1">AVAILABLE IN EBOOK, PAPERBACK, AND HARDBACK</p>
					<h1 class="white">CHASING NIGHTFALL</h1>
					<p class="white topper pt-1">BOOK 1 OF THE CHASING SHADOWS SERIES</p>
					<h3 class="white subtitle pt-5 me-5 pe-5" >A seasoned investigator must race across the city to stop an elusive killer before it's too late.</h3>

					<div class="pt-5 btn-section">
						<a href="" class="btn btn-outline-primary mb-2">
							<span>Buy On Amazon
							<svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="white" focusable="false"><path d="M13.582,8.182C11.934,8.367,9.78,8.49,8.238,9.166c-1.781,0.769-3.03,2.337-3.03,4.644 c0,2.953,1.86,4.429,4.253,4.429c2.02,0,3.125-0.477,4.685-2.065c0.516,0.747,0.685,1.109,1.629,1.894 c0.212,0.114,0.483,0.103,0.672-0.066l0.006,0.006c0.567-0.505,1.599-1.401,2.18-1.888c0.231-0.188,0.19-0.496,0.009-0.754 c-0.52-0.718-1.072-1.303-1.072-2.634V8.305c0-1.876,0.133-3.599-1.249-4.891C15.23,2.369,13.422,2,12.04,2 C9.336,2,6.318,3.01,5.686,6.351C5.618,6.706,5.877,6.893,6.109,6.945l2.754,0.298C9.121,7.23,9.308,6.977,9.357,6.72 c0.236-1.151,1.2-1.706,2.284-1.706c0.584,0,1.249,0.215,1.595,0.738c0.398,0.584,0.346,1.384,0.346,2.061V8.182z M13.049,14.088 c-0.451,0.8-1.169,1.291-1.967,1.291c-1.09,0-1.728-0.83-1.728-2.061c0-2.42,2.171-2.86,4.227-2.86v0.615 C13.582,12.181,13.608,13.104,13.049,14.088z M20.683,19.339C18.329,21.076,14.917,22,11.979,22c-4.118,0-7.826-1.522-10.632-4.057 c-0.22-0.199-0.024-0.471,0.241-0.317c3.027,1.762,6.771,2.823,10.639,2.823c2.608,0,5.476-0.541,8.115-1.66 C20.739,18.62,21.072,19.051,20.683,19.339z M21.336,21.043c-0.194,0.163-0.379,0.076-0.293-0.139 c0.284-0.71,0.92-2.298,0.619-2.684c-0.301-0.386-1.99-0.183-2.749-0.092c-0.23,0.027-0.266-0.173-0.059-0.319 c1.348-0.946,3.555-0.673,3.811-0.356C22.925,17.773,22.599,19.986,21.336,21.043z"></path></svg>
							</span>
						</a>
						<a href="/books/chasing-nightfall" class="btn btn-secondary mb-2">Book Details 
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right mb-2" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
							</svg>
						</a>
					</div>
					
				</div>
				<div class="col-md-5 gx-1">
					<img class="img-fluid d-block pb-4 book-image" alt="Chasing Nightfall Book Cover" data-aos="fade-up" data-aos-once="true" loading="eager" src="<?php echo get_template_directory_uri(); ?>/images/Chasing-Nighfall-Book-Cover-3D.png">
				</div>
				<a id="subscribe" class="unset"></a>
			</div>
		</div>
	</section>

	<!-- Newsletter Template -->
	<section id="subscribe">
		<?php
			get_template_part('template-parts/newsletter', 'signup');
		?>
	</section>

	<!-- Book Details -->
	<section id="book" class="bg-white dark pb-5 px-2">
		<div class="container more-padding pb-5 white">
			<div class="row">
				<h2 class="text-center pb-4">THE CHASING SHADOWS THRILLER SERIES</h2>
				<div class="col d-flex flex-wrap justify-content-center">
				<div class="text-right float-end flex-wrap-sm">
					<div class="d-flex flex-column book-detail-section left text-center mb-3">
						<h3 class="pt-4">CHASING NIGHTFALL</h3>
						<h4 class="subtitle py-1">CHASING SHADOWS / Book 1</h4>	
						
						<img class="img-fluid" loading="lazy" alt="Chasing Nightfall Book Cover" src="<?php echo get_template_directory_uri(); ?>/images/Book-One-Chasing-Nightfall-Thumbnail.jpg">
						<p class="description px-1">The hunt for a dangerous criminal.</p>
						<a href="/books/chasing-nightfall" class="btn btn-primary">BOOK DETAILS</a>


					</div>
				</div>
				<div class="text-left">
					<div class="d-flex flex-column book-detail-section right text-center mb-3">
						<h3 class="pt-4">CHASING TOMORROW</h3>
						<h4 class="subtitle py-1">CHASING SHADOWS / Book 2</h4>	
						
						<img class="img-fluid" loading="lazy" alt="Chasing Tomorrow Book Cover" src="<?php echo get_template_directory_uri(); ?>/images/Book-Two-Chasing-Tomorrow-Thumbnail.jpg">
						<p class="description px-1">A crime network must be taken out.</p>
						<a href="/books/chasing-nightfall" class="btn btn-primary">BOOK DETAILS</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Review -->
	<section id="reviews" class="bg-dark white">
		<div class="container d-flex text-center pt-5 pb-5">
			<div class="row pt-2 pb-2">
				<div class="col reviews-col d-flex flex-column mx-auto">
					<h2>“This book takes off and never STOPS.</h2>
					<p class="pt-2"><i>Chasing Nightfall</i> kept me on the edge of my seat. Fascinating protagonist and a plot that really makes you root for him. I couldn't stop thinking about this book for days afterward.”</p>
					<p class="reviewer-name pt-2">Review of <i>CHASING NIGHTFALL,</i> M. Smith of <i>The New York Times</i></p>
				</div>
			</div>
		</div>
	</section>

	<!-- About The Author -->
	<section id="about" class="bg-white dark pt-5">
		<div class="container pt-5">
			<div class="row">
				<div class="col-md-4">
					<h2 class="pe-5">ABOUT</h2>
				</div>
				<div class="col-md-8 pt-1 pe-5">
					<p>J.R. Steel is a master of the hard-hitting thriller, captivating readers with narratives that keep them on the edge of their seats. With an eye for detail and a talent for crafting intricate plots, Steel has become renowned for his thrilling storytelling.</p>
					<p>Steel burst onto the literary scene with his debut novel, <i>Chasing Nightfall,</i> a heart-pounding tale of intrigue, betrayal, and relentless pursuit. This electrifying thriller quickly garnered critical acclaim and established Steel as a star in the genre.</p>
					<a href="/about" alt="Read More" class="btn btn-primary mt-3">READ MORE</a>
				</div>
			</div>
		</div>
		<img class="tire-tracks" loading="lazy" alt="Chasing Tomorrow Book Cover" src="<?php echo get_template_directory_uri(); ?>/images/Tire-Tracks.jpg">
	</section>

</main><!-- #main -->

<?php
get_footer();
