<?php
/**
 * The template for displaying all single adventure posts.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>
<div class="single-adventure">

	<div id="primary" class="adventure-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'adventure' ); ?>


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
