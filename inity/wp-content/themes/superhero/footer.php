<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Superhero
 * @since Superhero 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-slider table">
			<div class="table-cell">
				<div class="container">
					<div class="row">
						<div class="footer-carousel col-md-8 col-md-offset-2" id="footer-carousel">
							<?php dynamic_sidebar( 'footer_slider' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div> 

		<div class="footer-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.png">
						</a>
					</div>
					<div class="col-md-10">
						<div class="row">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => ''  ) ); ?>
						</div>
					</div>
				</div>
			</div>	
		</div>

		<div class="footer-info container">
			<?php dynamic_sidebar( 'footer_info' ); ?>
		</div>
		
		
	</footer><!-- #colophon .site-footer -->

</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>
</body>
</html>