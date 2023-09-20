<?php

$car = array(
    "micro", "zip", "noah", "BMW"
);

$key = array_search("noah", $car);
echo $key;
echo "\n";
echo $car[$key];
