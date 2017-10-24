<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package _mbbasetheme
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area row">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) :
		$form_classes = "col-md-4 col-md-pull-8";
	?>
	<div class="col-md-8 col-md-push-4">

		<h2 class="comments-title"><?php _e('Comments','_mbbasetheme'); ?></h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h3 class="screen-reader-text"><?php _e( 'Comment navigation', '_mbbasetheme' ); ?></h3>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', '_mbbasetheme' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', '_mbbasetheme' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<ul class="comment-list list-unstyled">
			<?php
				wp_list_comments( array(
					'style'      => 'ul',
					'short_ping' => true,
				) );
			?>
		</ul><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', '_mbbasetheme' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', '_mbbasetheme' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', '_mbbasetheme' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	</div>
	<?php else :
		$form_classes = "col-md-4";
	endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<div class="col-md-8 col-md-push-4"><p class="no-comments"><?php _e( 'Comments are closed.', '_mbbasetheme' ); ?></p></div>
	<?php endif; ?>

<?php
$fields =  array(
	'author' =>
	'<p class="comment-form-author"><div class="form-group"><label for="author">' . __( 'Name', '_mbbasetheme' ) . '</label> ' .
    ( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
    '" ' . $aria_req . ' /></div></p>',
	'email' =>
    '<p class="comment-form-email"><div class="form-group"><label for="email">' . __( 'Email', '_mbbasetheme' ) . '</label> ' .
    ( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="email" name="email" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" ' . $aria_req . ' /></div></p>',
	'url' =>
    '<p class="comment-form-url"><div class="form-group"><label for="url">' . __( 'Website', '_mbbasetheme' ) . '</label>' .
    '<input id="url" name="url" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
    '"   /></p>',
);

$comments_args = array(
        // change "Leave a Reply" to...
        'title_reply'=>  _x('Discuss this post','_mbbasetheme'),
        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
        'comment_field' =>  '<p class="comment-form-comment"><div class="form-group"><label for="comment">' . _x( 'Comment', '_mbbasetheme' ) .
            '</label><textarea id="comment" name="comment" class="form-control"  rows="8" aria-required="true">' .
            '</textarea></div></p>',
	    'comment_notes_after' => ' '
); ?>

	<div class="<?php echo $form_classes; ?>">
		<?php comment_form($comments_args); ?>
	</div>

</div><!-- #comments -->
