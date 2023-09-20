<?php
/* The wrapping up of data and methods into a single unit (called class) is known as encapsulation. */

class Encapsulation{
    private $price;
    private $name;

    public function getValue(){
        return $this -> name;
    }
    public function setValue($val){
        $this -> name = $val;
    }
}

$object = new Encapsulation();
$object -> setValue("Ruhul");
echo $object -> getValue();