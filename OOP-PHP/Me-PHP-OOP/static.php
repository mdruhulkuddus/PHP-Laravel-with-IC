<?php

use Student as GlobalStudent;

class Student{
    public static $count;
    public static function getCount()
    {
        return self::$count;
    }
}

Student::$count = 50;
echo Student::getCount();