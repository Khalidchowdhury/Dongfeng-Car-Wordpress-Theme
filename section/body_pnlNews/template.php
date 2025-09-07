<div id="body_pnlNews">

    <div id="News">

        <!-- News Title -->
        <p class="title FZHeavy-36 light-gray" data-inviewport="contentSlideUp">
            <?php the_sub_field('news_section_title'); ?>
        </p>
        <hr class="hr" />


        <?php
        $args = array(
            'post_type' => 'post',         
            'posts_per_page' => 5,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $latest_posts = new WP_Query($args);
        ?>

        <?php if( $latest_posts->have_posts() ): ?>
        <div id="owl-News" class="owl-carousel owl-theme">

            <?php while( $latest_posts->have_posts() ): $latest_posts->the_post(); ?>
            <div class="news-item" data-inviewport="contentSlideUp">
                <a href="<?php the_permalink(); ?>" class="news-link-wrapper" style="display:block; text-decoration:none;">

                    <div class="upper-section">
                        <?php if(has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" class="img news-image" />
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/news-default.jpg" class="img news-image" />
                        <?php endif; ?>
                    </div>

                    <div class="news-content-container">
                        <div class="news-top-section" style="display:flex; align-items:center; gap:8px;">
                            <div class="date-container" style="display:flex; align-items:center; gap:4px;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/news-calendar.svg" class="news-calendar" />
                                <p class="date-text FZRegular-14 white"><?php echo get_the_date('d M Y'); ?></p>
                            </div>
                        </div>

                        <p class="news-title FZRegular-14 white"><?php the_title(); ?></p>
                        <p class="news-desc FZRegular-14 white"><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                    </div>

                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>

        </div>

        <?php endif; ?>



    </div>

</div>
