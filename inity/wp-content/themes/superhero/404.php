<?php
/**
 * The template for displaying 404 pages (Not Found).
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

					<article id="post-0" class="post hentry error404 not-found">
						<header class="entry-header">
							<h2 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'superhero' ); ?></h2>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'superhero' ); ?></p>

							<!--<?php get_search_form(); ?>-->
						</div><!-- .entry-content -->
					</article><!-- #post-0 .post .error404 .not-found -->

				</div><!-- #content .site-content -->
			</div><!-- #primary .content-area -->		
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>




<?php get_footer(); ?>