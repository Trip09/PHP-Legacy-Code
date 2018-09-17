<?php

namespace VideoLibrary;

include "Pricer.php";
include "Video.php";


class Rental
{
    private $video;
    private $price;

    public function __construct($video)
    {
        $this->video = $video;
        $pricer = new Pricer();
        $this->price = $pricer->price($this->video);
    }

    public function getPrice()
    {
        return $this->price;
    }
}