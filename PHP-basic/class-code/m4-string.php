<?php

$first_name = "John";
$last_name = "doe";

// string interfullation hoi in single quote

$str = "hello world i am ruhul";
$str2 = 'hello world i am ruhul';

echo $str . "\n " . $str2; echo  "\n ";

// php index start from 0
$car = ['bus', 'truck']; 
echo $car[0]; echo  "\n ";

$s = "  hello ";
$clean_space = trim($s); // rtrim , ltrim
echo $clean_space;  echo  "\n ";
echo strlen($clean_space);

// haystack - gorer ghada // needle - suic
$email = "hr@gmail.com";
$needle = 'h';
$is_o_present = strpos($email, $needle); 
//echo $is_o_present; echo  "\n ";
if($is_o_present!== false){
    echo "{$needle} is present and position {$is_o_present}";
}else{
    echo "{$needle} is not present";
}
echo  "\n ";

$st = "hello world i am ruhul";
echo substr($st, 2, 4);


// string to array
$st_array = explode(" ", $st);
print_r($st_array); echo  "\n ";

echo count($st_array); echo  "\n ";
//array to string
// delimator (-)
$str = implode("-", $st_array);

echo $str; echo  "\n ";

// string split

$s = "bangladesh";
$ss = str_split($s, 2);
print_r($ss);

// alias 
echo implode('...', $ss); echo  "\n ";

$find = "sh";
$replace = "hh";

echo str_replace($find, $replace, $s);