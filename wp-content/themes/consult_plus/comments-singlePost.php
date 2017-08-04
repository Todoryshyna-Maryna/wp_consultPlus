<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package consult_plus
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

<div id="comments" class="comments-area single-post_comments m-container">

    <div class="single-post_comments-respond">
		<?php
		// You can start editing here -- including this comment!
		if ( have_comments() ) : ?>
            <h2 class="single-post_comments-title">
                Comments
            </h2><!-- .comments-title -->

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
                <nav id="comment-nav-above" class="navigation comment-navigation">
                    <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'consult_plus' ); ?></h2>
                    <div class="nav-links">

                        <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'consult_plus' ) ); ?></div>
                        <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'consult_plus' ) ); ?></div>

                    </div><!-- .nav-links -->
                </nav><!-- #comment-nav-above -->
			<?php endif; // Check for comment navigation. ?>

            <ol class="comment-list">
				<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
				?>
            </ol><!-- .comment-list -->

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
                <nav id="comment-nav-below" class="navigation comment-navigation">
                    <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'consult_plus' ); ?></h2>
                    <div class="nav-links">

                        <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'consult_plus' ) ); ?></div>
                        <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'consult_plus' ) ); ?></div>

                    </div><!-- .nav-links -->
                </nav><!-- #comment-nav-below -->
				<?php
			endif; // Check for comment navigation.

		endif; // Check for have_comments().


		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'consult_plus' ); ?></p>
			<?php
		endif;

		?>
    </div>
    <div class="single-post_comments-form">
		<?php
		$commenter = wp_get_current_commenter();
		$comments_args = array(
			'title_reply'         => 'Leave massage',
			'title_reply_before'  => '<h3 id="reply-title" class="single-post_comments-title">',
			'title-reply_after' => '</h3>',
			'fields' => apply_filters( 'comment_form_default_fields', array(

				'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) .

				            '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',

				'email' => '<p class="comment-form-email">' .

				           '<label for="email">' . __( 'Email' ) . '</label> ' .

				           ( $req ? '<span>*</span>' : '' ) .

				           '<input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />' . '</p>',

				'url' => ''
			) )
		);

		comment_form( $comments_args );

		?>

    </div>

</div><!-- #comments -->
