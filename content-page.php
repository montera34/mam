<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _mbbasetheme
 */

$img_size = 'post-thumbnail';
if ( has_post_thumbnail() ) {
	$loop_image = '<figure class="entry-figure col-sm-12">'.get_the_post_thumbnail($post->ID,$img_size,array('class' => 'img-responsive')).'</figure><div class="clearfix"</div>';
} else {
	$loop_image = "";
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<?php echo $loop_image; ?>
	<header class="entry-header col-md-4">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content col-md-8">
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', '_mbbasetheme' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', '_mbbasetheme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
