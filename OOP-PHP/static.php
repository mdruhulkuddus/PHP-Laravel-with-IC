<?php

use Ostad as GlobalOstad;

class Ostad{
    //properties
    static $companyName = "ostad Ltd\n";
    
    static function Address($msg)
    {
        echo $msg;
    }
}

Ostad::Address("from static function\n");
echo Ostad::$companyName;