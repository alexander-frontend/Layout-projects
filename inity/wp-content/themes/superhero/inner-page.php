<?php
/**
 * Template Name: Inner content page
 *
 * The template for displaying content pages.
 *
 * @package Superhero
 * @since Superhero 1.0
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div id="primary" class="content-area full-width-page">
				<div id="content" class="site-content" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<h2><?php echo the_title(); ?></h2>

						<?php echo the_content(); ?>

					<?php endwhile; // end of the loop. ?>

				</div><!-- #content .site-content -->
			</div><!-- #primary .content-area -->			
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>