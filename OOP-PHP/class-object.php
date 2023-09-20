<?php

class Ostad{
    //properties
    public $companyName = "ostad Ltd\n";
    private $companyAddress = "Baridara\n";

    // behaviour
    public function AddTwoNumbers(){
        echo 5+5;
    }
    
    function address(){
        echo $this->companyAddress;
    }
}

$obj = new Ostad();

 $obj->AddTwoNumbers();
$obj -> address();
 echo $obj -> companyName;
