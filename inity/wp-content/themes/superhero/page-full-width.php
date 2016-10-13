<?php
/**
 * Template Name: Main page
 *
 * The template for displaying full-width pages.
 *
 * @package Superhero
 * @since Superhero 1.0
 */

get_header(); ?>

<div class="container-fluid">
	<section class="section-1">
		<div class="row">
			<?php
				$mypages = get_pages( array( 'parent' => 18, 'post_type' => 'page', 'post_status' => 'publish', 'sort_column' => 'menu_order') );

				foreach( $mypages as $page ) :   
					$excerpt = $page->post_excerpt;
					$ID = $page->ID;

					$excerpt = apply_filters( 'the_excerpt', $excerpt );

					if(get_the_post_thumbnail( $ID )):
						$domsxe = simplexml_load_string(get_the_post_thumbnail( $ID ));
						$thumbnailsrc = $domsxe->attributes()->src;	
					endif; ?>
					<div class="col-md-4 col-sm-6 child">
						<div class="row">
							<div class="col-md-12 child-post" <?php echo "style='background-image: url(" . $thumbnailsrc . "); background-size: cover; background-position: center;'"?>>
								<div class="bg"></div>
								<div class="text-block">
									<div class="post-icon">
										
									</div>
									<div class="title">
										<h2><?php echo $page->post_title; ?></h2>
									</div>
									<div class="text">
										<div class="entry"><?php echo $excerpt; ?></div>
										<a href="<?php echo get_page_link( $page->ID ); ?>" class="widget-btn">know more</a>
									</div>	
								</div>
							</div>
						</div>
					</div>
			<?php endforeach; ?>
		</div>
	</section>
	<section class="section-2">
		<h2>Our partners</h2>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="partners-slider" id="partners-slider">
						<?php dynamic_sidebar( 'partners_slider' ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>


<?php get_footer(); ?>