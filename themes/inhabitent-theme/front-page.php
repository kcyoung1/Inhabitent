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

			<h2>Shop Stuff</h2>

				<section class="shop-stuff">
					<?php
					$terms = get_terms(
						array(
						'taxonomy' => 'product_type',
						'hide_empty' => false,) );

						foreach ( $terms as $product_type ) : ?>

						<div class="product-block">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icons/<?php echo $product_type->slug; ?>.svg" alt="product-type" />

							<p class="description">
								<?php echo $product_type->description; ?>
							</p>
							<a href="<?php echo get_term_link($product_type, 'product-type'); ?>" class="button"><?php echo $product_type->name; ?> Stuff</a>

					</div>
				<?php endforeach;
							wp_reset_postdata();?>

				</section>


			<!-- Inhabitent Journal -->

			<h2>Inhabitent Journal</h2>
			<ul class="journal-post container">
			<?php
				$args = array(
					'posts_per_page' => 3,
					'order'=> 'DESC',
					'orderby' => 'date' );
				$postslist = get_posts( $args );
				foreach ( $postslist as $post ) :
				setup_postdata( $post ) ; ?>

						<li >
							<div class="journal-picture">
								<?php the_post_thumbnail( 'large' ); ?>
							</div>

							<div class="journal-info">
								<span>
									<?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
								</span>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<a class="moretag" href="<?php the_permalink(); ?>">Read Entry</a>
							</div>

						</li>
				<?php endforeach;
							wp_reset_postdata(); ?>

				</ul>



			<!-- Latest Adventures -->

		<h2>Latest Adventures</h2>
		<section class="adventures container">

			<ul class="clearfix">

				<?php
					$query = new WP_Query( array(
						'post_type' => 'adventure',
					 	'order' => 'ASC',
						'orderby' => 'date',
						'posts_per_page' => 4)
					);

					while ( $query->have_posts() ) : $query->the_post(); ?>

					<li>
						<div class="story-wrap">
							<div class="adventure-image">
								<?php the_post_thumbnail( 'full' ); ?>
							</div>
							<div class="story-info">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<a class="readtag" href="<?php the_permalink(); ?>">Read More</a>
							</div>
						</div>
					</li>

				<?php endwhile;
									wp_reset_postdata(); ?>
			</ul>
			<p class="clearfix">
				<a href="/adventures" class="button">More Adventures</a>
			</p>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
