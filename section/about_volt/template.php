<div class="volt">

    <div class="leftside" data-inviewport="contentSlideRight">

        <?php 
            $brand_image = get_sub_field('brand_image');
        ?>
        <img src="<?php echo esc_url($brand_image['url']); ?>" alt="<?php echo esc_attr($brand_image['alt']); ?>" class="bottomshadow" />
        <p class="FZRegular-14 white subtitle">
            <?php echo get_sub_field('sub_title'); ?>
        </p>
    </div>

    <div class="rightside" data-inviewport="contentSlideLeft">

        <div class="FZRegular-14 white">
            <?php echo get_sub_field('descriptions'); ?>
        </div>


    </div>
</div>

