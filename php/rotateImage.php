<?php
/**
 * You are given an n x n 2D matrix that represents an image.
 * Rotate the image by 90 degrees (clockwise).
 */
function rotateImage($a){
    $res = [];
    foreach ($a as $row => $columns) {
        foreach ($columns as $row2 => $column2) {
            $res[$row2][$row] = $column2;
        }
    }

    foreach ($res as $key => $value) {
        $res[$key] = array_reverse($value);
    }

    return $res;
}

$a = [[10,9,6,3,7],
 [6,10,2,9,7],
 [7,6,3,8,2],
 [8,9,7,9,9],
 [6,8,6,8,2]];

$result = rotateImage($a);
var_dump($result);
