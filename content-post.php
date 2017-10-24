<?php
/**
 * @package _mbbasetheme
 */

$loop_prefix = 'item';
$img_size = 'medium';
$loop_classes = 'col-sm-3';
$loop_perma = get_permalink();
$loop_desc = get_the_excerpt();
$loop_tit = get_the_title();
$loop_date = get_the_time('d\/m\/Y');

if ( has_post_thumbnail() ) {
	$loop_image = '<figure class="'.$loop_prefix.'-figure"><a href="' .$loop_perma. '">'.get_the_post_thumbnail($post->ID,$img_size,array('class' => 'img-responsive')).'</a></figure>';
} else {
	$loop_image = "";
}

$categories_list = get_the_category_list( ', ' );
if ( $categories_list && _mbbasetheme_categorized_blog() ) {
	$loop_cats = '<div class="cat-links">
		'.__( 'Context: ', '_mbbasetheme' ).$categories_list.'
	</div>';
} else {
	$loop_cats = '';
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($loop_classes); ?>>
	<?php echo $loop_image ?>
	<div class="<?php echo $loop_prefix; ?>-text">
		<header class="<?php echo $loop_prefix; ?>-header">
			<a href="<?php echo $loop_perma ?>"><h3 class="<?php echo $loop_prefix; ?>-title"><?php echo $loop_tit ?></h2></a>
			<span class="<?php echo $loop_prefix; ?>-meta"><?php echo $loop_date ?></span>
		</header>
		<div class="<?php echo $loop_prefix; ?>-content">
			<?php echo $loop_desc; ?>
		</div>
	<?php if ( 1 == 2 ) { ?>
		<footer class="<?php echo $loop_prefix; ?>-footer">
			<?php echo $loop_cats;
			if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) { ?>
				<div class="comments-link"><?php _e('Comments: ','_mbasetheme'); ?> <?php comments_popup_link( __( 'No comments', '_mbbasetheme' ), __( '1 comment', '_mbbasetheme' ), __( '% comments', '_mbbasetheme' ) ); ?></div>
			<?php }
			edit_post_link( __( 'Edit', '_mbbasetheme' ), '<div class="edit-link">', '</div>' );?>
		</footer>
	<?php } ?>
	</div>
	
</article>
