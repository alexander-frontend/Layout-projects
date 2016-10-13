<?php
/**
 * Template Name: Subcategory page
 *
 * The template for displaying content pages.
 *
 * @package Superhero
 * @since Superhero 1.0
 */

get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div id="primary" class="content-area full-width-page row">
				<div class="container">
					<div class="col-md-12">
						<h4><?php echo the_content(); ?></h4>
					</div>
				</div>
				<?php
					$mypages = get_pages( array( 'parent' => $post->ID, 'post_type' => 'page', 'post_status' => 'publish' ) );
					$j=0;
					foreach( $mypages as $page ) :   
						$excerpt = $page->post_excerpt;
						$ID = $page->ID;

						$excerpt = apply_filters( 'the_excerpt', $excerpt );
						if(get_the_post_thumbnail( $ID )){
							$domsxe = simplexml_load_string(get_the_post_thumbnail( $ID ));
							$thumbnailsrc = $domsxe->attributes()->src;	
						}

					?>

						
							<div class="col-md-12 col-sm-12 child-block">
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="row">
											<div class="post-thumb" <?php if(get_the_post_thumbnail( $ID )): ?><?php echo "style='background-image: url(" . $thumbnailsrc . "); background-size: cover; background-position: center; height: 390px'"?><?php endif; ?>></div>
											<div class="bg"></div>
										</div>
									</div>
									<div class="col-md-6 col-sm-12 text-block">
										<h2><?php echo $page->post_title; ?></h2>
										<div class="entry"><?php echo $excerpt; ?></div>
										<a href="<?php echo get_page_link( $page->ID ); ?>" class="widget-btn">know more</a>
									</div>
								</div>
							</div>
						
						<?php 
					
					endforeach;  
				?>
			</div><!-- #primary .content-area -->			
		</div>
	</div>
</div>





<?php get_footer(); ?>