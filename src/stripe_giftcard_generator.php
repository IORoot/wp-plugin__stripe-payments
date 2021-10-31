<?php

// https://s-plugins.com/stripe-payments-plugin-filter-hooks-reference/

add_action('asp_stripe_payments_checkout_page_result', 'giftcard_generator', 20, 2);


function giftcard_generator($output, $txn_data)
{

    //print_r($txn_data);//Lets see what transaction data is available in this array.
    if(!preg_match("/gift card/i", $txn_data["item_name"])) {
        return $output;
    }

    // Products for gift cards only.
    $stripe_product_ids = [
        '1541' => 1,
        '1540' => 11,
        '1539' => 5
    ];

    // check if payment is for a gift card.
    if (!isset($stripe_product_ids[$txn_data["product_id"]]))
    {
        return $output;
    }

    // generate new code
    $txn_id     = $txn_data["charge"]["payment_intent"];
    $name       = $txn_data["customer_name"];
    $short      = strtok($txn_data["customer_name"], " "); ;
    $code       = substr(md5($name . '-' . $txn_id . '-ldnpk'), 0, 4);
    $new_code   = strtoupper($short . '-' . $code);

    // create output to screen
    $output .= '<div class="w-full rounded px-4 md:px-10 my-4 md:my-10 relative">
        <div class="p-4 md:p-10 h-full rounded text-white bg-Amber500 fill-white">
            <div class="">Purchase</div>
            <div class="flex justify-center">
                <div class="text-8xl text-white mb-10 font-mono">'.$new_code.'</div>
            </div>
            <div class="text-3xl py-2 border-t-2 text-center">GIFT CARD CODE</div>
            <div class="text-2xl text-white text-center">Please keep this code safe. This is your discount coupon code you will use whenever you book into a new class.</div>
        </div>
    </div>';


    $args = array(
        'meta_key' => 'asp_coupon_code',
        'meta_value' => $new_code,
        'post_type' => 'asp_coupons',
        'posts_per_page' => -1
    );
    
    $exists = get_posts($args);

    // return if there are any results.
    if ($exists)
    {
        return $output;
    }


    // create new coupon post
    $post = [
        'post_title'  => '',
        'post_status' => 'publish',
        'content'     => '',
        'post_type'   => 'asp_coupons',
    ];
    $coupon_id = wp_insert_post( $post );

    // If theres a failure, exit.
    if (!$coupon_id){
        return $output;
    }

    // add relevant meta to new coupon.
    $quantity   = (string) $stripe_product_ids[$txn_data["product_id"]];
    $today      = date('Y-m-d');
    $next_year  = date('Y-m-d', strtotime('+1 year', strtotime($today)));

    $coupon = [
        'active'            => 1,
        'code'              => $new_code,
        'discount'          => '100',
        'disconut_type'     => 'perc',
        "red_limit"         => $quantity,
        "red_count"         => '0',
        "start_date"        => $today,
        "exp_date"          => $next_year,
        "only_for_allowed_products" => '0',
        "per_order"         => 0,
        "allowed_products"  => [],
    ];

    foreach ( $coupon as $key => $value ) {
        update_post_meta( $coupon_id, 'asp_coupon_' . $key, $value );
    }


    return $output;
}

