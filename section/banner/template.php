
<div id="Banner">
    <div class="ban-item">


        <!-- Banner Section Background Image -->
         <?php 
            $image = get_sub_field('banner_background_image');
            $default_Background = get_template_directory_uri() . '/assets/images/default/banner-2.jpg';
         ?>
        <img src="<?php echo esc_url($image ? $image : $default_Background); ?>" class="img desktop-banner" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/mobile-banner2.png" class="img mobile-banner" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/banner-1-light-left.png" class="img left-light" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/banner-1-light-right.png" class="img right-light" />
        <div class="rightlightbottom">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/bottomrightlight.png" class="img bottomrightlight" />
        </div>

        <div class="rightlightbottom">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/lightbottomleft.png" class="img bottomleftlight" />
        </div>

        <div class="rightlightbottom">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/lighttopleft.png" class="img topleftlight" />
        </div>

        <div class="rightlightbottom">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/lighttopright.png" class="img toprightlight" />
        </div>

        <div class="rightlightbottom">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/lighttopright.png" class="img toprightlight" />
        </div>


        <div class="rightlightbottom">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/middlelight.png" class="img middlelight" />
        </div>

        <div class="banner-1-text-container">
            <!-- banner title -->
            <?php if ( get_sub_field('banner_title') ) : ?>
                <div class="FZHeavy-36 light-white mb">
                    <?php the_sub_field('banner_title'); ?>
                </div>
            <?php endif; ?>

            <!-- banner Description -->
            <?php if ( get_sub_field('banner_description') ) : ?>
                <p class="banner-1-desc FZRegular-14 light-white">
                    <?php echo nl2br( get_sub_field('banner_description') ); ?>
                </p>
            <?php endif; ?>

            <!-- Banner Action Button -->
            <?php 
            $button = get_sub_field('banner_action_button');
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

        <div class="banner-video" onclick="playVideo('2QaXH3soXcc')">
            <video autoplay="autoplay" controlslist="nodownload" webkit-playsinline="" playsinline=""
                muted="muted" loop="loop">
                <source src="https://www.youtube.com/watch?v=2QaXH3soXcc" type="video/mp4">
            </video>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/play-video.svg" class="img play-video" />
        </div>
        
    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/banner-bottom.jpg" class="img banner-bottom" />

    <div class="banner-1-text-container-mobile">

        <!-- Banner title For Mobile -->
        <?php if ( get_sub_field('banner_title') ) : ?>
            <div class="FZHeavy-36 light-white title">
                <?php the_sub_field('banner_title'); ?>
            </div>
        <?php endif; ?>

        <!-- Banner Description For Mobile -->
        <?php if ( get_sub_field('banner_description') ) : ?>
            <p class="banner-1-desc FZRegular-14 light-white">
                <?php echo nl2br( esc_html( get_sub_field('banner_description') ) ); ?>
            </p>
        <?php endif; ?>

        <?php 
            $button = get_sub_field('banner_action_button');
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