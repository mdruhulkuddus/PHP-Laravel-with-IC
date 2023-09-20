<?php

$fruits = ["banana", "mango", "zakfruit", "jasim", "jasim"];

//sort($fruits);

echo count($fruits);

print_r(array_unique($fruits)); echo "<br>"; // remove duplicate

$name = [
    "roll" => 10,
    "class" => "1st"
];

print_r(array_values($name)); // show only array values not key
print_r(array_keys($name)); // show only key

array_shift($fruits); // remove element from front
print_r($fruits); echo "<br>";
array_unshift($fruits, "kola", "apple");
print_r($fruits); echo "<br>";

array_push($fruits, "lebo");  // add value in end
print_r($fruits);  echo "<br>";
array_pop($fruits); // pop from end
print_r($fruits); echo "<br>";


echo  str_repeat("hello prithibi<br>", 10);