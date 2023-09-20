<?php

class Student{
    public $name;
    public function __construct($name)
    {
        $this -> name = $name;
    }

    public function getName()
    {
        echo $this->name . "\n";
    }
}

$obj = new Student("ruhul");
$obj -> getName();