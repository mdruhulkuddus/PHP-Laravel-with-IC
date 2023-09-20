<?php

use Father as GlobalFather;

abstract class Father{
    public function jomijomaFather(){
        echo " 10 Biga from father";
    }
}

class Child extends Father{
    // overriding..
    public function jomijoma(){
        echo "3 Biga from child";
    }
}

//$fatherObj = new Father();
$childObj = new Child();
$childObj -> jomijoma();
$childObj -> jomijomaFather();