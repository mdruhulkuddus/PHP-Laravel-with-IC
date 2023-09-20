<?php

$fruits = array("apple", "banana", "orange");
if (in_array("banana", $fruits)) {
  echo "Found banana in the array!\n";
} else {
  echo "Could not find banana in the array!";
}

$fruits = array("apple", "banana", "orange");
if (in_array("BANANA", $fruits, true)) {
  echo "Found BANANA in the array!";
} else {
  echo "Could not find BANANA in the array!";
}

