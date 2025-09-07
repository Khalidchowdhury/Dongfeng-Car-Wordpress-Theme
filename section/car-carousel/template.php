

<div class="car-carousel" data-inviewport="contentSlideUp">

    <div class="mobile-arrows">
        <div class="arrowbtn car-carousel-back">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/drag-arrow.svg" alt="arrow" />
        </div>
        <div class="arrowbtn car-carousel-next">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/drag-arrow.svg" alt="arrow" />
        </div>
    </div>

    <div class="car-carousel-wrapper">
        <div class="followmouse">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/drag-arrow.svg" alt="arrow" class="arrow" />
            <span class="FZHeavy-14">DRAG</span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/drag-arrow.svg" alt="arrow" class="arrow" />
        </div>

        <div id="owl-BannerDrag" class="owl-carousel owl-theme">
            <?php if (have_rows('car_carousel')): ?>
                <?php while (have_rows('car_carousel')): the_row(); ?>
                    <?php 
                        $car_image = get_sub_field('car_image');
                        if ($car_image) :
                            $car_image_url = $car_image['url'];
                            $car_image_alt = $car_image['alt'] ?: 'Car Image';
                        endif;
                    ?>
                    <div class="carousel-item">
                        <img src="<?php echo esc_url($car_image_url); ?>" alt="<?php echo esc_attr($car_image_alt); ?>" class="backarrow" />
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/car-carousel1.jpg" alt="car-carousel" class="backarrow" />
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
