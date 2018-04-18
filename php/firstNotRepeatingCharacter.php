<?php
/**
 * Given a string s, find and return the first instance of a non-repeating
 * character in it. If there is no such character, return '_'.
 */
function firstNotRepeatingCharacter($s){
    foreach (array_count_values(str_split($s)) as $key => $val) {
        if ($val == 1) return $key;
    }
    return '_';
}


/**
 * Optimized with array_search
 */
function firstNotRepeatingCharacter2($s){
    return array_search(1, array_count_values(str_split($s))) ?: "_";
}



$s = 'nghharrn';
$result = firstNotRepeatingCharacter($s);

var_dump($result);
