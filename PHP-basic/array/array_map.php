<?php

function square($n){
    return $n * $n;
}

$numbers = [10, 20, 30];

$result = array_map('square', $numbers);

print_r($result); echo "<br>";

// anonymus fun

//$rr = array_map(function ($n){return $n * $n;}, $numbers);
// same
$rr = array_map(fn ($n) => $n * $n, $numbers);
print_r($rr);



