<?php

$name = "Ruhul Kuddus";


function getName(){
    global $name;
    return $name;
}

echo getName();