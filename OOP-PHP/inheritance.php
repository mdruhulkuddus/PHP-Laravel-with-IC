<?php

class Father{
    public function jomijoma(){
        echo "10 Biga from father";
    }
}

class Child extends Father{
    // overriding..
    public function jomijoma(){
        echo "3 Biga from child";
    }
}


$childObj = new Child();
$childObj -> jomijoma();