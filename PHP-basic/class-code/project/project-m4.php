<?php

$orginal= "abcdefghijklmnopqrstuvwxyz1234567890";

$parts = str_split($orginal);
print_r($parts);
shuffle($parts);
$key = join('', $parts);
echo $key;

$orginal= "abcdefghijklmnopqrstuvwxyz1234567890";
$key = "hoieq7nu9dlt35yacb6vm01fjr2wsx4zpg8k";