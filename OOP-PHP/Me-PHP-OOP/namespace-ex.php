<?php
// Defining a namespace
namespace MyApp\Utils;

// Declaring a class inside the namespace
class StringHelper {
    public static function truncate($string, $length) {
        if (strlen($string) > $length) {
            $string = substr($string, 0, $length) . '...';
        }
        return $string;
    }
}

// Using the class from the namespace
$string = "This is a very long string that needs to be truncated";
$shortenedString = \MyApp\Utils\StringHelper::truncate($string, 20);
echo $shortenedString; // Output: "This is a very long..."
