<?php

/*
Plugin Name:  _ANDYP - Stripe Payment Customisations
Plugin URI:   londonparkour.com
Description:  Creates customisations for the Stripe-payment plugin by Tips and Tricks HQ
Version:      1.0.0
Author:       Andy Pearson
*/

define( 'ANDYP_STRIPE_ADDON_PATH', __DIR__ );
define( 'ANDYP_STRIPE_ADDON_URL', plugins_url( '/', __FILE__ ) );

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Action - Generate Coupon Codes                       │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/stripe_giftcard_generator.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Action - Create {receipt_url} for emails             │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/stripe_receipt_url_moustache.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Action - Title for the thank-you page                │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/stripe_thankyou_message.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Action - Customises the thank-you page               │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/stripe_thankyou_details.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Action - Adds a hidden date field to stripe          │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/stripe_class_date_in_email.php';