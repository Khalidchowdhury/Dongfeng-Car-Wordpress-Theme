<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.

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

<div class="comment_area_wrapper">
    <div class="number_title">
	<?php  $comments_number = get_comments_number();
        if (1>=$comments_number) {
            echo '<h4>'.$comments_number.' Comment</h4>';
        }else{
            echo '<h4>'.$comments_number.' Comments</h4>';
        } ?>
	</div>
   <ul>
   <?php 
       
        wp_list_comments( array(
            'avatar_size'    => 60,


        ) ); 
        ?>
   </ul>
   <?php // If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php _e( 'No Comment Found.', 'mukto' ); ?></p>
	<?php
	endif;
?>
    <div class="comments_form">
    <?php comment_form( ) ?>
</div>
   
    <div class="comments_pagiantion">
        <?php the_comments_pagination(array(
            'prev_text'=>__( 'Prev', 'mukto' ),
            'next_text'=>__( 'Next', 'mukto' ),
            'screen_reader_text'=>' ',
        )) ?>
    </div>
</div>