<?php
/**
 * The template for displaying the front page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area-front">
		<main id="main" class="site-main" role="main">

			<!-- Hero Image -->

				<section class="home-hero">
					<img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-full.svg" class="logo" alt="Inhabitent Logo" />
				</section>

			<!-- Shop Stuff -->

				<!-- Loop goes here -->

			<!-- Inhabitent Journal -->

				<!-- Loop goes here -->

			<!-- Latest Adventures -->

				<!-- Stretch goal - Mandi used floats -->
				<section class="adventures container">
					<h2>Latest Adventures</h2>
					<ul>
						<li>
							<div class="story-wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/images/adventure/canoe-girl.jpg" alt="Canoe Girl" />
								<div class="story-info">
									<h3>Getting Back to Nature in a Canoe</h3>
									<a href="#" class="moretag">Read More</a>
								</div>
							</div>
						</li>
					</ul>
					<p>
						<a href="#">More Adventures</a>
					</p>
				</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
