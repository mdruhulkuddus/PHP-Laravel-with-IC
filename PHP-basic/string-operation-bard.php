<?php

$str = trim(fgets(STDIN));
$q = intval(trim(fgets(STDIN)));

// Create a stack to store the reversed string.
$stack = [$str];

while ($q--) {
    $qLine = trim(fgets(STDIN));

    // Get the type of operation.
    $type = $qLine[0];

    // If the operation is type 1, reverse the string.
    if ($type === 1) {
        $stack = array_reverse($stack);
    }

    // If the operation is type 2, add the character to the beginning or end of the string.
    elseif ($type === 2) {
        $op = $qLine[2];
        $char = $qLine[4];

        if ($op === 1) {
            array_push($stack, $char);
        } else {
            array_unshift($stack, $char);
        }
    }
}

// Reverse the stack to get the final string.
print_r($stack);
$finalString = "";
while (!empty($stack)) {
    $finalString .= array_pop($stack);
}

// Print the final string.
echo $finalString . "\n";

?>
