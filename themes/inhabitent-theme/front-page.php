<?php
/**
 * The template for displaying the front page.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area-front">
		<main id="main" class="site-main" role="main">

			<!-- Hero Image -->

				<section class="home-hero">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" class="logo" alt="Inhabitent Logo" />
				</section>

			<!-- Shop Stuff -->

				<!-- Loop goes here -->

			<!-- Inhabitent Journal -->

				<!-- Loop goes here -->

			<!-- Latest Adventures -->

				<!-- Stretch goal - Mandi used floats -->
				<section class="adventures container">
					<h2>Latest Adventures</h2>
					<ul class="clearfix">
						<li>
							<div class="story-wrap canoe">
								<div class="story-info">
									<h3><a href="#">Getting Back to Nature in a Canoe</a></h3>
									<a href="#" class="readtag">Read More</a>
								</div>
							</div>
						</li>
						<li>
							<div class="story-wrap bonfire">
								<div class="story-info">
									<h3><a href="#">A Night with Friends at the Beach</a></h3>
									<a href="#" class="readtag">Read More</a>
								</div>
							</div>
						</li>
						<li>
							<div class="story-wrap hikers">
								<div class="story-info">
									<h3><a href="#">Taking in the View at Big Mountain</a></h3>
									<a href="#" class="readtag">Read More</a>
								</div>
							</div>
						</li>
						<li>
							<div class="story-wrap night-sky">
								<div class="story-info">
									<h3><a href="#">Star-Gazing at the Night Sky</a></h3>
									<a href="#" class="readtag">Read More</a>
								</div>
							</div>
						</li>
					</ul>
					<p class="clearfix">
						<a href="#" class="more-adventures">More Adventures</a>
					</p>
				</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
