<?php

# https://github.com/Arsenal21/stripe-payments-enhancements/blob/master/asp-email-tags-for-seller-email-subject/class-asp-email-tags-for-subject.php

// The Payment page can add an extra "date" parameter on the URL.
// https://dev.londonparkour.com/?asp_action=show_pp&product_id=3366&date=123
// This value is inserted into the response emails.
// We can use this to add the class date into email responses by altering the link URL.

class ASP_custom_field_to_description {


    
	public function __construct() {
        add_filter( 'asp_seller_email_body', array( $this, 'email_body_handler' ), 10, 2 );
        add_filter( 'asp_buyer_email_body', array( $this, 'email_body_handler' ), 10, 2 );
        add_filter( 'asp_seller_email_subject', array( $this, 'email_subj_handler' ), 10, 2 );
	}



    public function email_body_handler( $body, $data ) {

        if (!isset($_GET['date'])){
            $body = preg_replace('/{injected_date}/', '', $body);
            return $body;
        }

        $body = preg_replace('/{injected_date}/', 'Class Date: '.$_GET['date'], $body);
		return $body;
	}



    public function email_subj_handler( $subj, $data ) {

        if (!isset($_GET['date'])){
            return $subj;
        }

		$subj = $_GET['date'] . " || ". $subj;
		return $subj;
	}

}

new ASP_custom_field_to_description();