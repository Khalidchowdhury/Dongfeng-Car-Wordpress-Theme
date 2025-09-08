<div class="section2wrapper">

    <div class="section2">

        <div class="leftside" data-inviewport="contentSlideRight">

            <?php 
                $brand_logo = get_sub_field('brand_image'); 
                $title = get_sub_field('title');
                $short_description = get_sub_field('short_description');
            ?>

            <?php if ( $brand_logo ) : ?>
                <?php if ( is_array($brand_logo) ) : ?>
                    <img src="<?php echo esc_url($brand_logo['url']); ?>" alt="<?php echo esc_attr($brand_logo['alt']); ?>" class="logo" />
                <?php else : ?>
                    <img src="<?php echo esc_url($brand_logo); ?>" alt="Brand Logo" class="logo" />
                <?php endif; ?>
            <?php endif; ?>

            <?php if ( $title ) : ?>
                <p class="title FZHeavy-36">
                    <?php echo esc_html($title); ?>
                </p>
            <?php endif; ?>

            <?php if ( $short_description ) : ?>
                <p class="subtitle FZRegular-14 light-white">
                    <?php echo esc_html($short_description); ?>
                </p>
            <?php endif; ?>
        </div>

        <div class="rightside" data-inviewport="contentSlideLeft">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/topshadow.png" class="topshadow" alt="shadow" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/bottomshadow.png" class="bottomshadow" alt="shadow" />

            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php if ( have_rows('swiper_list') ) : ?>
                        <?php while ( have_rows('swiper_list') ) : the_row(); 
                            $swiper_item = get_sub_field('swiper_items');
                        ?>
                            <?php if ( $swiper_item ) : ?>
                                <div class="swiper-slide"><?php echo esc_html($swiper_item); ?></div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="divider">
    <hr />
</div>
