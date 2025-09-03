<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 */
 ?>
<?php get_header(); ?>

<div class="bredcam_area"
    style="background:url(<?php the_post_thumbnail_url();?>);background-color:#5aaef2;background-position:  center;background-size:  cover;">
    <div class="container">
        <div class="bredcam">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </div>
    </div>
</div>

<div class="main_page_content">
        <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

</div>










<?php get_footer();?>