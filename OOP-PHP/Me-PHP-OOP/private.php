<?php

/*
 private members are only accessible within the class in which they are declared, 
private property could not use out of class or inherited class*/

class Car{
    private $price;
    private function getPrice()
    {
        return $this->price = 80;
    }
}

class Vichle extends Car{
   public function setPrice(){
   // return $this->getPrice(); // error for private
   }
}

$obj = new Vichle();
echo $obj -> setPrice();
//$obj -> price = 09; // error