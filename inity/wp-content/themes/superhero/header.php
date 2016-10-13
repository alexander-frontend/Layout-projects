<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Superhero
 * @since Superhero 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.0.min.js" type="text/javascript"></script>

<!-- Important Owl stylesheet -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.carousel.css">
 
<!-- Default Theme -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.theme.css">
 
<!-- Include js plugin -->
<script src="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.carousel.js"></script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>

		<?php
			if(get_the_post_thumbnail()){
				$domsxe = simplexml_load_string(get_the_post_thumbnail());
				$thumbnailsrc = $domsxe->attributes()->src;	?>
			<header id="masthead" class="site-header" role="banner" <?php echo "style='background-image: url(" . $thumbnailsrc . "); background-size: cover; background-position: center'" ?>>
		<?php }else{ ?>
			<header id="masthead" class="site-header" role="banner">
		<?php }		?>
			<div class="bg"></div>
			<nav class="navbar navbar-fixed-top navbar-inity">
		      <div class="container">
		        <div class="navbar-header">
			        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			        <hgroup>
						<?php
						$header_image = get_header_image();
						if ( ! empty( $header_image ) ) { ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<img src="<?php echo esc_url( $header_image ); ?>" class="header-image" alt="" />
							</a>
						<?php }else{ ?>
						<?php superhero_the_site_logo(); ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
						<?php } ?>
					</hgroup>
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right'  ) ); ?>
		        </div><!--/.nav-collapse -->
		      </div>
		    </nav>
			<!-- .site-navigation .main-navigation -->
			<div class="table-cell">
				<div class="container">
					<div class="row">
						<?php if ( is_front_page() ) : ?>
							<div class="header-main-carousel col-md-8 col-md-offset-2" id="header-carousel">
								<?php dynamic_sidebar( 'header_main_slider' ); ?>
							</div>	
						<?php elseif (is_archive()) : ?>
							<h1><?php single_cat_title(); ?> </h1>
						<?php else: ?>	
							<h1><?php the_title(); ?></h1>
						<?php endif; ?>	
					</div>
				</div>
			</div>
			<?php if ( !is_front_page() ) : ?>
			<div class="breadcrambs">
				<div class="container">
					<div class="row">
						<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		</header><!-- #masthead .site-header -->
		
	<div id="main" class="site-main">
