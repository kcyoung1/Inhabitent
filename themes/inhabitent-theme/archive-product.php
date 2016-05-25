<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="page-content">


	<div id="primary" class="product-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="product-header">
				<h1>Shop Stuff</h1>
				<ul class="product-list">
					<li class="uppercase">
						<a href="#">Do</a></li>
					<li class="uppercase"><a href="#">Eat</a></li>
					<li class="uppercase"><a href="#">Sleep</a></li>
					<li class="uppercase"><a href="#">Wear</a></li>
				</ul>
			</header><!-- .page-header -->
			<div class="product-grid">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							get_template_part( 'template-parts/content', 'product' );
						?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</div><!-- .product-grid-item -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
