<?php
# Write your PHP code from here
$str = trim(fgets(STDIN));
$q = intval(trim(fgets(STDIN)));
while($q--){
    $qLine = trim(fgets(STDIN));
    if($qLine[0] == 2)
    {
        $op = $qLine[2];
        $char = $qLine[4];
        if($op == 1) {
            $str = $char.$str;
        }
        else {
            $str = $str.$char;
        }
    }
    else{
        $str = strrev($str);
    }
}

echo $str;

?>