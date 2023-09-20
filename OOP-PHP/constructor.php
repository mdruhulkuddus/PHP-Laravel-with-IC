<?php

class Ostad{
    //properties
    public $companyName = "ostad Ltd\n";
    
    function __construct($msg)
    {
        echo $msg;
    }
}

//$obj = new Ostad(); // call without parameter
$obj = new Ostad("i am construcor parameter");


