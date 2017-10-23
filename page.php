<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _mbbasetheme
 */

get_header(); ?>

<main id="main" class="site-main container" role="main">

	<?php
	// SLIDESHOW
	////
	get_template_part( 'content', 'carousel' );

	while ( have_posts() ) : the_post();

		get_template_part( 'content', 'page' );

	endwhile; // end of the loop. ?>

</main><!-- #main -->

<?php get_footer(); ?>
