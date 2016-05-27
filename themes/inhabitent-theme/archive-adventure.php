<?php
/**
 * The template for displaying archive products pages.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>
<div class="page-content">


	<div id="primary" class="product-area">
		<main id="main" class="site-main" role="main">



		<?php if ( have_posts() ) : ?>

			<header class="product-header">
				<h1>Latest Adventures</h1>


			</header><!-- .page-header -->
			<div class="adventure-grid">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<div class="adventure-grid-item">

								<div class="adventure-image">
										<?php the_post_thumbnail( 'full' ); ?>
								</div>

							<div class="adventure-info">
								<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title( sprintf( '<h2 class="product-title"></h2>' )); ?></a></h3>
								<a href="<?php the_permalink(); ?>" class="readtag">Read More</a>
							</div> <!-- .adventure-info -->

						</div><!-- .adventure-grid-item -->
					<?php endwhile; ?>


				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</div><!-- .product-grid-item -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
