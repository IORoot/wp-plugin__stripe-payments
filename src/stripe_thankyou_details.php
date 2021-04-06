<?php

// https://s-plugins.com/stripe-payments-plugin-filter-hooks-reference/

add_action('asp_stripe_payments_checkout_page_result', 'custom_thankyou_details', 30, 2);


function custom_thankyou_details($output, $txn_data)
{

    //Do stuff
    //print_r($txn_data);//Lets see what transaction data is available in this array.

    $new = $output;

    $new .= '<div class="flex flex-wrap items-stretch py-4 md:py-10 pr-4 md:pr-10 text-center">';

        $new .= '<div class="block w-full md:w-1/2 lg:w-1/4 rounded pl-4 md:pl-10 mb-4 md:mb-10 relative">
            <div class="p-4 md:p-10 h-full rounded bg-white text-night">
                <div class="">Purchase</div>
                <div class="flex justify-center">
                    <svg class="h-60 p-4 md:p-10 fill-night" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22C15.89,22 15,21.1 15,20C15,18.89 15.89,18 17,18M1,2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,11.97C16.96,12.58 16.3,13 15.55,13H8.1L7.2,14.63L7.17,14.75A0.25,0.25 0 0,0 7.42,15H19V17H7C5.89,17 5,16.1 5,15C5,14.65 5.09,14.32 5.24,14.04L6.6,11.59L3,4H1V2M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22C5.89,22 5,21.1 5,20C5,18.89 5.89,18 7,18M16,11L18.78,6H6.14L8.5,11H16Z"/>
                    </svg>
                </div>
                <div class="text-3xl py-2 border-t-2">Product</div>
                <div class="text-3xl text-sky">'.$txn_data["item_name"].'</div>
            </div>
        </div>';

        $new .= '<div class="block w-full md:w-1/2 lg:w-1/4 rounded pl-4 md:pl-10 mb-4 md:mb-10 relative">
            <div class="p-4 md:p-10 h-full rounded bg-white text-night">
                <div class="">Amount</div>
                <div class="flex justify-center">
                    <svg class="h-60 p-4 md:p-10 fill-night" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20H4A2,2 0 0,1 2,18V6A2,2 0 0,1 4,4M4,6V18H11V6H4M20,18V6H18.76C19,6.54 18.95,7.07 18.95,7.13C18.88,7.8 18.41,8.5 18.24,8.75L15.91,11.3L19.23,11.28L19.24,12.5L14.04,12.47L14,11.47C14,11.47 17.05,8.24 17.2,7.95C17.34,7.67 17.91,6 16.5,6C15.27,6.05 15.41,7.3 15.41,7.3L13.87,7.31C13.87,7.31 13.88,6.65 14.25,6H13V18H15.58L15.57,17.14L16.54,17.13C16.54,17.13 17.45,16.97 17.46,16.08C17.5,15.08 16.65,15.08 16.5,15.08C16.37,15.08 15.43,15.13 15.43,15.95H13.91C13.91,15.95 13.95,13.89 16.5,13.89C19.1,13.89 18.96,15.91 18.96,15.91C18.96,15.91 19,17.16 17.85,17.63L18.37,18H20M8.92,16H7.42V10.2L5.62,10.76V9.53L8.76,8.41H8.92V16Z"/>
                    </svg>
                </div>
                <div class="text-3xl py-2 border-t-2">Quantity</div>
                <div class="text-3xl text-sky">'.$txn_data["item_quantity"].'</div>
            </div>
        </div>';

        $new .= '<div class="block w-full md:w-1/2 lg:w-1/4 rounded pl-4 md:pl-10 mb-4 md:mb-10 relative">
            <div class="p-4 md:p-10 h-full rounded bg-white text-night">
                <div class="">cost</div>
                <div class="flex justify-center">
                    <svg class="h-60 p-4 md:p-10 fill-night" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 19C13 18.66 13.04 18.33 13.09 18H3V12H19V13C19.7 13 20.37 13.13 21 13.35V6C21 4.89 20.11 4 19 4H3C1.89 4 1 4.89 1 6V18C1 19.1 1.89 20 3 20H13.09C13.04 19.67 13 19.34 13 19M3 6H19V8H3V6M17.75 22L15 19L16.16 17.84L17.75 19.43L21.34 15.84L22.5 17.25L17.75 22"/>
                    </svg>
                </div>
                <div class="text-3xl py-2 border-t-2">Amount Paid</div>
                <div class="text-3xl text-sky">£'.$txn_data["paid_amount"].'</div>
            </div>
        </div>';

        $new .= '<div class="block w-full md:w-1/2 lg:w-1/4 rounded pl-4 md:pl-10 mb-4 md:mb-10 relative">
            <div class="p-4 md:p-10 h-full rounded bg-white text-night">
                <div class="">LondonParkour ID</div>
                <div class="flex justify-center">
                    <svg class="h-60 p-4 md:p-10 fill-night" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15,14V11H18V9L22,12.5L18,16V14H15M14,7.7V9H2V7.7L8,4L14,7.7M7,10H9V15H7V10M3,10H5V15H3V10M13,10V12.5L11,14.3V10H13M9.1,16L8.5,16.5L10.2,18H2V16H9.1M17,15V18H14V20L10,16.5L14,13V15H17Z"/>
                    </svg>
                </div>
                <div class="text-3xl py-2 border-t-2">Transaction ID</div>
                <div class="text-sky">'.$txn_data["txn_id"].'</div>
            </div>
        </div>';
        
    $new .= '</div>';




    $new .= '<div class="flex flex-wrap items-stretch py-4 md:py-10 pr-4 md:pr-10 text-center bg-Emerald400">';

        $new .= '<div class="block w-full md:w-1/2 lg:w-1/4 rounded pl-4 md:pl-10 mb-4 md:mb-10 relative">
            <div class="p-4 md:p-10 h-full rounded bg-white text-night">
                <div class="">Payment Result</div>
                <div class="flex justify-center">
                    <svg class="h-60 p-4 md:p-10 fill-night" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.93,4.93C3.12,6.74 2,9.24 2,12C2,14.76 3.12,17.26 4.93,19.07L6.34,17.66C4.89,16.22 4,14.22 4,12C4,9.79 4.89,7.78 6.34,6.34L4.93,4.93M19.07,4.93L17.66,6.34C19.11,7.78 20,9.79 20,12C20,14.22 19.11,16.22 17.66,17.66L19.07,19.07C20.88,17.26 22,14.76 22,12C22,9.24 20.88,6.74 19.07,4.93M7.76,7.76C6.67,8.85 6,10.35 6,12C6,13.65 6.67,15.15 7.76,16.24L9.17,14.83C8.45,14.11 8,13.11 8,12C8,10.89 8.45,9.89 9.17,9.17L7.76,7.76M16.24,7.76L14.83,9.17C15.55,9.89 16,10.89 16,12C16,13.11 15.55,14.11 14.83,14.83L16.24,16.24C17.33,15.15 18,13.65 18,12C18,10.35 17.33,8.85 16.24,7.76M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10Z"/>
                    </svg>
                </div>
                <div class="text-3xl py-2 border-t-2">Stripe.com Status</div>
                <div class="text-3xl text-sky">'.$txn_data["charge"]["status"].'</div>
            </div>
        </div>';

        $new .= '<div class="block w-full md:w-1/2 lg:w-1/4 rounded pl-4 md:pl-10 mb-4 md:mb-10 relative">
            <div class="p-4 md:p-10 h-full rounded bg-white text-night">
                <div class="">Stripe.com Receipt</div>
                <div class="flex justify-center">
                    <svg class="h-60 p-4 md:p-10 fill-night" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3,22L4.5,20.5L6,22L7.5,20.5L9,22L10.5,20.5L12,22L13.5,20.5L15,22L16.5,20.5L18,22L19.5,20.5L21,22V2L19.5,3.5L18,2L16.5,3.5L15,2L13.5,3.5L12,2L10.5,3.5L9,2L7.5,3.5L6,2L4.5,3.5L3,2M18,9H6V7H18M18,13H6V11H18M18,17H6V15H18V17Z"/>
                    </svg>
                </div>
                <div class="text-3xl py-2 border-t-2">Need a Receipt?</div>
                <div class="text-3xl text-Amber500 underline hover:bg-night hover:text-white"><a href="'.$txn_data["charge"]["receipt_url"].'" target="_blank">Stripe Receipt Link</a></div>
            </div>
        </div>';

        $new .= '<div class="block w-full md:w-1/2 lg:w-1/4 rounded pl-4 md:pl-10 mb-4 md:mb-10 relative">
            <div class="p-4 md:p-10 h-full rounded bg-white text-night">
                <div class="">Stripe.com</div>
                <div class="flex justify-center">
                    <svg class="h-60 p-4 md:p-10 fill-night" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3,5A2,2 0 0,1 5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5M6,6V18H10V16H8V8H10V6H6M16,16H14V18H18V6H14V8H16V16Z"/>
                    </svg>
                </div>
                <div class="text-3xl py-2 border-t-2">Stripe Payment ID</div>
                <div class="text-sky">'.$txn_data["charge"]["payment_intent"].'</div>
            </div>
        </div>';

        $new .= '<div class="block w-full md:w-1/2 lg:w-1/4 rounded pl-4 md:pl-10 mb-4 md:mb-10 relative">
            <div class="p-4 md:p-10 h-full rounded bg-white text-night">
                <div class="">Your card</div>
                <div class="flex justify-center">
                    <svg class="h-60 p-4 md:p-10 fill-night" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 4C2.89 4 2 4.89 2 6V18C2 19.11 2.89 20 4 20H20C21.11 20 22 19.11 22 18V6C22 4.89 21.11 4 20 4H4M4 6H20V10H4V6M4 12H8V14H4V12M10 12H20V14H10V12M4 16H14V18H4V16M16 16H20V18H16V16Z"/>
                    </svg>
                </div>
                <div class="text-3xl py-2 border-t-2">Card Details</div>
                <div class="text-3xl text-left">Brand: <span class="text-sky">'.$txn_data["charge"]["payment_method_details"]["card"]["brand"].'</span></div>
                <div class="text-3xl text-left">Last 4 digits: <span class="text-sky">'.$txn_data["charge"]["payment_method_details"]["card"]["last4"].'</span></div>
                <div class="text-3xl text-left">Expiry: <span class="text-sky">'.$txn_data["charge"]["payment_method_details"]["card"]["exp_month"].'/'.$txn_data["charge"]["payment_method_details"]["card"]["exp_year"].'</span></div>
                <div class="text-3xl text-left">CVC Check: <span class="text-sky">'.$txn_data["charge"]["payment_method_details"]["card"]["checks"]["cvc_check"].'</span></div>
            </div>
        </div>';
        
    $new .= '</div>';



    return $new;
}
