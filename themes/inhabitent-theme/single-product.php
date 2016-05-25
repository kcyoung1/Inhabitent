<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="single-product-content">

	<div id="primary" class="product-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php echo CFS()->get( 'price' ); ?>
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php red_starter_entry_footer(); ?>
					<div class="social-buttons">
						<button type="button" name="button" class="moretag"><i class="fa fa-facebook"></i> Like</button>
						<button type="button" name="button" class="moretag"><i class="fa fa-twitter"></i> tweet</button>
						<button type="button" name="button" class="moretag"><i class="fa fa-pinterest"></i> Pin</button>
					</div>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>