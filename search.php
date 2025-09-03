<?php get_header();?>
<?php 
				$blog_page = get_option('page_for_posts');
				$id_image = get_post_thumbnail_id($blog_page);
				$image = wp_get_attachment_image_src($id_image, 'full');
			?>
<div class="entry-header"
    style="background:url(<?php echo $image[0]; ?>);background-color:#caca;background-position:  center;background-size:  cover;">
    <div class="container">
        <div class="bredcam">
            <?php if(get_search_query()){
                ?>
            <h5 class="entry-title"> <?php __('Search Result for :', 'mukto'); ?>
                <span>
                    <?php the_search_query(); ?></span>
            </h5>
            <?php
            }else{
                ?>

            <?php  } ?>

            <?php if(have_posts()){
                 global $wp_query; 
                ?>
            <p>
                <?php echo $wp_query->found_posts; ?> Result found</p>
            <?php
            }else{
                ?>
            <p>0 Result Found</p>
            <?php
            } ?>


        </div>
    </div>
</div>

<div class="main_content_blog">
    <div class="container">
        <div class="blog_main">
            <div class="row">
                <div class="col-md-9">
                    <?php  if(have_posts()): ?>
                    <?php  while(have_posts()):the_post();
                ?>
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
                    <div class="blog_pagination">

                        <?php
                            $temp_dir = get_template_directory_uri();
                            $leftaw = '<img src="'.$temp_dir.'/assets/images/arrowleft.png" alt="">';
                            $rightaw = '<img src="'.$temp_dir.'/assets/images/arrow.png" alt="">' ?>
                        <?php the_posts_pagination( array(
                        'mid_size' => 2,
                        'screen_reader_text' => ' ',
                        'prev_text' => __( $leftaw, 'mukto' ),
                        'next_text' => __( $rightaw, 'mukto' ),
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
                    <?php  get_template_part('template-parts/page/side_bar'); ?>
                </div>
            </div><!-- row -->

        </div>
    </div><!-- container -->
</div><!-- blog_page_area -->



<?php get_footer();?>