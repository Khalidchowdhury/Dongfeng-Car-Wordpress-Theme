
<div id="RTD-Container">

    <?php
        $background_image = get_sub_field('rtd_background_image');
        $default_image = get_template_directory_uri() . '/assets/images/default/rtd-bg.jpg';
        $final_image = $background_image ? $background_image : $default_image;
    ?>

    <picture class="img">
        <source srcset="<?php echo esc_url($final_image); ?>" type="image/webp">
        <source srcset="<?php echo esc_url($final_image); ?>" type="image/jpeg">
        <img loading="lazy" src="<?php echo esc_url($final_image); ?>" class="img" alt="Background">
    </picture>



    <div class="rtd-text-container">
        <div class="rtd-text-content" data-inviewport="contentSlideUp">
            <p class="FZHeavy-36 light-white title">
                <?php the_sub_field('rtd_title'); ?>
            </p>

            <?php
            $link = get_sub_field('rtd_action_button');

            if ( $link ):
                $link_url    = esc_url( $link['url'] );
                $link_title  = esc_html( $link['title'] );
                $link_target = esc_attr( $link['target'] ? $link['target'] : '_self' );
                ?>
                <a class="link-button" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>">
                    <p class="link-texts white"><?php echo $link_title; ?></p>
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