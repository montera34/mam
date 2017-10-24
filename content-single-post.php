<?php
/**
 * @package _mbbasetheme
 */

$loop_prefix = 'single';
$img_size = ( is_single() ) ? 'post-thumbnail' : 'medium';
$loop_classes = 'row';

$loop_perma = get_permalink();
if ( has_post_thumbnail() ) {
	$loop_image = '<figure class="'.$loop_prefix.'-figure">'.get_the_post_thumbnail($post->ID,$img_size,array('class' => 'img-responsive')).'</figure>';
} else {
	$loop_image = "";
}

$loop_tit = get_the_title();
$loop_date = get_the_time('d\/m\/Y');

$categories_list = get_the_category_list( __( ', ', '_mbbasetheme' ) );
if ( $categories_list && _mbbasetheme_categorized_blog() ) {
	$loop_cats = '<dt class="'.$loop_prefix.'-context">'.__( 'Context', '_mbbasetheme' ).'</dt><dd>'.$categories_list.'</dd>';
} else {
	$loop_cats = '';
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($loop_classes); ?>>
	<header class="col-md-12 <?php echo $loop_prefix; ?>-header">
		<?php if ( is_single() ) echo $loop_image; ?>
		<a href="<?php echo $loop_perma ?>"><h2 class="<?php echo $loop_prefix; ?>-title"><?php echo $loop_tit ?></h2></a>
	</header>
	<div class="clearfix"></div>
	<aside class="col-md-4">
		<dl class=" <?php echo $loop_prefix; ?>-meta">
			<dt class="<?php echo $loop_prefix; ?>-date"><?php _e('Publication date','_mbbasetheme'); ?></dt>
			<dd class="<?php echo $loop_prefix; ?>-date"><?php echo $loop_date ?></dd>
			<dt class="<?php echo $loop_prefix; ?>-author"><?php _e('Author','_mbbasetheme'); ?></dt>
			<dd class="<?php echo $loop_prefix; ?>-author"><?php echo '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'; ?></dd>
			<?php echo $loop_cats;
			if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) { ?>
				<dt class="<?php echo $loop_prefix; ?>-comments"><?php _e('Comments','_mbbasetheme'); ?></dt>
				<dd><?php comments_popup_link( __( 'Leave a comment', '_mbbasetheme' ), __( '1 comment', '_mbbasetheme' ), __( '% comments', '_mbbasetheme' ) ); ?></dd>
			<?php }
			edit_post_link( __( 'Edit', '_mbbasetheme' ), '<dt class="'.$loop_prefix.'-edit"></dt><dd class="'.$loop_prefix.'-edit">', '</dd>' );?>
		</dl>
		<?php if ( !is_single() ) echo $loop_image; ?>
	</aside>
	<div class="col-md-8 <?php echo $loop_prefix; ?>-content">
		<?php the_content(); ?>
	</div>

</article>
