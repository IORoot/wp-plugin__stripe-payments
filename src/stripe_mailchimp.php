<?php

// Run Before sending to Stripe
add_action( 'asp_ng_before_payment_processing', 'stripe_mailchimp_add_to_list', 10, 1 );

function stripe_mailchimp_add_to_list($post_data){


    if ($_POST["asp_stripeCustomField"] != 'on'){
        return $post_data;
    }

    if (!isset($_POST["asp_email"])){
        return $post_data;
    }

    if (!isset($_POST["asp_billing_name"])){
        return $post_data;
    }

    // These constants are defined in wp-config.php
    $list_id        = MAILCHIMP_LIST_ID;
    $authToken      = MAILCHIMP_AUTH_TOKEN;
    $mailchimp_api  = MAILCHIMP_ENDPOINT;


    // The data to send to the API
    // Fullname = MMERGE5
    $postData = array(
        "email_address" => $_POST["asp_email"],
        "status" => "subscribed",
        "merge_fields" => [
            "MMERGE5"=> $_POST["asp_billing_name"]
        ]
    );

    // Setup cURL
    $ch = curl_init($mailchimp_api.'/lists/'.$list_id.'/members/');

    curl_setopt_array($ch, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array(
            'Authorization: apikey '.$authToken,
            'Content-Type: application/json'
        ),
        CURLOPT_POSTFIELDS => json_encode($postData)
    ));
    
    // Send the request
    $response = curl_exec($ch);

    // Send to debug log.
    error_log(print_r($response, true));

    return;

}
