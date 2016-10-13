<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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

					<?php if ( have_posts() ) : ?>

						<?php while ( have_posts() ) : the_post(); ?>

							<h2><?php echo the_title(); ?></h2>

							<?php echo the_content(); ?>

						<?php endwhile; // end of the loop. ?>

						<?php superhero_content_nav( 'nav-below' ); ?>

					<?php else : ?>

						<?php get_template_part( 'no-results', 'index' ); ?>

					<?php endif; ?>

				</div><!-- #content .site-content -->
			</div><!-- #primary .content-area -->			
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>