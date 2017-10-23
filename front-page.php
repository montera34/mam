<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 *
 * @package _mbbasetheme
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
	<?php
	// SLIDESHOW
	////
	get_template_part( 'content', 'carousel' );
	?>

</main><!-- #main -->

<?php get_footer(); ?>
