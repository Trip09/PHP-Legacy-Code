<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 17/09/2018
 * Time: 11:51
 */

namespace VideoLibrary;


class PaymentGateway
{
    const PAYMENT_ACCEPTED = 1;
    const PAYMENT_REJECTED = 2;

    private $responses = array(
        "1234234534564567" => 1,
        "2345345645675678" => 2
    );

    public function pay($creditCardNumber, $price)
    {
        // code to connect to external payment provider goes here

        // hardcoded test responses
        return $this->responses[$creditCardNumber];
    }
}