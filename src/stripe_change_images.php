<?php

add_filter( 'asp_ng_pp_data_ready', 'change_stripe_image', 10, 2 );


function change_stripe_image($data, $id)
{
    
    # Get the original image address from the product (rather than the generated thumb)
    $thumb = get_post_meta( $data['product_id'], 'asp_product_thumbnail', true );

    # Change the thumb to the image
    $data['item_logo'] = $thumb;

    return $data;
}
