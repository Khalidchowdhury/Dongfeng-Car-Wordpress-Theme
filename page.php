<?php get_header(); ?>

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
    
        
        <?php
            if(has_flexible('page_builders')){
                the_flexible('page_builders');
            }
        ?>
    
    <?php endwhile; ?>
<?php endif; ?>
    
<?php get_footer(); ?>