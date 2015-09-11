<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Sleek_Blog
 * @since Sleek Blog 1.0
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

<div id="comments" class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sleekblog' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h2>

		<?php sleekblog_comment_nav(); ?>

		<div class="comment-list">
			<?php
				wp_list_comments( array(
					'callback'  =>'sleekblog_comment',
					'style'       => 'div',
					'short_ping'  => true,
					'avatar_size' => 56,					
				) );
			?>
		</ol><!-- .comment-list -->

		<?php sleekblog_comment_nav(); ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'sleekblog' ); ?></p>
	<?php endif; ?>

	<?php 
$comments_args = array(
        // change the title of send button 
        'label_submit'=>'Send',
        'class_submit'=>'mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--accent"',
        // change the title of the reply section
        'title_reply'=>'',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><textarea id="comment" class="mdl-textfield__input" name="comment" aria-required="true"></textarea><label for="comment" class="mdl-textfield__label">' . _x( 'Comment', 'noun' ) . '</label></div>',
);
comment_form($comments_args); ?>

</div><!-- .comments-area -->
