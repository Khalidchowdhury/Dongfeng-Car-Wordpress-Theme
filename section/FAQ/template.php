<div id="FAQ">
    <div class="faq-container">
        <?php if ($faq_title = get_sub_field('faq_title')): ?>
            <p class="title FZHeavy-36 light-gray" data-inviewport="contentSlideUp">
                <?php echo esc_html($faq_title); ?>
            </p>
        <?php endif; ?>

        <div class="faq-content-container">
            <?php if (have_rows('faq_box')): ?>
                <?php while (have_rows('faq_box')): the_row(); ?>
                    <?php 
                        $box_image = get_sub_field('box_icon');
                        $box_title = get_sub_field('box_title');
                        $box_description = get_sub_field('box_description');

                        // Handle image return type (Array, ID, or URL)
                        if (is_array($box_image) && isset($box_image['url'])) {
                            $box_image_url = $box_image['url'];
                            $box_image_alt = $box_image['alt'] ?? $box_title;
                        } elseif (is_numeric($box_image)) {
                            $box_image_url = wp_get_attachment_url($box_image);
                            $box_image_alt = $box_title;
                        } else {
                            $box_image_url = $box_image;
                            $box_image_alt = $box_title;
                        }
                    ?>

                    <div class="faq-item" data-inviewport="contentSlideUp">
                        <?php if ($box_image_url): ?>
                            <img src="<?php echo esc_url($box_image_url); ?>" alt="<?php echo esc_attr($box_image_alt); ?>" class="faq-image-one img" />
                        <?php endif; ?>

                        <?php if ($box_title): ?>
                            <p class="FZRegular-18 white"><?php echo esc_html($box_title); ?></p>
                        <?php endif; ?>

                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default/faq-item-line.svg'); ?>" class="faq-item-line img" alt="Divider" />

                        <?php if ($box_description): ?>
                            <p class="faq-desc FZRegular-14 white"><?php echo esc_html($box_description); ?></p>
                        <?php endif; ?>

                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default/faq-line.svg'); ?>" class="faq-line" alt="Separator" />
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
