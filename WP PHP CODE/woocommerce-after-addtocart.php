global $product;
    $cat = $product->get_category_ids();

    if( in_array( 15, $cat ) )
    { 
        return;
    }
    else 
    {
        echo '<div class="btn-after-add-to-cart wd-add-btn wd-add-btn-replace woodmart-add-btn"><a href="#" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-loop pop-open"><span>Request Consultation</span></a></div>';
    }
