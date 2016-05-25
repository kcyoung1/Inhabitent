<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
		<div class="product-grid-item">

				<div class="product-image">
						<?php the_post_thumbnail( 'large' ); ?>
				</div><!-- .product-image -->

			<div class="product-info">
				<?php the_title( sprintf( '<h2 class="product-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

				<div class="product-price">
					<?php echo CFS()->get( 'price' ); ?>
				</div><!-- .product-price -->
			</div> <!-- .product-info -->

		</div><!-- .product-grid-item -->
