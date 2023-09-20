<?php

abstract class MyClass{
    function Hello()
    {
        echo "Hi";
    }    
    abstract function show(); // abstract method
    abstract function add($a, $b); // abstract method
}

class CyClass extends MyClass{
    function show()        // ofcourse emplement show method like supper class method
    {
        echo "hello world ";
    }
    function add($aa, $bb){  // parameter name can change but fixed like super class
        echo $aa + $bb;
    }
}

$obj = new CyClass();
$obj -> show();
$obj -> add(5, 10);