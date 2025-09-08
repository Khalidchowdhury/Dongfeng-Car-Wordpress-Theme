

<form id="form1">
    <div id="SmoothScroll">
        <div id="Banner">
            <div class="banner-text-container" data-inviewport="contentSlideUp">
                <p class="FZHeavy-36 light-white">BOX FEATURES</p>
                <p class="banner-subtitle light-white">Feature Overview and Benefits</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/box-features/banner.jpg" class="desk" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/box-features/banner-mobile.jpg" class="mobile" />
        </div>
        
        <p id="short-desc" class="light-white">Imagine a dream playground where everything you love meets the extraordinary you. Bring your own game anywhere you want with the Dongfeng Box.</p>
        
        
        
<div id="Box-Features">
    <div class="exam-main-container">
        <?php 
            $terms = get_terms(array(
                'taxonomy'   => 'feature_category',
                'hide_empty' => false,
            ));

            if ( ! empty($terms) && ! is_wp_error($terms) ) :
        ?>
            <div class="c">
                <div class="test">
                    <div class="tab-selector white">
                        <?php 
                            $i = 0;
                            foreach ($terms as $term) {
                                $active_class = ($i === 0) ? 'selected active' : ''; 
                                ?>
                                <a id="<?php echo esc_attr($term->slug); ?>" class="tab <?php echo esc_attr($active_class); ?>">
                                    <span><?php echo esc_html(strtoupper($term->name)); ?></span>
                                </a>
                                <?php
                                $i++;
                            }
                        ?>
                        <div class="overlay"></div>
                        <div class="bar efficiency"></div>
                    </div>
                </div>
            </div>

            <div class="content-container">
                <?php 
                    $j = 0;
                    foreach ($terms as $term) :
                        $display_style = ($j === 0) ? '' : 'style="display: none;"';

                    $counterImgae = number_to_word($j);
                ?>
                    <div class="main-content <?php echo esc_attr($term->slug); ?>" <?php echo $display_style; ?>>
                        <div class="main-title-container" data-inviewport="contentSlideUp">
                            <p class="title-text FZRegular-14"><?php echo esc_html(term_description($term->term_id)); ?></p>
                            <p class="subtitle-text white"><?php echo esc_html(strtoupper($term->name)); ?></p>
                        </div>
                        <div class="main-flex-container">
                            <?php
                                $args = array(
                                    'post_type' => 'features',
                                    'posts_per_page' => -1,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'feature_category',
                                            'field'    => 'slug',
                                            'terms'    => $term->slug,
                                        ),
                                    ),
                                    'orderby' => 'menu_order title',
                                    'order'   => 'ASC'
                                );
                                $features_query = new WP_Query($args);

                                if ($features_query->have_posts()) :
                                    $counter = 1; 
                                    $position_classes = ['main-one-wrapper', 'main-two-wrapper', 'main-three-wrapper', 'main-four-wrapper', 'main-five-wrapper', 'main-six-wrapper', 'main-seven-wrapper'];

                                    while ($features_query->have_posts()) : $features_query->the_post();
                                        $current_pos_class_index = ($counter - 1) % count($position_classes);
                                        $position_class = $position_classes[$current_pos_class_index];
                                ?>
                                    <div class="main-wrapper <?php echo esc_attr($counterImgae); ?>" data-inviewport="contentSlideUp">
                                        <div class="main-container-wrapper">
                                            <div class="wrapper-main">
                                                <?php if ( has_post_thumbnail() ) : ?>
                                                    <?php the_post_thumbnail('full'); ?>
                                                <?php endif; ?>
                                            </div>
                                            <p class="wrapper-text FZRegular-14 light-white"><?php the_title(); ?></p>
                                        </div>
                                        <div class="main-text FZRegular-14"><?php the_content(); ?></div>
                                    </div>
                                <?php
                                    $counter++;
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                            ?>
                        </div>
                    </div>
                <?php 
                    $j++;
                    endforeach; 
                ?>
            </div>



        <?php endif; ?>
    </div>
</div>


    </div>
</form>


