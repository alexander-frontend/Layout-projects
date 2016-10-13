<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Superhero
 * @since Superhero 1.0
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

					<?php superhero_content_nav( 'nav-below' ); ?>

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