<?php
/**
 * Template Name: About page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="page-content">
	<div id="primary" class="about-area">
		<main id="main" class="site-main" role="main">

	<section class="about-header">
		<h1>About</h1>
		<img src="<?php echo CFS()->get( 'featured_about_image' ); ?>" alt="" />
	</section>

	<h2 class="about-title">Our Story</h2>
		<?php echo CFS()->get( 'our_story' ); ?>
	<h2 class="about-title">Our Team</h2>
		<?php echo CFS()->get( 'our_team' ); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
