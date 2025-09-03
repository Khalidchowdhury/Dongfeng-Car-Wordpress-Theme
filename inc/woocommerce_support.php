<?php 

/*
	 * Woocommerece support
	 */

function mukto_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
    add_theme_support('post-thumbnails');
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'mukto_add_woocommerce_support' );

function woo_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30, 0 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40, 0 );
}
add_action( 'init', 'woo_remove_wc_breadcrumbs' );

//check if woocommerce plugin is activated
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
 function is_woocommerce_activated() {
  if ( class_exists( 'woocommerce' ) ) {
   return true;
  }
  else {
   return false;
  }
 }
}


//showing cart header menu item
function andro_cart_menu_item() {
if(is_woocommerce_activated()){
?>
 <a href="#" id="cart_btn" class="dropdown-toggle" data-toggle="dropdown">
<img src="<?php echo get_template_directory_uri();?>/assests/images/bag.png" alt="">
 
 <?php
 global $woocommerce;
 $my_cart_count = $woocommerce->cart->cart_contents_count;

  echo '<span class="cart-number-box';
  if ($my_cart_count > 0) {
    echo ' active';
  }
  echo '">';echo sprintf( _n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes' ), $woocommerce->cart->cart_contents_count );
  echo '</span>';
 ?>
 </a>
<?php }
}

function andro_cart_shopping_bag(){
 if(is_woocommerce_activated()){
  ?>
  <div class="shopping-bag dropdown-menu">
  <?php
   if ( version_compare( WOOCOMMERCE_VERSION, "2.0.0" ) >= 0 ) {
    the_widget( 'WC_Widget_Cart', 'title=' );
   } else {
    the_widget( 'WooCommerce_Widget_Cart', 'title=' );
   } ?>
  </div>
<?php
 }
}

add_filter( 'add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

if ( ! function_exists( 'woocommerce_header_add_to_cart_fragment' ) ) {
 function woocommerce_header_add_to_cart_fragment( $fragments ) {
  global $woocommerce;
  ob_start();
 ?>

 <?php
 echo '<span class="cart-number-box';
 $my_cart_count = $woocommerce->cart->cart_contents_count;
 if ($my_cart_count > 0) {
  echo ' active';
 } 
 echo '">';
 ?><span>
 <?php
  echo sprintf( _n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes' ), $woocommerce->cart->cart_contents_count );
 ?></span>


 <?php

  $fragments['span.cart-number-box'] = ob_get_clean();

  return $fragments;
 } // End woocommerce_header_add_to_cart_fragment()
}


/*=============================
   Remove Billing Field
===============================
*/
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
     unset($fields['billing']['billing_cellphone']);
     unset($fields['billing']['billing_address_2']);
     unset($fields['order']['billing_cellphone']);

     return $fields;
}



/*=============================
    Remove Order note
==================================
*/
// Removes Order Notes Title - Additional Information & Notes Field
add_filter( 'woocommerce_enable_order_notes_field', '__return_false', 9999 );

add_filter( 'woocommerce_checkout_fields' , 'remove_order_notes' );
function remove_order_notes( $fields ) {
     unset($fields['order']['order_comments']);
     return $fields;
}

 

/*=============================
    Remove password strength check 
==================================
*/
function mukto_remove_password_strength() {
    wp_dequeue_script( 'wc-password-strength-meter' );
}
add_action( 'wp_print_scripts', 'mukto_remove_password_strength', 10 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );

/*=============================
    Custom Cart Text 
==================================
*/
function mukto_custom_cart_button_text() {
        return __( 'Buy Now', 'woocommerce' );
 }
add_filter( 'woocommerce_product_single_add_to_cart_text', 'mukto_custom_cart_button_text' );  