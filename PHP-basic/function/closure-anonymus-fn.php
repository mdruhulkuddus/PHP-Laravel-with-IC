<?php

// closure / anonymous  function

//$name = function ($str){
//    echo $str;
//};
//
//$name("ruhul");

// callback with anonymous function

 function Greeting ($name, $message){
        echo $name.PHP_EOL;
        echo $message();
}

Greeting("ruhul", function (){
    $time = date('H:i');
    echo "Have a great day {$time}";
});
