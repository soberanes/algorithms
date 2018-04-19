<?php
/**
 * You are given a two-digit integer n. Return the sum of its digits.
 */
function addTwoDigits($n){
    $sum = 0;
    foreach (str_split($n) as $value) {
        $sum += $value;
    }

    return $sum;
}

$n = 48;
$result = addTwoDigits($n);
var_dump($result);
