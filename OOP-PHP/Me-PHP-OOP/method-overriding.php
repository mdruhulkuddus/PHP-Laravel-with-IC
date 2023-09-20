<?php

use Father as GlobalFather;

class Father{
    function addTwo()
    {
        $num1 = 10; $num2 = 20;
        $add = $num1 + $num2;
        echo $add;
    }
}

class Son extends Father{
    // method overrinding
    function addTwo()
    {
        $num1 = 50; $num2 = 100;
        $add = $num1 + $num2;
        echo $add;
    }
}

$obj = new Son();
$obj -> addTwo();

$obj = new Father();
$obj -> addTwo();