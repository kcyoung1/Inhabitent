<?php
/**
 * The template for displaying archive product pages.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>
<div class="page-content">


	<div id="primary" class="product-area">
		<main id="main" class="site-main" role="main">



		<?php if ( have_posts() ) : ?>

			<header class="product-header">
				<h1>Shop Stuff</h1>
				<ul class="product-links">
					<?php $terms = get_terms(
						array(
						'taxonomy' => 'product_type',
						'hide_empty' => false,) );

						foreach ( $terms as $product_type) : ?>
							<li>
								<a href="<?php home_url(); ?>/product-type/<?php echo $product_type->slug; ?>"><?php echo $product_type->name; ?></a>
							</li>
					<?php Endforeach; ?>
				</ul>


			</header><!-- .page-header -->
			<div class="product-grid">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							get_template_part( 'template-parts/content', 'product' );
						?>

					<?php endwhile; ?>


				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</div><!-- .product-grid-item -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
