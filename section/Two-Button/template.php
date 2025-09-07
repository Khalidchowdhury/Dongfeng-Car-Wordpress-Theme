
<div id="Two-Button">
    <?php if ( have_rows('action_box') ) : ?>
        <?php while ( have_rows('action_box') ) : the_row(); ?>
            <?php 
                $link = get_sub_field('links');
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $thumbnail_image = get_sub_field('thumbnail_image');

                if (is_array($thumbnail_image) && isset($thumbnail_image['url'])) {
                    $thumbnail_url = $thumbnail_image['url']; 
                } elseif (is_numeric($thumbnail_image)) {
                    $thumbnail_url = wp_get_attachment_url($thumbnail_image); 
                } else {
                    $thumbnail_url = $thumbnail_image; 
                }
            ?>

            <?php if ($link && $thumbnail_url): ?>
                <a href="<?php echo esc_url($link); ?>" target="_blank" class="showroom-container" data-inviewport="contentSlideUp">
                    <img src="<?php echo esc_url($thumbnail_url); ?>" class="img" alt="<?php echo esc_attr($title); ?>" />
                    <div class="showroom-text">
                        <?php if ($title): ?>
                            <p class="FZHeavy-18 white"><?php echo esc_html($title); ?></p>
                        <?php endif; ?>
                        <?php if ($description): ?>
                            <p class="showroom-desc FZRegular-14"><?php echo esc_html($description); ?></p>
                        <?php endif; ?>
                    </div>
                </a>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
