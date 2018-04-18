<?php
/**
 * Given an array of integers, find the pair of adjacent elements that
 * has the largest product and return that product.
 */
function adjacentElementsProduct($inputArray) {
    $products = [];

    for ($i=0, $limit = count($inputArray)-1; $i < $limit; $i++) {
        $products[] = $inputArray[$i] * $inputArray[$i+1];
    }

    return max($products);
}



$inputArray = [3, 6, -2, -5, 7, 3];
$result = adjacentElementsProduct($inputArray);

var_dump($result);
