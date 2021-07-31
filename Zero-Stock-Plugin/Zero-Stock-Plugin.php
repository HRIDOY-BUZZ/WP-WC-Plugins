<?php

/**
 * Plugin Name:       Zero Stock Plugin
 * Plugin URI:        
 * Description:       Hides the Add to Cart button for Zero stock or out of stock WooCommerce products
 * Version:           1.0
 * Author:            Al-Amin Islam Hridoy
 * Author URI:        https://github.com/HRIDOY-BUZZ
 */

add_action('woocommerce_after_shop_loop_item', 'hideAddToCart');

 function hideAddToCart()
{
    global $product;
    $status = $product->get_stock_status();
    
    if($status == "outofstock")
    {
        //echo $product->get_id();
        remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart');
    }
    //var_dump($product);
}