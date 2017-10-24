<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 *
 * @package _mbbasetheme
 */

get_header(); ?>

<main id="main" class="site-main container" role="main">
	<?php
	// SLIDESHOW
	////
	get_template_part( 'content', 'carousel' );

	while ( have_posts() ) : the_post(); ?>

		<section id="slogan" class="row">
			<div class="col-md-12 slogan-desc">
				<?php the_content(); ?>
			</div>
		</section>

	<?php endwhile; // end of the loop.

	// LAST POSTS
	////
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => '4',
	);
	$last = new WP_Query($args);
	if ( $last->have_posts() ) :
	?>
		<section id="last" class="row">
			<header class="col-md-12"><h2 class="sec-tit"><?php _e('Last posts in the blog','_mbbasetheme') ?></h2></header>
			<div class="clearfix"></div>
			<?php $count = 0;
			while ( $last->have_posts() ) : $last->the_post();
				get_template_part( 'content', get_post_type() );
				$count++;
				if ( $count == 4 ) {
					echo '<div class="clearfix"></div>';
					$count = 0;
				}
			endwhile; // end of the loop. ?>
		</section><!-- #last -->
	<?php endif; ?>

</main><!-- #main -->

<?php get_footer(); ?>
