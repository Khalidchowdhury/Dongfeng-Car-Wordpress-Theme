<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>


    <div class="product_hero_area">
        <div class="container">
            <?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );?>

            <div class="summary entry-summary main_content_blog">
                <?php
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );?>
			<div class="share_buttons">
				<span>Share</span>
			<?php echo do_shortcode('[Sassy_Social_Share]') ?>
			</div>
            </div>

        </div>

	</div>
	<section class="product_extra">
		<div class="container">
			<?php if ( have_rows('fasility_images') ) : ?>
				<div class="fasility">
					<?php while( have_rows('fasility_images') ) : the_row(); ?>
					<?php if ( get_sub_field('image') ) : $image = get_sub_field('image'); ?>
						<div class="fasility_item">
							<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>"/>
						</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<div class="product_content">
				<div class="row">
					<?php if ( get_field('ingredients') ) : ?>
						<div class="col-md-6">
						<div class="product_extra_dec">
						<h3>Ingredients</h3>
							<?php echo get_field('ingredients'); ?>
						</div>
						</div>
					<?php endif; ?>

					<?php if ( get_field('may_contain') ) : ?>
						<div class="col-md-6">
							<div class="product_extra_dec">
							<h3>May Contain</h3>
							<?php echo get_field('may_contain'); ?>
							</div>
						</div>
					<?php endif; ?>
					
				</div>
			</div>
			
		</div>
	</section>
	<div class="instafeed">
		<div class="container">
			<div class="feed_wrapepr">
				<?php echo do_shortcode('[instagram-feed]') ?>
			</div>
		</div>
	</div>
    <div class="container">
        <?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>
    </div>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>