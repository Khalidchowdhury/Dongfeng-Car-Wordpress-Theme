<div id="Car">
    <p class="car-bg-text">Exquisite Lifestyle</p>

    
    <?php if( have_rows('car_features') ): ?>
        <div class="car-car">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/car.png" class="car-image" />

            <?php 
            $numbers = ['one','two','three','four','five','six'];
            $i = 0; 

            while( have_rows('car_features') ): the_row(); 
                $title = get_sub_field('feature_title');
                $subtitle = get_sub_field('feature_description');
                $reverse = get_sub_field('reverse_layout') ? 'reverse' : ''; 
                $item_class = 'car-item ' . $reverse . ' car-' . $numbers[$i];
            ?>
            <div class="<?php echo esc_attr($item_class); ?>">
                <!-- Static dot image structure remains -->
                <div class="car-dots">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/car-circle.svg" class="car-circle" />
                </div>

                <!-- Dynamic text -->
                <div class="car-text-container">
                    <p class="car-description white"><?php echo esc_html($title); ?></p>
                    <p class="FZRegular-14 white"><?php echo esc_html($subtitle); ?></p>
                </div>
            </div>
            <?php 
                $i++; 
            endwhile; 
            ?>
        </div>
    <?php endif; ?>




    <div id="trigger-car-items"></div>


</div>
