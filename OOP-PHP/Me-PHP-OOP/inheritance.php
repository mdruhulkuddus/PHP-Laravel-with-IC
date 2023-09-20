<?php

use Child as GlobalChild;
use Father as GlobalFather;

class Father{
    public $name;
    public function fatherName()
    {
       return $name = " ABS";
    }
}

class Child extends Father{
    // $name, fatherName()
    public function childName()
    {
        echo " i am child\n";
    }
}

$object = new Father();
echo $object -> fatherName();

// inherit prove
$object = new Child();
echo $object -> fatherName();
$object -> childName();