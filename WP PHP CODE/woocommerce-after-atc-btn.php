function woodmart_custom_btn_after_cart()
{
echo '<div class="btn-after-add-to-cart wd-add-btn wd-add-btn-replace woodmart-add-btn"><a href="#"
        class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-loop pop-open"><span>Request
            Consultation</span></a></div>';
}
add_action( 'woocommerce_after_shop_loop_item', 'woodmart_custom_btn_after_cart', 20 );
add_action( 'woocommerce_after_add_to_cart_button', 'woodmart_custom_btn_after_cart', 20 );