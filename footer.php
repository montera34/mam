<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _mbbasetheme
 */
?>

	</div><!-- #content -->

	<footer id="epi" class="site-footer" role="contentinfo">
		<nav id="epi-menu" class="navbar navbar-default mam-menu" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#epi-menu-collapse">
						<span class="sr-only"><?php _e('Show/hide menu','_mbbasetheme') ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="epi-menu-collapse">
					<?php $location = "footer";
					if ( has_nav_menu( $location ) ) {
						$args = array(
							'theme_location'  => $location,
							'container' => false,
							'menu_id' => 'navbar-footer',
							'menu_class' => 'nav navbar-nav navbar-left navbar-menu',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker()
						);
						wp_nav_menu( $args );
					} ?>
				</div>
			</div>
		</nav><!-- #site-navigation -->

		<div id="colophon" class="container">
			<div class="row">
				<div class="col-md-12">
					<img class="" src="<?php echo MB_BLOGTHEME; ?>/assets/images/mam.logo.png" alt="<?php __('Logotipo de Madrid a medias','_mbbasetheme'); ?>" />
					<img src="<?php echo MB_BLOGTHEME; ?>/assets/images/centrocentro.logo.gif" alt="<?php __('Logotipo del Centro Centro','_mbbasetheme'); ?>" />
				</div>
			</div>
		</div><!-- #colophon -->
	</footer><!-- #epi -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
