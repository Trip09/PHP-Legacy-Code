<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 17/09/2018
 * Time: 11:45
 */

namespace VideoLibrary;
include "Rental.php";
include "PaymentGateway.php";

class Customer
{
    private $rentals = array();
    private $creditCardNumber;

    public function __construct($creditCardNumber)
    {
        $this->creditCardNumber = $creditCardNumber;
    }

    public function rent($video)
    {
        $rental = new Rental($video);
        $price = $rental->getPrice();
        $paymentGateway = new PaymentGateway();

        $response = $paymentGateway->pay($this->creditCardNumber, $price);

        if($response == PaymentGateway::PAYMENT_ACCEPTED)
        {
            array_push($this->rentals, $rental);
        }
    }

    public function getRentalCount()
    {
        return count($this->rentals);
    }
}

$video = new Video("tt0083658");
$customer = new Customer("1234234534564567");
$customer->rent($video);
echo "Customer has rented " . $customer->getRentalCount() . " videos";