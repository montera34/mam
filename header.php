<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _mbbasetheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link type="image/x-icon" rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link type="image/png" sizes="256x256" rel="apple-touch-icon ion" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.png">
	<link type="image/png" rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.png">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<!--[if lt IE 9]>
	    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<header id="pre" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<img src="<?php echo MB_BLOGTHEME; ?>/assets/images/mam.logo.png" alt="<?php __('Logotipo de Madrid a medias','_mbbasetheme'); ?>" />
				</div><!-- col- -->
			</div><!-- row -->
		</div><!-- container -->

		<nav id="pre-menu" class="navbar navbar-default mam-menu" role="navigation">
<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#pre-menu-collapse">
						<span class="sr-only"><?php _e('Show/hide menu','_mbbasetheme') ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="pre-menu-collapse">
					<?php $location = "header";
					if ( has_nav_menu( $location ) ) {
						$args = array(
							'theme_location'  => $location,
							'container' => false,
							'menu_id' => 'navbar-header',
							'menu_class' => 'nav navbar-nav navbar-left navbar-menu',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker()
						);
						wp_nav_menu( $args );
					} ?>
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #pre -->

	<div id="content" class="site-content">
