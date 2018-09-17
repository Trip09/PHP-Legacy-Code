<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 17/09/2018
 * Time: 11:11
 */

namespace VideoLibrary;


class ImdbService
{
    private static $ratings = array(
        "tt0083658" => 8.2, // Blade Runner
        "tt0327554" => 3.3, // Catwoman
        "tt1583420" => 6.1  // Larry Crowne
    );

    public static function getRating($getId)
    {
        // code to connect to IMDB API goes here

        // hardcoded response for demonstration purposes;

        return self::$ratings[$getId];
    }
}