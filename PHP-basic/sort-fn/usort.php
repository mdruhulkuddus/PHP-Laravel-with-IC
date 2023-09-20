<?php

$array = ['sam', 'rahim', 'jabbar', 'atikunabi', 'ruhulkuddus'];

usort($array, function($a, $b){
    return strlen($a) > strlen($b);
});

print_r($array);
