<?php

function countTripletsThreeSum($nums)
{
    sort($nums);
    $triplets = [];
    for ($i = 0; $i < count($nums); $i++) {
        $a = $nums[$i];
        $L = $i + 1;
        $R = count($nums) - 1;
        $target = -$a;
        while ($L < $R) {
            if ($nums[$L] + $nums[$R] > $target) $R--;
            else if ($nums[$L] + $nums[$R] < $target) $L++;
            else {
                $b = $nums[$L];
                $c = $nums[$R];
                while ($L + 1 < $R && $nums[$L + 1] == $b) {
                    $L++;
                }
                while ($L < $R - 1 && $nums[$R - 1] == $c) {
                    $R--;
                }
                array_push($triplets, [$a, $b, $c]);
                $L++;
                $R--;
            }
        }
        while ($i + 1 < sizeof($nums) && $nums[$i + 1] == $nums[$i]) $i++;
    }
    return count($triplets);
}

$n = fgets(STDIN);
$arr = explode(" ", trim(fgets(STDIN)));
echo countTripletsThreeSum($arr);