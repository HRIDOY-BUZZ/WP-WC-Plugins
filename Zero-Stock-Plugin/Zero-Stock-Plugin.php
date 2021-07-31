<?php

/**
 * Plugin Name:       Zero Stock Plugin
 * Plugin URI:        https://github.com/HRIDOY-BUZZ/WP-WC-Plugins/blob/master/Zero-Stock-Plugin/Zero-Stock-Plugin.php
 * Description:       Hides the Add to Cart button for Zero stock or out of stock WooCommerce products
 * Version:           1.0.0
 * Author:            Al-Amin Islam Hridoy
 * Author URI:        https://github.com/HRIDOY-BUZZ
 */

add_action('woocommerce_after_shop_loop_item', 'hideAddToCart');

 function hideAddToCart()
{
    global $product;
    
    if($product->get_stock_status() == "outofstock")
    {
        $p_id = $product->get_id();
        ?>
        
        <style>
            a.button[data-product_id='<?php echo $p_id; ?>']
            {
                display: none !important;
            }
        </style>
        
        <?php
    }
}