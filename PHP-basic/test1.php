<?php

$x = 10; $y = 5;
function fun(){
    $y = $GLOBALS['x']+$GLOBALS['y'];
}


fun(); echo $y; 