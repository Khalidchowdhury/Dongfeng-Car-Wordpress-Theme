<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

	<div class="page_content">
		<?php the_content(); ?>
		<?php

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'mukto' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->