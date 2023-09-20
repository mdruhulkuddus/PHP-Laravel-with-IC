<?php

// take one number input
$number1 = (int) fgets(STDIN);
echo $number1;
echo "\n";
list($n1, $n2) = explode(" ", fgets(STDIN));

echo $n1 . " " . $n2 . "\n";

fscanf(STDIN, "\n%s", $name);           
echo "Hello ".$name.".\n";