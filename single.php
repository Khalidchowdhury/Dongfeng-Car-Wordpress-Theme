<?php get_header();?>


<div class="bredcam_area"
    style="background:url(<?php the_post_thumbnail_url();?>);background-color:#5aaef2;background-position:  center;background-size:  cover;">
    <div class="container">
        <div class="bredcam">
            <?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
            <p> <a href="<?php echo home_url(); ?>">Home</a> / <a
                    href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"> <?php __('Blog', 'mukto'); ?> </a>/
                <?php the_title(); ?></p>
        </div>
    </div>
</div>


<div class="single_blog_page_contetn">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php 
                                if(have_posts()):
                                while(have_posts()):the_post();
                            ?>
                <div class="blog_content_area">

                    <article class="blog_post standard_post">
                        <div class="blog_single_post_thumnail">
                            <?php the_post_thumbnail();?>
                        </div>
                        <div class="blog_time_date_cat">
                            <span><i class="fas fa-clock"></i> <?php echo get_the_date(); ?></span>
                            <span><?php the_category( ' ' ); ?></span>
                        </div>
                        <div class="blog_content">
                            <h3><?php echo get_the_title(); ?></h3>
                            <?php echo get_the_content(); ?>
                        </div>
                        <div class="share_like">
                            <div class="share">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink() ?>"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/home?status=<?php echo get_permalink() ?>"><i
                                        class="fab fa-twitter"></i></a>
                                <a
                                    href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink() ?>&title=<?php echo get_the_title(); ?>&summary=<?php echo wp_trim_words(get_the_content(),10); ?>&source= <?php echo get_bloginfo('name') ?>"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"
                                    data-pin-custom="true"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </article>

                    <?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
                                if( $related ){ ?>
                    <div class="related_Post">
                        <div class="related_postitle">
                            <h4>Publicações Relacionadas</h4>
                        </div>
                        <div class="row">

                            <?php

                                $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
                                if( $related ) foreach( $related as $post ) {
                                setup_postdata($post); ?>
                            <div class="col-md-4">
                                <div class="single_realted_post">
                                    <div class="blog_single_thumnail">
                                        <a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium');?></a>
                                    </div>
                                    <div class="related_blog_content">
                                        <div class="re_post_title"> <a
                                                href="<?php the_permalink();?>"><?php echo get_the_title(); ?></a></div>
                                        <div class="time_date">
                                            <span><?php echo get_the_date(); ?> </span>/
                                            <span><?php the_category( ' ' ); ?></span>
                                        </div>
                                    </div>


                                </div>


                            </div>

                            <?php }
                                wp_reset_postdata(); ?>

                        </div>
                    </div>
                    <?php } ?>
                    <!-- related post  -->
                    
                    <div class="content_blog_a">
                        <div class="e_blog_A">
                            <?php echo get_avatar(get_the_author_meta('ID'),100);?>
                        </div>
                        <div class="blog_a_text">
                            <h4 class="author_name">
                                <?php the_author()?>
                            </h4>
                            <p>
                                 <?php the_author_meta('description');?>
                            </p>

                            <?php $authorid = get_the_author_meta('ID'); ?>
                            <?php if( have_rows('author_social_link', 'user_'.$authorid) ): ?>
                            <div class="author_social_links">

                                <?php while( have_rows('author_social_link', 'user_'.$authorid) ): the_row(); ?>

                                <a href="<?php the_sub_field('link'); ?>"
                                    target="_blank"><?php the_sub_field('authoricon'); ?></a>

                                <?php endwhile; ?>

                            </div>


                            <?php endif; ?>


                        </div>
                    </div>



                    <?php
		                  	if ( comments_open() || get_comments_number() ) : ?>
                    <div class="comment_area">
                        <?php comments_template(); ?>
                    </div>
                    <?php 
                        endif;
                    ?>

                    <!-- blog_left_side_area -->
                    <?php 
                            endwhile;
                             endif;
                            wp_reset_postdata();
                        ?>


                </div>
            </div>
            <div class="col-md-3">
                <?php get_sidebar() ?>
            </div>
        </div>

    </div>
    <!-- container -->
</div>
<!-- blog_page_area -->

<?php get_footer();?>