<?php
/**
 * Below we will define an n-interesting polygon. Your task is to find the
 * area of a polygon for a given n.
 *
 * A 1-interesting polygon is just a square with a side of length 1.
 * An n-interesting polygon is obtained by taking the n - 1-interesting
 * polygon and appending 1-interesting polygons to its rim, side by side.
 */
function shapeArea($n){
    return pow($n, 2) + pow($n-1, 2);
}

$n = 5;
$result = shapeArea($n);
var_dump($result);
