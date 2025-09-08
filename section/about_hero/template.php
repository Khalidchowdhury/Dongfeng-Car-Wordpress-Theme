<div class="body-wrapper">

    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/background.svg" class="background" />

    <div class="uppersection">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/banner-bg.png" class="banner-bg" />

        <div class="headertext">
            <p class="title FZHeavy-36" data-inviewport="contentSlideUp">
                <?php echo get_sub_field('title'); ?>
            </p>

            <p class="subtitle FZRegular-16" data-inviewport="contentSlideUp">
                <?php echo get_sub_field('short_description'); ?>
            </p>
        </div>

        <?php 
        $bg_image = get_sub_field('backbackground_image'); 
        $default_image = get_template_directory_uri() . '/assets/images/about/default-banner.png';
        ?>
        <img src="<?php echo $bg_image ? esc_url($bg_image['url']) : esc_url($default_image); ?>" 
            alt="<?php echo $bg_image ? esc_attr($bg_image['alt']) : 'Banner'; ?>" 
            class="banner" 
            data-inviewport="contentSlideUp" />


        <p class="longdesc FZRegular-14 light-white">
            <?php echo get_sub_field('description'); ?>
        </p>
    </div>

    <div class="stats-wrapper">

        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/background2.svg" class="background2" />

        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/globe.svg" class="globe" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/chinapin.svg" class="cnpin" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/sgpin.svg" class="sgpin" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/japan.svg" class="jppin" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/hongkong.svg" class="hkpin" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/russia.svg" class="rupin" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/sweden.svg" class="swpin" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/nepal.svg" class="nppin" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/vietnam.svg" class="vtpin" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/malaysia.svg" class="mypin" />

        <div class="stats" data-inviewport="contentSlideUp">

            <div class="statitem">
                <p id="total-assets" class="title white">
                    <?php echo get_sub_field('total_assets'); ?>
                </p>
                <p class="subtitle FZRegular-14 light-white">
                    <?php echo get_sub_field('assets'); ?>
                </p>
            </div>

            <div class="statitem">
                <p id="employees" class="title white">
                    <?php echo get_sub_field('total_employees'); ?>
                </p>
                <p class="subtitle FZRegular-14 light-white">
                    <?php echo get_sub_field('employees'); ?>
                </p>
            </div>

            <div class="statitem">
                <p id="overseas-sales" class="title white">
                    <?php echo get_sub_field('total_sales'); ?>
                </p>
                <p class="subtitle FZRegular-14 light-white">
                    <?php echo get_sub_field('sales'); ?>
                </p>
            </div>

            <div class="statitem">
                <p id="countries-available" class="title white">
                    <?php echo get_sub_field('total_countries'); ?>
                </p>
                <p class="subtitle FZRegular-14 light-white">
                    <?php echo get_sub_field('countries'); ?>
                </p>
            </div>
        </div>
    </div>

</div>
