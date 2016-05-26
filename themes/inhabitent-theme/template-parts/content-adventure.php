<?php
/**
 * Template part for displaying posts.
 *
 * @package inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="adventure-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'full' ); ?>
		<?php endif; ?>

	<div class="container">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<span><?php inhabitent_posted_by(); ?></span>
	</div>

	</header><!-- .entry-header -->

	<div class="entry-content container">
		<?php the_content(); ?>
		<footer class="entry-footer">
			<?php inhabitent_entry_footer(); ?>
			<div class="social-buttons">
				<button type="button" name="button" class="moretag"><i class="fa fa-facebook"></i> Like</button>
				<button type="button" name="button" class="moretag"><i class="fa fa-twitter"></i> tweet</button>
				<button type="button" name="button" class="moretag"><i class="fa fa-pinterest"></i> Pin</button>
			</div>
		</footer><!-- .entry-footer -->
	</div><!-- .entry-content -->


</article><!-- #post-## -->
