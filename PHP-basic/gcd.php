<?php

function gcd($a, $b){
    if($b === 0){
        return $a;
    }
    return gcd($b, $a % $b);
}

function lcm($a, $b, $gcd){
    return ($a / $gcd) * $b;
}

// list($n1, $n2) = explode(" ", fgets(STDIN));
$n1 = 48; $n2 = 18;
$gcd = gcd($n1, $n2);
echo $gcd;
$lcm = lcm($n1, $n2, $gcd);
echo "\n" . $lcm;



