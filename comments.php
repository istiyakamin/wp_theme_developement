<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
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

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'twentyseventeen' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: number of comments, 2: post title */
					_nx(
						'%1$s Reply to &ldquo;%2$s&rdquo;',
						'%1$s Replies to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'twentyseventeen'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h2>

		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'avatar_size' => 60,
					'style'       => 'ul',
					'short_ping'  => true,
					//'reply_text'  => twentyseventeen_get_svg( array( 'icon' => 'mail-reply' ) ) . __( 'Reply', 'twentyseventeen' ),
				) );
			?>
		</ul>

		<?php echo the_comments_pagination( array(
			'prev_text' =>  '<span class="screen-reader-text">' . __( 'Before', 'twentyseventeen' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . __( 'After', 'twentyseventeen' ) . '</span>',
		) );

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyseventeen' ); ?></p>
	<?php
	endif; 


	
	 $comment_args = array(
		 'title_reply'=>'Got Something To Say:',
		 'fields' => apply_filters( 'comment_form_default_fields', array(

				'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Your Good Name' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) .

        		'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',   

    'email'  => '<p class="comment-form-email">' .

                '<label for="email">' . __( 'Your Email Please' ) . '</label> ' .

                ( $req ? '<span>*</span>' : '' ) .

                '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>',

    'url'    => '' ) ),

    'comment_field' => '<p>' .

                '<label for="comment">' . __( 'Let us know what you have to say:' ) . '</label>' .

                '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>' .

                '</p>',

    'comment_notes_after' => '',

);

comment_form($comment_args); ?>

	?>

</div><!-- #comments -->
