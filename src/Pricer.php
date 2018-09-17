<?php

namespace VideoLibrary;
include "ImdbService.php";

class Pricer
{
    public function price($video)
    {
        $rating = ImdbService::getRating($video->getId());

        $price = 3.95;

        if($rating >= 7.0){
            $price += 1.0;
        }

        if($rating < 4.0){
            $price -= 1.0;
        }

        return $price;
    }
}