
<div id="About">

    <?php if ( get_sub_field('about_title') ) : ?>
        <div class="title FZHeavy-36 light-gray" data-inviewport="contentSlideUp">
            <?php the_sub_field('about_title'); ?>
        </div>
    <?php endif; ?>

    <hr class="hr" />
    <div class="about-content-container">
        <div class="about-image" data-inviewport="contentSlideRight">

            <?php 
            $img = get_sub_field('about_image'); 
            $default_image = get_template_directory_uri() . '/assets/images/default/about-image.jpg';
            $img_url = $img ? $img['url'] : $default_image;
            $img_alt = $img ? $img['alt'] : 'About Image';
            ?>
            <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($img_alt); ?>" class="img" />


            <a href="#" class="about-play-container FZHeavy-14 blue" data-text="PLAY VIDEO">
                <p class="play-text FZHeavy-14 blue" data-text="PLAY VIDEO">PLAY VIDEO</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/play-video.svg" class="img play-video" />
            </a>

        </div>
        
        <div class="about-text-container" data-inviewport="contentSlideLeft">
            <p class="about-subtitle FZRegular-14"><?php the_sub_field('about_subtitle'); ?></p>
            <?php $img = get_sub_field('brand_image'); ?>
            <img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" class="img about-logo" />
            <p class="about-desc FZRegular-14 white"><?php echo get_sub_field('about_descriptions'); ?></p>
            <?php 
            $button = get_sub_field('about_action_button');
            if ( $button ) : 
                $url    = $button['url'];
                $title  = $button['title'];
                $target = $button['target'] ? $button['target'] : '_self';
            ?>
                <a href="<?php echo esc_url( $url ); ?>" target="<?php echo esc_attr( $target ); ?>" class="link-button">
                    <p class="link-texts white"><?php echo esc_html( $title ); ?></p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <rect x="0" y="0" width="20" height="20" rx="10" fill="#E60021"></rect>
                        <path class="button-arrow-01" d="M7,13l6-6 M13,7H8.108 M13,7v4.892" stroke="white" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path class="button-arrow-02" d="M7,13l6-6 M13,7H8.108 M13,7v4.892" stroke="white" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
            <?php endif; ?>

        </div>
    </div>
</div>