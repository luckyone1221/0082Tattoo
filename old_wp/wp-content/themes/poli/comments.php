<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to zerogravity_comment() which is
 * located in the functions.php file.
 *
 * @since Zero Gravity 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>
	<?php if (is_single()) { ?>
		<div class="zg-wrapper-widget-area">
			<?php if (!dynamic_sidebar ('wt-antes-comentarios')) {}?>
		</div>
    <?php }elseif(is_page() && get_theme_mod('zgp_warea_sobre_comentarios_en_pages') == 1) { ?>
		<div class="zg-wrapper-widget-area">
			<?php if (!dynamic_sidebar ('wt-antes-comentarios')) {}?>
		</div>
    <?php } ?>
	
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">Комментарии:</h2>

		<ol class="commentlist">
			<?php wp_list_comments( array( 'style' => 'ol','avatar_size'=>'50' ) ); ?>
		</ol><!-- .commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'zerogravity-pro' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'zerogravity-pro' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'zerogravity-pro' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php _e( 'Comments are closed.' , 'zerogravity-pro' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>
	
	<div class="wrapper-form-comments">
	<?php comment_form(); ?>
	</div>

</div><!-- #comments .comments-area -->