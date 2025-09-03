<?php get_header();?>
<?php 
				$blog_page = get_option('page_for_posts');
				$id_image = get_post_thumbnail_id($blog_page);
				$image = wp_get_attachment_image_src($id_image, 'full');
			?>
<div class="bredcam_area"
    style="background:url(<?php echo $image[0]; ?>);">
    <div class="container">
        <div class="bredcam">
            <h5><?php wp_title(' ', ' '); ?></h5>
            <p><a href="<?php echo get_home_url()?>"> <?php __('Home', 'mukto'); ?> </a><span>/</span> <?php wp_title(' ', ' '); ?></p>
        </div>

    </div>
</div>

<div class="main_content_blog">

    <div class="container">
        <div class="blog_main">
            <div class="row">
                <div class="col-md-9">
                    <?php  if(have_posts()): ?>
                    <div class="blog_container">
                    <?php  while(have_posts()):the_post(); ?>
                    <div class="blog_single">
                        <div class="row">
                            <div class="col-lg-4 m-auto">
                                <div class="blog_pic">
                                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium');?></a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="blog_content">
                                    <p class="category"><?php the_category(', '); ?></p>
                                    <h3 class="blogtitle"><a
                                            href="<?php the_permalink();?>"><?php echo get_the_title(); ?></a></h3>
                                    <p><?php echo wp_trim_words(get_the_content(),20); ?></p>
                                    <a class="site_btn blue_btn" href="<?php the_permalink();?>">Read More</a>
                                    <p class="date_position"><?php echo get_the_date(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div><!-- blog_left_single_item -->
                    <?php endwhile;?>
                    </div>
                    <div class="blog_pagination">

                        <?php the_posts_pagination( array(
                        'mid_size' => 2,
                        'screen_reader_text' => ' ',
                        'prev_text' => __( '<i class="fas fa-angle-left"></i>', 'mukto' ),
                        'next_text' => __( '<i class="fas fa-angle-right"></i>', 'mukto' ),
                        ) ); ?>
                    </div>

                    <?php //if no post
                        else: 
                            get_template_part('template-parts/page/content','none');
                        endif;
                        wp_reset_postdata();
                        ?>
                </div>
                <div class="col-md-3">
                    <?php get_sidebar() ?>
                </div>
            </div><!-- row -->

        </div>
    </div> <!-- container -->
</div> <!-- blog_page_area -->

<?php get_footer();?>