<?php

/*
 protected members are accessible within the class and any subclasses that inherit from it,
 Outside of the class, protected properties and methods are not accessible.
 */

class Car{
    private $price;
    protected function getPrice()
    {
        return $this->price = 80;
    }
}

class Vichle extends Car{
   public function setPrice(){
    return $this->getPrice(); // not error for protected 
   }
}

$obj = new Vichle();
echo $obj -> setPrice();

//$obj = new Car();
//echo $obj -> getPrice(); // error for protected

//$obj -> price = 09; // error