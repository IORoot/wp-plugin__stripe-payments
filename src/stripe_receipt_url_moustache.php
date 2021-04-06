<?php

// https://s-plugins.com/stripe-payments-plugin-filter-hooks-reference/

add_action('asp_email_body_tags_vals_before_replace', 'stripe_receipt_url_moustache', 10, 2);


function stripe_receipt_url_moustache($tags_vals, $post)
{
    $charge = json_decode(json_encode($post["charge"]));

    $tags_vals['tags'][] = "{receipt_url}";
    $tags_vals['vals'][] = $charge->receipt_url;

    return $tags_vals;
}
