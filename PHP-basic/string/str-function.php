<?php

$str = "hello world i am ruhul";

echo strlen($str); echo "<br />";

echo str_word_count($str); echo "<br />";
//string reverse
echo strrev($str); echo "<br />";

//string position
$pos = strpos($str, "ruhul"); echo "<br />";
if($pos) echo "find" ;
else echo "not"; echo "<br />";

// prog replace on am
echo str_replace("am", "programmer", $str); echo "<br />";     

//array to string
$arr = array('car', 'bus', 'riksa');
echo implode("", $arr); echo "<br />"; echo "string to array <br>";


// string to array
print_r(explode(" ", $str)); echo "<br />";

echo array_shift($arr); 
// trim remov space of string
$s = "hello World";

echo "ekahne" ;
echo strpos('world', $s);
echo trim($s); echo "<br />";

echo strtoupper($s); echo "<br />";
echo strtolower($s); echo "<br />";

print_r(str_split($s)); echo "<br />";
echo str_repeat($s, 3); echo "<br />";

// hash
echo sha1($s); echo "<br />";
echo md5($s);  echo "<br />";
$s = "hello World!";

echo "ekahne" ;
echo strpos( $s,'World');