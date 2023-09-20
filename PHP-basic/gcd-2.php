<?php

function gcd($a, $b) {
    if ($b === 0) {
        return $a;
    }

    return gcd($b, $a % $b);
}

$number1 = 48;
$number2 = 18;

$result = gcd($number1, $number2);
echo "GCD of $number1 and $number2 is: $result";
