<?php

// https://s-plugins.com/stripe-payments-plugin-filter-hooks-reference/

add_action('asp_stripe_payments_checkout_page_result', 'custom_thankyou_message', 10, 2);


function custom_thankyou_message($output, $txn_data)
{

    //Do stuff
    //print_r($txn_data);//Lets see what transaction data is available in this array.

    $new .= '<h3 id="details" class="text-4xl md:text-6xl px-4 md:px-10 mt-10 mb-2 text-center font-semibold">Hey '.$txn_data["customer_name"].'!</h3>';
    $new .= '<h4 id="details" class="text-2xl md:text-3xl px-4 md:px-10 mb-2 text-center font-semibold">Thanks for making a purchase, it makes a big difference to us.</h4>';
    $new .= '<div class="text-2xl px-4 md:px-10 mb-4 text-night text-center">Any issues, please contact us via our <a class="underline text-Amber500 hover:bg-black px-1 rounded-md" href="/contact">contact page</a>.</div>';
    $new .= '<div class="text-2xl px-4 md:px-10 mb-4 text-night text-center">Just to make sure all the details are correct, here\'s what you just bought:</div>';
    

    return $new;
}
